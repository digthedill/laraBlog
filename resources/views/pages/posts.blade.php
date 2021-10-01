@extends('layouts.default')

@section('title', "J's Home Cookin'")

@section('content')
    @foreach ($posts as $post)
    <section>
        <a href="/posts/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>{{ $post->content }}</p>
    </section>
    @endforeach
@stop