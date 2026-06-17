<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Message::orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'content' => 'required|string',
            'is_read' => 'boolean',
        ]);

        $message = Message::create($data);
        return response()->json($message, 201);
    }

    public function show(Message $message)
    {
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }
        return response()->json($message);
    }

    public function update(Request $request, Message $message)
    {
        $data = $request->validate([
            'is_read' => 'required|boolean',
        ]);

        $message->update($data);
        return response()->json($message);
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return response()->json(null, 204);
    }
}
