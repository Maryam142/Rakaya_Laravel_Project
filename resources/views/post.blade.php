@extends('layout')

@section('content')

 <article>

        <h1>{!! $post->title !!}  </h1>
        <p>
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
        </p>

        <p> 
                In cooperation with 
                <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a> 
                in
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
                section 
            </p>

        <div>
            <p>
            {!! $post->body !!}
            </p>
        </div>

        <a href="/">Go Back</a>
    </article>

@endsection