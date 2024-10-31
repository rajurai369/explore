<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::first();
        return view('backend.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = new About();
        $about->title= $request->title;
        $about->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $about->image="images/$newName";
        }
        $about->save();
        return redirect('/about');
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
        $about=About::find($id);
        return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time() . $file->getClientOriginalName();
            $file->move("images",$newName);
            $about->image="images/$newName";
        }
        $about->update();
        return redirect('/about');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect('/about');
    }
}
