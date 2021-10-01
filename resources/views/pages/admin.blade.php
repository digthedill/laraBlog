@extends('layouts.default')
@section('title', 'admin')

@section('content')
<form action="POST" class="auth-form">
    <input type="text" name="username" id="username" placeholder="username">
    <input type="password" name="password" id="password" placeholder="password">
    <button type="submit">Login</button>
</form>

@stop