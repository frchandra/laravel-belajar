
@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="/blog" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Serach</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?computer" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>By : <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p> 
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none">read more</a>
            </div>
        </div>



    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">                
                <div class="card ">
                    <div class="position-absolute bg-dark px-3 py-2 text-white"><a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x300/?computer" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                      <p>
                          <small>
                            <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                          </small>
                      </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/blog/{{ $post->slug }}" class="btn btn-primary">read more</a>
                    </div>
                </div>        
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-end">{{ $posts->links() }}</div>
    @else
    <p class="text-center fs-4">Empty.</p>
    @endif
    
    
    

@endsection





    

