@extends('dashboard.layouts.main')



@section('container')
    <div class="container bg-primary-subtle p-5 rounded">
        <h2>Post Page</h2> 
        <p>Edit The Contents</p>

        <form action="/dashboard/components/{{ $collection->id }}" method="post">
            @method('put')
            @csrf
            <input type="hidden" name="homeTitle" value="{{ $collection->postTitle }}">
            <input type="hidden" name="homeParagraph" value="{{ $collection->postParagraph }}">
            <div class="mb-3 mt-5">
                <label for="title" class="form-label">Home Title</label>
                <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" id="title" name="postTitle" value="{{ old('title', $collection->postTitle) }}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
            </div>

            <div class="mb-3 pb-3">
                <label for="paragraph" class="form-label">Paragraph</label>
                <textarea class="form-control" id="paragraph" rows="3" name="postParagraph">{{ $collection->postParagraph }}</textarea>

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mb-0">Edit Now!!</button>
        </form>

    </div>
@endsection
