<?php

namespace App\Http\Controllers;

use App\Models\Post;
use auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function show(Post $post)
    {

        return view('posts/show', ['post' => $post]);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = Auth::user()->id;
        $post->save();

        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        // Post::create(request()->validate([
        //     'title' => 'required',
        //     'body' => 'required'
        // ]));

        return redirect('/posts');
    }

    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);


        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts/' . $post->id);

    }

    public function destroy($post)
    {
        if(Auth::user()->id != $post->user_id){
            abort(403);
        }

        $post->delete;

        return redirect('/posts');
    }
}
