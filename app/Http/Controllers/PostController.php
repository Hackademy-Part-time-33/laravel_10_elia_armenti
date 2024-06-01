<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Mail\ArticleCreateMail;
use App\Mail\ArticleEditMail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view ('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('public/images', $path_name);
        }

        $post = Post::create([
            "title"=> $request->title,
            "body"=> $request->body,
            "status"=> $request->status,
            "user_id"=> auth()->user()->id,
            "slug"=> str()->slug($request->title, '-'),
            "image"=> $path_image,
        ]);

        Mail::to(auth()->user()->email)->send(new ArticleCreateMail($post));
        session()->flash('success', 'Articolo creato con successo');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view ('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view ('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $path_image = $post->image;
        if ($request->hasFile('image')) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('public/images', $path_name);
        }

        $post->update([
            "title"=> $request->title,
            "body"=> $request->body,
            "status"=> $request->status,
            "image"=> $path_image,
        ]); 

        Mail::to(auth()->user()->email)->send(new ArticleEditMail($post));
        session()->flash('success', 'Articolo modificato con successo');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}
