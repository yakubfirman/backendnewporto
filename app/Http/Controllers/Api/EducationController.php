<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Education::orderBy('start_date', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
        ]);

        $education = Education::create($data);
        return response()->json($education, 201);
    }

    public function show(Education $education)
    {
        return response()->json($education);
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'degree' => 'sometimes|required|string|max:255',
            'institution' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_current' => 'boolean',
        ]);

        $education->update($data);
        return response()->json($education);
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return response()->json(null, 204);
    }
}
