<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Skill::orderBy('order', 'asc')->orderBy('category')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon_svg' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
            'order' => 'nullable|integer',
        ]);

        $skill = Skill::create($data);
        return response()->json($skill, 201);
    }

    public function show(Skill $skill)
    {
        return response()->json($skill);
    }

    public function update(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'icon_svg' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'proficiency' => 'sometimes|required|integer|min:0|max:100',
            'order' => 'nullable|integer',
        ]);

        $skill->update($data);
        return response()->json($skill);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
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
            Skill::where('id', $item['id'])->update(['order' => $item['order']]);
        }
        return response()->json(['message' => 'Reordered successfully']);
    }
}
