@extends('layouts.main')

@section('container')
        <main>

        <section class="py-1 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold">{{ $collection->postTitle }}</h1>
                    {{-- <h1 class="fw-bold">Recent Post</h1> --}}
                    <p class="lead text-muted">{{ $collection->postParagraph }}</p>
                </div>
            </div>
        </section>

        {{-- <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/posts"  method="get">
                    <div class="input-group mb-3" style="">
                        <input type="text" class="form-control" placeholder="Search Data" name="search">
                        <button type="submit" class="btn btn-secondary">Search</button>
                    </div>
                </form>
            </div>
        </div> --}}
    
        <div class="album py-5 bg-primary">
            <div class="container">
    
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">

                    @foreach ($posts as $post)
                    
                        <div class="col">
                            <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/' . $post->image) }}"><title>Placeholder</title>
                            <div class="card-body">
                                <div class="post-title" style="height: 3rem">
                                    <a href="/posts/{{ $post->id }}" class="text-decoration-none">
                                        <p class="card-text fw-medium">{{ $post->title }}</p>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
        
                                <small class="text-muted">Created by {{ $post->user->name }}</small>
                                <small class="text-muted"> {{ $post->updated_at }}</small>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    
    </main>

@endsection