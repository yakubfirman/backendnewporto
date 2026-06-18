<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Skill;
use App\Models\Setting;
use App\Models\Message;

// Auth Routes
Route::post('/admin/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

// Admin Protected Routes
Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::get('/me', [App\Http\Controllers\Api\AuthController::class, 'me']);

    // Reorder routes MUST come before apiResource to avoid route conflicts
    Route::post('/projects/reorder', [App\Http\Controllers\Api\ProjectController::class, 'reorder']);
    Route::post('/skills/reorder', [App\Http\Controllers\Api\SkillController::class, 'reorder']);

    Route::apiResource('projects', App\Http\Controllers\Api\ProjectController::class);
    Route::apiResource('posts', App\Http\Controllers\Api\PostController::class);
    Route::apiResource('experiences', App\Http\Controllers\Api\ExperienceController::class);
    Route::apiResource('educations', App\Http\Controllers\Api\EducationController::class);
    Route::apiResource('skills', App\Http\Controllers\Api\SkillController::class);
    Route::apiResource('social-media', App\Http\Controllers\Api\SocialMediaController::class);
    Route::apiResource('settings', App\Http\Controllers\Api\SettingController::class);
    Route::apiResource('messages', App\Http\Controllers\Api\MessageController::class);

    // Testimonial Admin Routes
    Route::get('/testimonials', [App\Http\Controllers\Api\TestimonialController::class, 'adminIndex']);
    Route::get('/testimonials/{id}', [App\Http\Controllers\Api\TestimonialController::class, 'show']);
    Route::put('/testimonials/{id}', [App\Http\Controllers\Api\TestimonialController::class, 'update']);
    Route::delete('/testimonials/{id}', [App\Http\Controllers\Api\TestimonialController::class, 'destroy']);
    Route::patch('/testimonials/{id}/toggle', [App\Http\Controllers\Api\TestimonialController::class, 'togglePublish']);

    // Comments Admin Routes
    Route::get('/comments', [App\Http\Controllers\Api\CommentController::class, 'index']);
    Route::patch('/comments/{id}/toggle', [App\Http\Controllers\Api\CommentController::class, 'toggle']);
    Route::delete('/comments/{id}', [App\Http\Controllers\Api\CommentController::class, 'destroy']);

    Route::post('/upload', [App\Http\Controllers\Api\UploadController::class, 'upload']);
    Route::get('/media', [App\Http\Controllers\Api\UploadController::class, 'index']);
    Route::delete('/media', [App\Http\Controllers\Api\UploadController::class, 'destroy']);

    // Analytics Admin Route
    Route::get('/analytics', function () {
        $posts = App\Models\Post::withCount(['comments' => function ($query) {
            $query->where('is_approved', true);
        }])->orderBy('views', 'desc')->get();

        $totalViews = $posts->sum('views');
        $totalLikes = $posts->sum('likes');
        $totalComments = $posts->sum('comments_count');

        return response()->json([
            'overview' => [
                'total_views' => $totalViews,
                'total_likes' => $totalLikes,
                'total_comments' => $totalComments,
                'total_posts' => $posts->count(),
            ],
            'posts' => $posts
        ]);
    });
});

// Public Routes (for frontend)
Route::get('/projects', function () {
    return App\Models\Project::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();
});
Route::get('/projects/{slug}', function ($slug) {
    return App\Models\Project::where('slug', $slug)->firstOrFail();
});
Route::get('/posts', function () {
    return App\Models\Post::where('is_published', true)->orderBy('published_at', 'desc')->get();
});
Route::get('/posts/{slug}', function (Request $request, $slug) {
    $query = App\Models\Post::where('slug', $slug);
    
    if ($request->query('preview') !== 'true') {
        $query->where('is_published', true);
    }

    $post = $query->withCount(['comments' => function ($query) {
            $query->where('is_approved', true);
        }])
        ->with(['comments' => function ($query) {
            $query->where('is_approved', true)
                  ->whereNull('parent_id')
                  ->with(['replies' => function($q) {
                      $q->where('is_approved', true)->orderBy('created_at', 'asc');
                  }])
                  ->orderBy('created_at', 'desc');
        }])
        ->firstOrFail();

    if ($request->query('preview') !== 'true') {
        $post->increment('views');
    }

    return $post;
});

Route::post('/posts/{post}/comments', function (Request $request, $id) {
    $post = App\Models\Post::findOrFail($id);
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'content' => 'required|string',
        'parent_id' => 'nullable|exists:comments,id'
    ]);
    $validated['is_approved'] = true;
    
    return $post->comments()->create($validated);
});

Route::post('/posts/{post}/like', function ($id) {
    $post = App\Models\Post::findOrFail($id);
    $post->increment('likes');
    return response()->json(['likes' => $post->likes]);
});

Route::get('/experiences', function () {
    return App\Models\Experience::orderBy('start_date', 'desc')->get();
});
Route::get('/education', function () {
    return App\Models\Education::orderBy('start_date', 'desc')->get();
});
Route::get('/skills', function () {
    return Skill::orderBy('order', 'asc')->orderBy('category')->get();
});

Route::get('/social-media', function () {
    return \App\Models\SocialMedia::where('is_active', true)->orderBy('order', 'asc')->get();
});

Route::get('/settings', function () {
    return Setting::all()->pluck('value', 'key');
});

// Testimonials Public Routes
Route::get('/testimonials', [App\Http\Controllers\Api\TestimonialController::class, 'index']);
Route::post('/testimonials', [App\Http\Controllers\Api\TestimonialController::class, 'store']);

Route::post('/messages', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'content' => 'required|string',
    ]);
    return Message::create($validated);
});
