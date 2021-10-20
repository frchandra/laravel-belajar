@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $post->title }}</h2>  
                <a href="/dashboard/posts" class="btn btn-success">back to my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin?')"><span data-feather="x-circle"></span>delete</button>           
                  </form>

                
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="..." class="img-fluid mt-3">
                </div>
                @else                    
                <img src="https://source.unsplash.com/1200x400/?computer" alt="..." class="img-fluid mt-3">
                @endif


                {!! $post->body !!} 
                <a href="/dashboard/posts">back</a>
            </article>
        </div>
    </div>
</div>


@endsection