@extends('dashboard.layouts.main')

@section('container')
    @if (session()->has('succcess'))
        <div class="alert alert-success" role="alert">Sukses Diubah</div>
    @endif

    <div class="row">
        <div class="container bg-body-secondary rounded-5 p-4">
    
            <h2>Home Page</h2>
            <a href="/dashboard/components/{{ $collection->id }}/edit" class="btn btn-warning mb-3"><i class="bi bi-pencil-square m-0"> Edit</i></a>
            <div class="card w-75 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Home Title</h5>
                    <p class="card-text">{{ $collection->homeTitle }}</p>
                </div>
            </div>
    
            <div class="card w-75 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Home Paragraph</h5>
                    <p class="card-text">{{ $collection->homeParagraph }}</p>
                </div>
            </div>
    
        </div>

        <div class="container bg-body-secondary rounded-5 p-3 mt-5">
    
            <h2>Post Page</h2> 
            <a href="/dashboard/components/post/{{ $collection->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square m-0"> Edit</i></a>
            <div class="card w-75 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Post Title</h5>
                    <p class="card-text">{{ $collection->postTitle }}</p>
                    {{-- <a href="/dashboard/components/{{ $collection->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square m-0"> Edit</i></a> --}}
                </div>
            </div>
    
            <div class="card w-75 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Post Paragraph</h5>
                    <p class="card-text">{{ $collection->postParagraph }}</p>
                </div>
            </div>
    
        </div>
    
    </div>
      
@endsection