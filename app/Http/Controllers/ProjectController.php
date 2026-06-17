<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        return Project::orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created project.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|array',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'is_highlighted' => 'nullable|boolean',
        ]);

        if (!isset($validated['slug']) || empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        return Project::create($validated);
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project)
    {
        return $project;
    }

    /**
     * Update the specified project.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'slug' => 'sometimes|string|unique:projects,slug,' . $project->id,
            'description' => 'sometimes|string',
            'content' => 'nullable|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|array',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'is_highlighted' => 'nullable|boolean',
        ]);

        return $project->update($validated) ? $project : null;
    }

    /**
     * Remove the specified project.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->noContent();
    }
}
