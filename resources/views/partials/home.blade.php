@extends('layouts.main')

@section('container')
            {{-- HERO --}}
            <div class="mb-5 bg-transparent mt-5" style="height: 80px;"></div>

            <section id="home">
                <main class="mt-5">
                    <h1 class="visually-hidden">Heroes examples</h1>
                
                    <div class="px-4 py-5  text-center mt-5">
                        <h1 class="display-5 fw-bold">{{ $collection->homeTitle }}</h1>
                        <div class="col-lg-6 mx-auto">
                            <p class="lead mb-4">{{ $collection->homeParagraph }}</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <button type="button" class="btn btn-secondary btn-lg px-4 gap-3" onclick="location.href='/posts'">Let's Explore</button>
                            </div>
                        </div>
                    </div>
                
                </main>
            </section>
            <div style="height: 20rem;"></div>

            <section id="about">
                @include('partials.about')
            </section>

            <div style="height: 10rem;"></div>
            <section class="post mt-5" id="post">
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
            
                    {{-- <div class="card mb-3">
                        <img src="https://cdn1-production-images-kly.akamaized.net/_MUKRDTtrddN2MHLBsCK-tmw444=/0x37:1024x614/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3425383/original/008912800_1618090968-000_97R2HP.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div> --}}
                
                    <div class="album py-3 bg-primary">
                        <div class="container">
                
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">
            
                                @foreach ($posts as $post)
                                
                                    <div class="col">
                                        <div class="card shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/' . $post->image) }}"><title>Placeholder</title>
                                        <div class="card-body" style="max-height: 7rem;">
                                            <div class="post-title" style="height: 3rem">
                                                <a href="/posts/{{ $post->id }}" class="text-decoration-none">
                                                    <p class="card-text fw-medium">{{ $post->title }}</p>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                    
                                            <small class="text-muted ">Created by {{ $post->user->name }}</small>
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
            <section>
@endsection