@section('title', 'Edit Post')

@extends('layouts.app')

@section('content')
<div class="container py-3">
    @include('partials.messages')

    <a href="{{ URL::previous() }}" class="btn btn-outline-dark mb-3">
        <i class="fas fa-chevron-left"></i> Back
    </a>

    <h1>Edit Post</h1>
    
    <form action="{{ action('PostsController@update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{ $post->title }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="editor">Body</label>
            <textarea name="body" id="editor" class="form-control" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="cover_image" id="cover_image" class="custom-file-input">
                <label for="cover_image" class="custom-file-label text-truncate">Choose File</label>
            </div>
            <p class="small font-italic mt-2 ml-2">Maximum File Size is 2 MB</p>
        </div>

        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger">
            <i class="fas fa-times"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i> Submit
        </button>
    </form>
</div>
@endsection