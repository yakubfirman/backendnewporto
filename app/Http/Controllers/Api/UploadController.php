<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            
            // If it's SVG, just store it normally (can't compress SVG with GD)
            if (strtolower($extension) === 'svg') {
                $path = $file->store('uploads', 'public');
            } else {
                // Initialize ImageManager
                $manager = new ImageManager(new Driver());
                $image = $manager->read($file);
                
                // Scale down if width > 1200
                $image->scaleDown(width: 1200);
                
                // Convert to webp with 80% quality
                $encoded = $image->toWebp(80);
                
                // Generate unique filename
                $filename = uniqid('img_') . '_' . time() . '.webp';
                $path = 'uploads/' . $filename;
                
                // Save to storage
                Storage::disk('public')->put($path, $encoded->toString());
            }

            $url = Storage::url($path);
            return response()->json([
                'url' => $url,
                'path' => $path,
                'filename' => basename($path),
            ], 200);
        }

        return response()->json(['message' => 'No image uploaded'], 400);
    }

    public function index(Request $request)
    {
        $files = Storage::disk('public')->files('uploads');
        $media = collect($files)->map(function ($file) {
            return [
                'filename' => basename($file),
                'path' => $file,
                'url' => Storage::url($file),
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
