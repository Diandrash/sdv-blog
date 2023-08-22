@extends('layouts.main')

@section('container')
    <div class="container mt-5">

        <div class="main mt-5 mb-5" >
            <br>
            <h1 class="fw-bold">{{ $post->title }}</h1>
            <h3 class="fs-5 fw-light">Created by {{ $post->user->name }}</h3>
            <p class="fs-6 muted">{{ $post->created_at }}</p>
            <img class="bd-placeholder-img card-img-top m-3 ms-0" style="width: 80%;" src="{{ asset('storage/' . $post->image) }}">
            <p>{!! $post->paragraph !!}</p>
        </div>   

        <div class="back mt-5">
            <button class="btn btn-warning my-3 mt-5" onclick="location.href='/posts'">Back to Posts</button> <br>
            <button class="btn btn-secondary" onclick="location.href='/home#post'">Back to Home</button>
        </div>
    </div>
@endsection