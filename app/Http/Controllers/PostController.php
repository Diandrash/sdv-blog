<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Collection;

class PostController extends Controller
{
    function index (Request $request) {
        // dd(request('search'));
        // return $request;
        $collections = Collection::all();
        // $cari = $request->search;
        $posts = Post::all();
        // if(request('search')){
        //     $posts = Post::where('title', 'LIKE' , '%' . $cari . '%');
        //     $posts = Post::getTable('posts')->where('title', 'LIKE' , '%' . $cari . '%')->get();
        // }
        return view('partials.posts', [
            "title" => "Post",
            "collection" => $collections->last(),
            "posts" => $posts
        ]);
    }
    function show (Post $post) {
        return view('partials.post', [
            "post" => $post
        ]);
    }

}
