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
        return response()->json(Skill::orderBy('category')->orderBy('proficiency', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon_svg' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
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
        ]);

        $skill->update($data);
        return response()->json($skill);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json(null, 204);
    }
}
