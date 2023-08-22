@extends('dashboard.layouts.main')



@section('container')
    <div class="container bg-primary-subtle p-5 rounded" >
        <h2>Home Page</h2> 
        <p>Edit The Contents</p>

        <form action="/dashboard/components/{{ $collection->id }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3 mt-5">
                <label for="title" class="form-label">Home Title</label>
                <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" id="title" name="homeTitle" value="{{ old('title', $collection->homeTitle) }}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
            </div>

            <div class="mb-3 pb-3">
                <label for="paragraph" class="form-label">Paragraph</label>
                <textarea class="form-control" id="paragraph" rows="3" name="homeParagraph">{{ $collection->homeParagraph }}</textarea>

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="hidden" name="postTitle" value="{{ $collection->postTitle }}">
            <input type="hidden" name="postParagraph" value="{{ $collection->postParagraph }}">

            <button type="submit" class="btn btn-primary mb-0">Edit Now!!</button>
        </form>

    </div>
@endsection
