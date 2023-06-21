<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $id=Auth::id();
        if ($user->profile ==null) {
          $profile=Profile::create([
            'province'=>'dam',
            'gender'=>'Female',
            'user_id'=>$id,
            'bio'=>'Hellow',
          ]);
        }
        return view('users.profile')->with('user',$user);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request,[
          'name'=>'required',
          'province'=>'required',
          'gender'=>'required',
          'bio'=>'required',
        ]);
        $user=Auth::user();
        $user->name=$request->name;
        $user->profile->province=$request->province;
        $user->profile->gender=$request->gender;
        $user->profile->bio=$request->bio;
        $user->save();
        $user->profile->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
