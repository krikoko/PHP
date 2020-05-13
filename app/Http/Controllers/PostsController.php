<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        
        return view('posts', compact('posts'));
    }
    
    public function economic()
    {
        $posts = Posts::economic();
        
        return view('posts', compact('posts'));
    }

    public function politic()
    {
        $posts = Posts::politic();
        
        return view('posts', compact('posts'));
    }

    public function sport()
    {
        $posts = Posts::sport();
        
        return view('posts', compact('posts'));
    }
    
    
}
