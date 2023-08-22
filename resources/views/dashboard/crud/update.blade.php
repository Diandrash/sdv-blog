@extends('dashboard.layouts.main')

@section('container')

<h3>Edit Post</h3>

    <form action="/dashboard/posts/{{ $post->id }}" method="post" enctype="multipart/form-data"> 
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">

            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="mb-3">
            <label for="image" class="form-label">Image Post</label>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">    
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
            @endif

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">

            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>

            <input type="hidden" name="paragraph" id="paragraph" class="@error('paragraph') is-invalid @enderror" id="paragraph" value="{{ old('paragraph', $post->paragraph) }}">
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
            
            // const inputImage = document.querySelector('#image');
            // const imagePreview = document.querySelector('.img-preview');

            // imagePreview.style.display = 'block'

            // const imageReader = new FileReader();
            // imageReader.readAsDataURL(inputImage.files[0])

            // imageReader.onload = funtion(OFREvent){
            //     imagePreview.src = OFREvent.target.result;
            // }



            imagePreview.style.display = 'block';

            const imageReader = new FileReader();
            imageReader.readAsDataURL(inputImage.files[0]);

            imageReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }



    </script>

@endsection