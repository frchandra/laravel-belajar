@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $post->title }}</h2>  
                <a href="/dashboard/posts" class="btn btn-success">back to my post</a>
                <a href="#" class="btn btn-warning">edit</a>
                <a href="#" class="btn btn-danger">delete</a>
                <img src="https://source.unsplash.com/1200x400/?computer" alt="..." class="img-fluid mt-3">
                {!! $post->body !!} 
                <a href="/dashboard/posts">back</a>
            </article>
        </div>
    </div>
</div>


@endsection