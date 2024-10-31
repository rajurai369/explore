<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $explore=Explore::first();
        return view('backend.explore.index',compact('explore'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.explore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $explore=new Explore();
        $explore->name=$request->name;
        $explore->email=$request->email;
        $explore->address=$request->address;
        $explore->phone=$request->phone;
        $explore->twit=$request->twit;
        $explore->facebook=$request->facebook;
        $explore->linkedin=$request->linkedin;
        $explore->youtube=$request->youtube;
        $explore->save();
        return redirect('/explore');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $explore=Explore::find($id);
        return view('backend.explore.edit',compact('explore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $explore= Explore::find($id);
        $explore->name=$request->name;
        $explore->email=$request->email;
        $explore->address=$request->address;
        $explore->phone=$request->phone;
        $explore->twit=$request->twit;
        $explore->facebook=$request->facebook;
        $explore->linkedin=$request->linkedin;
        $explore->youtube=$request->youtube;
        $explore->update();
        return redirect('/explore');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $explore=Explore::find($id);
        $explore->delete();
        return redirect('/explore');
    }
}
