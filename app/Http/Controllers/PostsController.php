<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('verified', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'nullable|image|max:1999'
        ]);

        // Handle FIle Upload
        if($request->hasFile('cover_image'))
        {
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get the extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            // Set filename to be stored
            $filenameToStore = $filename . '_' . time() . '.' . $ext;

            // Store image
            $path = $request->file('cover_image')->storeAs('public/post_cover_images', $filenameToStore);
        }
        else{
            $filenameToStore = 'noImage.jpg';
        }

        // Store a post
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'cover_image' => $filenameToStore,
            'user_id' => auth()->user()->id
        ]);

        // Redirect
        return redirect()->route('posts.index')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // Check for the correct user
        if(auth()->user()->id !== $post->user->id)
        {
            return redirect()->route('posts.index')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'nullable|image|max:1999'
        ]);

        // Handle FIle Upload
        if($request->hasFile('cover_image'))
        {
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get the extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            // Set filename to be stored
            $filenameToStore = $filename . '_' . time() . '.' . $ext;

            // Store image
            $path = $request->file('cover_image')->storeAs('public/post_cover_images', $filenameToStore);
        }

        // Edit post
        $post->title = request('title');
        $post->body = request('body');
        if($request->hasFile('cover_image'))
        {
            if($post->cover_image !== 'noImage.jpg')
            {
                Storage::delete('public/post_cover_images/' . $post->cover_image);
            }
            $post->cover_image = $filenameToStore;
        }
        $post->save();

        // Redirect
        return redirect()->route('posts.index')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Check for the correct user
        if(auth()->user()->id !== $post->user->id)
        {
            return redirect()->route('posts.index')->with('error', 'Unauthorized Page');
        }

        // Delete image if the post is deleted
        if($post->cover_image !== 'noImage.jpg')
        {
            Storage::delete('public/post_cover_images/' . $post->cover_image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post Deleted');
    }
}
