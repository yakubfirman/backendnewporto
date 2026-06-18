<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        return response()->json(SocialMedia::orderBy('order', 'asc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|url',
            'icon_url' => 'nullable|string|url',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $socialMedia = SocialMedia::create($data);
        return response()->json($socialMedia, 201);
    }

    public function show(SocialMedia $socialMedia)
    {
        return response()->json($socialMedia);
    }

    public function update(Request $request, SocialMedia $socialMedia)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'url' => 'sometimes|required|string|url',
            'icon_url' => 'nullable|string|url',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $socialMedia->update($data);
        return response()->json($socialMedia);
    }

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return response()->json(null, 204);
    }
}
