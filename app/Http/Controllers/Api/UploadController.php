<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $url = Storage::url($path);
            return response()->json([
                'url' => $request->getSchemeAndHttpHost() . $url,
                'path' => $path,
                'filename' => basename($path),
            ], 200);
        }

        return response()->json(['message' => 'No image uploaded'], 400);
    }

    public function index(Request $request)
    {
        $files = Storage::disk('public')->files('uploads');
        $media = collect($files)->map(function ($file) use ($request) {
            return [
                'filename' => basename($file),
                'path' => $file,
                'url' => $request->getSchemeAndHttpHost() . Storage::url($file),
                'size' => Storage::disk('public')->size($file),
                'last_modified' => Storage::disk('public')->lastModified($file),
            ];
        })->sortByDesc('last_modified')->values();

        return response()->json($media);
    }

    public function destroy(Request $request)
    {
        $path = $request->input('path');
        if (!$path || !str_starts_with($path, 'uploads/')) {
            return response()->json(['message' => 'Invalid path'], 400);
        }
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
            return response()->json(['message' => 'Deleted']);
        }
        return response()->json(['message' => 'File not found'], 404);
    }
}
