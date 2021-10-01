@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <button><a href="/"><i>back</i></a></button>
@stop