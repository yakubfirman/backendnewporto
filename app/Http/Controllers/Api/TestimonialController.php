<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    // === PUBLIC ENDPOINTS ===

    // Get all approved testimonials
    public function index()
    {
        $testimonials = Testimonial::where('is_published', true)->latest()->get();
        return response()->json($testimonials);
    }

    // Submit a new testimonial (will be pending approval)
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $testimonial = Testimonial::create([
            'name' => $request->name,
            'role' => $request->role,
            'content' => $request->content,
            'is_published' => false, // Always false by default when submitted by user
        ]);

        return response()->json([
            'message' => 'Testimonial submitted successfully. Waiting for approval.',
            'testimonial' => $testimonial
        ], 201);
    }


    // === ADMIN ENDPOINTS ===

    // Get all testimonials (both approved and pending)
    public function adminIndex()
    {
        $testimonials = Testimonial::latest()->get();
        return response()->json($testimonials);
    }

    // Get specific testimonial for admin
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return response()->json($testimonial);
    }

    // Update testimonial (Admin can edit content, role, name, or change publish status)
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'role' => 'nullable|string|max:255',
            'content' => 'sometimes|required|string',
            'is_published' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $testimonial->update($request->all());

        return response()->json([
            'message' => 'Testimonial updated successfully.',
            'testimonial' => $testimonial
        ]);
    }

    // Toggle publish status quickly
    public function togglePublish($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_published = !$testimonial->is_published;
        $testimonial->save();

        return response()->json([
            'message' => 'Testimonial status updated successfully.',
            'is_published' => $testimonial->is_published
        ]);
    }

    // Delete testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return response()->json(['message' => 'Testimonial deleted successfully.']);
    }
}
