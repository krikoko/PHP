<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddRequest;
use Illuminate\Auth\Access\Response;

class AddController extends Controller

{
    public function show()
    {
        return view('home');
    }

    public function add(AddRequest $request)
    {
        //dump($request->all());
        $inp = $request->only('text','date','author','category','head');
       return   $inp;
    }
    
    
}