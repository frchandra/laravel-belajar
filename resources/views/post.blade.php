@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2>{{ $post->title }}</h2>  
                    <p>By : <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>  
                    <img src="https://source.unsplash.com/1200x400/?computer" alt="..." class="img-fluid">
                    {!! $post->body !!} 
                    <a href="/blog">back</a>
                </article>
            </div>
        </div>
    </div>



@endsection

