@section('title', $post->title)

@extends('layouts.app')

@section('content')
<div class="container py-3">
    @include('partials.messages')

    <a href="{{ URL::previous() }}" class="btn btn-outline-dark mb-3">
        <i class="fas fa-chevron-left"></i> Back
    </a>
    <div class="card shadow">
        <div class="card-header bg-dark text-light py-0 my-0">
            <h3 class="card-title my-2">{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage/post_cover_images/' . $post->cover_image) }}" class="img-fluid mb-3">
            <p class="card-text">{!! $post->body !!}</p>
        </div>
        <div class="card-footer">
            <div class="small text-right">
                Created at {{ $post->created_at->format('l, j F Y | g:i A') }} by {{ $post->user->full_name }}
            </div>
        </div>
    </div>

    @auth
        @if(auth()->user()->id == $post->user->id)
            <hr>
            
            <div class="clearfix">
                <!-- Edit Post -->
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success float-left">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <!-- Delete Post -->
                <form action="{{ action('PostsController@destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-right">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </form>
            </div>
        @endif
    @endauth

    <hr>
    
    {{-- DISQUS SECTION - START --}}
    <div id="disqus_thread"></div>
    <script>
    
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    
    var disqus_config = function () {
    this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = {{ $post->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://larticle.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    {{-- DISQUS SECTION - END --}}
</div>
@endsection