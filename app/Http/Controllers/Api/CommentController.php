<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('post:id,title')->orderBy('created_at', 'desc')->get();
        return response()->json($comments);
    }

    public function toggle($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->is_approved = !$comment->is_approved;
        $comment->save();

        return response()->json($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        // Cascades if parent has replies due to cascadeOnDelete on migration
        $comment->delete();

        return response()->json(null, 204);
    }
}
