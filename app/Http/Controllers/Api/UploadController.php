<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UploadController extends Controller
{
    private function getBasePath(Request $request)
    {
        $folder = $request->input('folder');
        if ($folder) {
            // Basic sanitization
            $folder = preg_replace('/[^a-zA-Z0-9_\-\/]/', '', $folder);
            // Prevent traversal
            $folder = str_replace('..', '', $folder);
            $folder = trim($folder, '/');
            return 'uploads' . ($folder ? '/' . $folder : '');
        }
        return 'uploads';
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
            'folder' => 'nullable|string'
        ]);

        $basePath = $this->getBasePath($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            
            // If it's SVG, just store it normally (can't compress SVG with GD)
            if (strtolower($extension) === 'svg') {
                $path = $file->store($basePath, 'public');
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
                $path = $basePath . '/' . $filename;
                
                // Save to storage
                Storage::disk('public')->put($path, $encoded->toString());
            }

            $url = Storage::url($path);
            if (!str_starts_with($url, 'http')) {
                $url = rtrim($request->getSchemeAndHttpHost(), '/') . '/' . ltrim($url, '/');
            }
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
        $basePath = $this->getBasePath($request);

        $directories = Storage::disk('public')->directories($basePath);
        $files = Storage::disk('public')->files($basePath);

        $folders = collect($directories)->map(function ($dir) {
            return basename($dir);
        })->values();

        $media = collect($files)->map(function ($file) use ($request) {
            $url = Storage::url($file);
            if (!str_starts_with($url, 'http')) {
                $url = rtrim($request->getSchemeAndHttpHost(), '/') . '/' . ltrim($url, '/');
            }
            return [
                'filename' => basename($file),
                'path' => $file,
                'url' => $url,
                'size' => Storage::disk('public')->size($file),
                'last_modified' => Storage::disk('public')->lastModified($file),
            ];
        })->sortByDesc('last_modified')->values();

        return response()->json([
            'folders' => $folders,
            'files' => $media,
            'current_folder' => $request->input('folder', '')
        ]);
    }

    public function createFolder(Request $request)
    {
        $request->validate([
            'folder' => 'required|string',
            'name' => 'required|string'
        ]);

        $basePath = $this->getBasePath($request);
        $name = preg_replace('/[^a-zA-Z0-9_\-]/', '', $request->input('name'));
        
        if (!$name) {
             return response()->json(['message' => 'Invalid folder name'], 400);
        }

        $newFolderPath = $basePath . '/' . $name;
        
        if (Storage::disk('public')->exists($newFolderPath)) {
             return response()->json(['message' => 'Folder already exists'], 400);
        }

        Storage::disk('public')->makeDirectory($newFolderPath);

        return response()->json(['message' => 'Folder created successfully']);
    }

    public function destroyFolder(Request $request)
    {
        $basePath = $this->getBasePath($request);
        
        if ($basePath === 'uploads') {
            return response()->json(['message' => 'Cannot delete root folder'], 400);
        }

        if (Storage::disk('public')->exists($basePath)) {
            Storage::disk('public')->deleteDirectory($basePath);
            return response()->json(['message' => 'Folder deleted successfully']);
        }

        return response()->json(['message' => 'Folder not found'], 404);
    }

    public function destroy(Request $request)
    {
        $path = $request->input('path');
        if (!$path || !str_starts_with($path, 'uploads/') || str_contains($path, '..')) {
            return response()->json(['message' => 'Invalid path'], 400);
        }
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
            return response()->json(['message' => 'Deleted']);
        }
        return response()->json(['message' => 'File not found'], 404);
    }

    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'paths'   => 'required|array|min:1',
            'paths.*' => 'required|string',
        ]);

        $paths   = $request->input('paths');
        $deleted = 0;
        $missing = 0;

        foreach ($paths as $path) {
            if (!$path || !str_starts_with($path, 'uploads/') || str_contains($path, '..')) {
                $missing++;
                continue;
            }
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
                $deleted++;
            } else {
                $missing++;
            }
        }

        return response()->json([
            'message' => "Deleted {$deleted} file(s).",
            'deleted' => $deleted,
            'missing' => $missing,
        ]);
    }
}
