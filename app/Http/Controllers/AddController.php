<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use Illuminate\Http\Request;
use App\Models\Add;


class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Add::paginate(5);
        //dd($posts);
        return view('layouts.add', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
       $text = $request->input('text');
       $head = $request->input('head');
       $date = $request->input('date');
       $category = $request->input('category');
       $author = $request->input('author');

       $posts = Add::create([

        'text' => $text,
        'head' => $head,
        'date' => $date,
        'category' => $category,
        'author' => $author

       ]);

       if($posts){
        return back()->with('success', 'Post has been added!');
       }

       return back()->with('error', 'ERROR!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(Add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(Add $add)
    {   

        return view('layouts.update', ['add'=>$add]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(AddRequest  $request, Add $add)
    {
        $add -> text = $request -> input('text');
        $add -> head = $request -> input('head');
        $add -> date = $request -> input('date');
        $add -> category = $request -> input('category');
        $add -> author = $request -> input('author'); 

        if($add -> save())
        {
            return back()->with('success', 'Post has been updated!');
        }
        else return back()->with('error', 'Error!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        //
    }
}
