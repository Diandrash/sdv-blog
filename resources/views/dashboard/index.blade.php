@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('success'))
  {{-- <script>alert('Sukses Diubah')</script>     --}}
  <div class="alert alert-success" role="alert">Sukses Diubah</div>
@endif

@if (session()->has('successDelete'))
  {{-- <script>alert('Sukses Diubah')</script>     --}}
  <div class="alert alert-success" role="alert">Sukses Dihapus</div>
@endif


<div class="table-responsive">
  
    <h2>My Post</h2>
    <table class="table table-striped table-sm">

      <form action="/dashboard/posts/create" method="get">
        <button class="mt-3 btn btn-primary" type="submit">
          <i class="bi bi-plus "></i>
          Create New Post
        </button>

      </form>
      
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)         
            <tr class="text-center ">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>

                <td class="d-flex justify-content-center">

                    <a href="/dashboard/posts/{{ $post->id }}">
                      <i class="bi bi-eye btn btn-success btn-sm m-1"></i>
                    </a>

                    <a href="/dashboard/posts/{{ $post->id }}/edit">
                      <i class="bi bi-pencil-square btn btn-warning btn-sm m-1"></i>
                    </a>


                    <form action="/dashboard/posts/{{ $post->id }}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" onclick="confirm('Yakin?')" class="border-0">
                        <i class="bi bi-trash btn btn-danger btn-sm m-1"></i>
                      </button>
                    </form>

                    {{-- <a href="/dashboard/posts/{{ $post->id }}">
                      @method('delete')
                      <i class="bi bi-trash btn btn-danger btn-sm m-1"></i>
                    </a> --}}

                </td>
            </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection