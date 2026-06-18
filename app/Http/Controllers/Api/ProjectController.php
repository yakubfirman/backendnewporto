<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|array',
            'categories' => 'nullable|array',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'is_highlighted' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        $project = Project::create($data);
        return response()->json($project, 201);
    }

    public function show(Project $project)
    {
        return response()->json($project);
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'slug' => 'sometimes|required|string|unique:projects,slug,' . $project->id,
            'description' => 'sometimes|required|string',
            'content' => 'sometimes|required|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|array',
            'categories' => 'nullable|array',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'is_highlighted' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        $project->update($data);
        return response()->json($project);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(null, 204);
    }

    public function reorder(Request $request)
    {
        $items = $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|integer',
            'items.*.order' => 'required|integer',
        ]);
        foreach ($items['items'] as $item) {
            Project::where('id', $item['id'])->update(['order' => $item['order']]);
        }
        return response()->json(['message' => 'Reordered successfully']);
    }
}
