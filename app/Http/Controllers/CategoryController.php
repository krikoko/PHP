<?php

namespace App\Http\Controllers;
use App;
use App\Posts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function a()
    {
        $posts = App\Posts::a();
        
        return view('category', compact('posts'));
    }

    public function b()
    {
        $posts = App\Posts::b();
        
        return view('category', compact('posts'));
    }

    public function c()
    {
        $posts = App\Posts::c();
        
        return view('category', compact('posts'));
    }
   
    

}