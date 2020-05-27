<?php

namespace App\Http\Controllers;
use App;
use App\Models\Posts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function a()
    {
        $posts = App\Models\Posts::a();
        
        return view('category', compact('posts'));
    }

    public function b()
    {
        $posts = App\Models\Posts::b();
        
        return view('category', compact('posts'));
    }

    public function c()
    {
        $posts = App\Models\Posts::c();
        
        return view('category', compact('posts'));
    }
   
    

}