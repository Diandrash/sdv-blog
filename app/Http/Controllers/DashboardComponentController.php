<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class DashboardComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();
        return view('dashboard.components.index',[
            "collection" => $collections->last()
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        $collections = Collection::all();
        return view('dashboard.components.homeEdit',[
            "collection" => $collections->last()
        ]
        );
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection, $id)
    {
        // return $request;
        $rules = [
            "homeTitle" => 'required | min:5 | max:255',
            "homeParagraph" => 'required',
            "postTitle" => 'required',
            "postParagraph" => 'required'
        ];

        $ValidatedData = $request->validate($rules);
        // $ValidatedData['postTitle'] = $collection->postTitle;
        // $ValidatedData['postParagraph'] = $collection->postParagraph;

        // Collection::where('id', $collection->id)->update($ValidatedData);
        $coll = Collection::findOrFail($id);
        $coll->update($ValidatedData);
 

        return redirect('/dashboard/components')->with('success', 'success bro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
