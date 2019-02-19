@section('title', 'Posts')

@extends('layouts.app')

@section('content')
<div class="container py-3">
    @include('partials.messages')
    
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card shadow my-3">
                <div class="card-header bg-dark py-0 my-0">
                    <h3 class="card-title my-2">
                        <a class="text-light" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="{{ asset('storage/post_cover_images/' . $post->cover_image) }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text text-justify">
                                {!! str_limit(html_entity_decode(strip_tags($post->body)), 400) !!}
                            </p>
                            @if(strlen(html_entity_decode(strip_tags($post->body))) > 400)
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info text-light btn-sm">Read More</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="small text-right my-0">
                        Created at {{ $post->created_at->format('l, j F Y | g:i A') }} by {{ $post->user->full_name }}
                    </p>
                </div>
            </div>
        @endforeach
        <div class="d-flex">
            <div class="mx-auto mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    @else
        <p>No posts found.</p>
    @endif
</div>
@endsection