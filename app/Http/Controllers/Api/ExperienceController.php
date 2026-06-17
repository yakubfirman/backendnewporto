<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Experience::orderBy('start_date', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
            'type' => 'required|in:work,organization,speaker',
        ]);

        $experience = Experience::create($data);
        return response()->json($experience, 201);
    }

    public function show(Experience $experience)
    {
        return response()->json($experience);
    }

    public function update(Request $request, Experience $experience)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'company' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
            'type' => 'sometimes|required|in:work,organization,speaker',
        ]);

        $experience->update($data);
        return response()->json($experience);
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return response()->json(null, 204);
    }
}
