<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $comments =Comment::get();
        // $comment = $post->comments;
        // return response()->json($post);
        return view('post.index', compact('posts','comments'));
        // comments hosse comments table ar name
        // dd($comment);
    }
}
