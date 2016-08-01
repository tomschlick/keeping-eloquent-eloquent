<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Http\Controllers\Controller;

class PostCommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $comment = $post->newComment([
            'content' => $request->input('comment_content'),
            'approved' => false,
        ]);
        return response()->json(['id' => $comment->id], 201);
    }
}


