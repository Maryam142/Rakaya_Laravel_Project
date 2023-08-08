@extends('layout')

@section('content')
    @foreach($posts as $post)
        <article>
            <h1>
                {{dd($post)}}
                <a href="/posts/{{ $post->id }}">
                    {{$post->title}}
                </a>
            </h1>

            <div>
                {{$post->excerpt}}
            </div>

        </article>
    @endforeach

@endsection
