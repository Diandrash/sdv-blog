<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index' ,[
            "posts" => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'title' => 'required|min:5|max:255',
            'paragraph' => 'required',
            'user_id' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        $credentials['image'] = $request->file('image')->store('post-img');

        Post::create($credentials);

        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.crud.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.crud.update',[
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // return $request;

        $rules = [
            'title' => 'required|min:7',
            'image' => 'image|file|max:1024',
            'paragraph' => 'required'
        ];

        $ValidatedData = $request->validate($rules);

        $ValidatedData['image'] = $request->file('image')->store('post-img');

        $ValidatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)->update($ValidatedData);

        return redirect('/dashboard/posts')->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // var_dump('haha');
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('successDelete', 'success');
        
    }
}
