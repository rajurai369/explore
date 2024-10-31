<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=Team::all();
        return view('backend.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name= $request->name;
        $team->slug=Str::slug($request->name);
        $team->designation = $request->designation;
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $team->photo="images/$newName";
        }




        if ($request->hasFile('banner_image')) {
            $file1 = $request->bannner_image;
            $newName = time() . $file1->getClientOriginalName();
            $file->move('images',$newName);
            $team->banner_image="images/$newName";
        }



        $team->save();
        return redirect('/team');
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
        $team = Team::find($id);
        return view('backend.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);
        $team->name= $request->name;
        $team->slug=Str::slug($request->name);

        $team->designation = $request->designation;
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $team->photo="images/$newName";
        }




        if ($request->hasFile('banner_image')) {
            $file1 = $request->bannner_image;
            $newName = time() . $file1->getClientOriginalName();
            $file->move('images',$newName);
            $team->banner_image="images/$newName";
        }



        $team->update();
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/team');
    }
}
