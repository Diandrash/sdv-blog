@extends('dashboard.layouts.main')

@section('container')

    <form action="/dashboard/posts" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}" autofocus>

            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="mb-3">
            <label for="image" class="form-label">Image Post</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">

            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>

            <input type="hidden" name="paragraph" id="paragraph" class="@error('paragraph') is-invalid @enderror" id="paragraph" value="{{ old('paragraph') }}">
            <trix-editor input="paragraph"></trix-editor>

            @error('paragraph')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>            


        
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

    <script>
         function previewImage() {
            
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }

    </script>

@endsection