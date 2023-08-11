@extends('layout')

@section('content')
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post-> slug}}">
                    {{$post->title}}
                </a>
            </h1>
            <p> 
                In cooperation with 
                <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a> 
                in
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
                section 
            </p>

            <div>
                {{$post->excerpt}}
            </div>

        </article>
    @endforeach

@endsection
