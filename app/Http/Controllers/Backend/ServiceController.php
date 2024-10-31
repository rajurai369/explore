<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Service::all();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service=new Service();
        $service->title=$request->title;
        $service->description=$request->description;
        $service->name=$request->name;
        $service->address=$request->address;
        $service->comment=$request->comment;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time() . $file->getClientOriginalName();
            $file->move("images",$newName);
            $service->image="images/$newName";
        }
        $service->save();
        return redirect('/service');

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
        $service=Service::find($id);
        return view('backend.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service=Service::find($id);
        $service->title=$request->title;
        $service->description=$request->description;
        $service->name=$request->name;
        $service->address=$request->address;
        $service->comment=$request->comment;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time() . $file->getClientOriginalName();
            $file->move("images",$newName);
            $service->image="images/$newName";
        }
        $service->update();
        return redirect('/service');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect('/service');
    }
}
