@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>  
        <p>By : eko in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>  
        {!! $post->body !!} 
        <a href="/blog">back</a>
    </article>

@endsection

