<?php

namespace App\Http\Controllers;



use App\Posts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Request;


class AddController extends Controller

{
   
    public function add()
    {
        
    
        //dump($request->all());
        $inp = Posts::all();
        //$inp['published_at'] = Carbon::now();
        Posts::create(request([
            'text' => request('text'),
            'head' => request('head'),
            'date' => request('date'),
            'category' => request('category'), 
            'author' => request('author')
                   
        ]));
       return   redirect('news');
    }
    
    public function show()
    {
        return view('home');
    }

    protected function validator(array $request)
    {
       
        return Validator::make( $request, [
            'text' => ['required', 'max:50000'],
            'date' => ['required'],
            'head' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
        ]);

        
    }
   
  
    }

    
    
    
