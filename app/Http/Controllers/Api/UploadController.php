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
            
            // Return full absolute URL or relative URL.
            // Use the actual request host so port 8000 is included correctly
            return response()->json([
                'url' => $request->getSchemeAndHttpHost() . $url
            ], 200);
        }

        return response()->json(['message' => 'No image uploaded'], 400);
    }
}
