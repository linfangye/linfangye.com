<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = new Post;

        $post->title    = request('title');
        $post->body     = request('body');
        $post->user_id  = 1;
        $post->save();
    }

    public function show(Post $post)
    {
        $comments = $post->comments;

        return view('posts.show', compact('post'));
    }
}
