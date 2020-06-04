<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('home', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        
        $name  = $request -> input('name');
        $sername = $request -> input('sername');
        $tel  = $request -> input('tel');
        $city = $request -> input('city');
        $about = $request -> input('about'); 
        $profile_id = $request -> input('profile_id'); 


        $profiles = Profile::create([

            'name' => $name,
            'sername' => $sername,
            'tel' => $tel,
            'city' => $city,
            'about' => $about,
            'profile_id'=>$profile_id
    
           ]);

           if($profiles)
           {
               return back()->with('success', 'Post has been updated!');
           }
           else return back()->with('error', 'Error!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profiles)
    {
        return view('home', ['profiles'=>$profiles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profiles)
    {
        
        $profiles -> name = $request -> input('name');
        $profiles -> sername = $request -> input('sername');
        $profiles -> tel = $request -> input('tel');
        $profiles -> city = $request -> input('city');
        $profiles -> about = $request -> input('about'); 

        if($profiles -> save())
        {
            return back()->with('success', 'Post has been updated!');
        }
        else return back()->with('error', 'Error!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
