@extends('dashboard.layouts.main')

@section('container')
    <div class="main mt-5" >
        <br>
        <h1 >{{ $post->title }}</h1>

        <div class=" d-flex flex-row mb-3">
            <a href="/dashboard/posts/" class="text-decoration-none">
              <i class="bi bi-arrow-left btn btn-success btn-sm m-1"> Back to Dashboard</i>
            </a>

            <a href="/dashboard/posts/{{ $post->id }}/edit">
              <i class="bi bi-pencil-square btn btn-warning btn-sm m-1"> Edit</i>
            </a>


            <form action="/dashboard/posts/{{ $post->id }}" method="post" class="">
              @method('delete')
              @csrf
              <button type="submit" onclick="confirm('Yakin?')" class="border-0 align-items-center bg-transparent">
                <i class="bi bi-trash btn btn-danger btn-sm "> Delete</i>
              </button>
            </form>
        </div>


        <h3 class="fs-5">Created by {{ $post->user->name }}</h3>
        <p class="fs-6">{{ $post->created_at }}</p>
        <img class="bd-placeholder-img card-img-top m-3 ms-0" width="100%" height="500" src="{{ asset('storage/' . $post->image) }}">
        <p>{!! $post->paragraph !!}</p>

        <a href="/dashboard/posts">Back to dashboard</a>
    </div>   
@endsection