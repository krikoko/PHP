<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Admin;

Route::get('/', 'IndexController@index');
    Route::get('/news', 'PostsController@index');
    Route::get('/news/politic', 'PostsController@politic');
    Route::get('/news/economic', 'PostsController@economic');
    Route::get('/news/sport', 'PostsController@sport');
    Route::get('news/category/1', 'CategoryController@a');
    Route::get('news/category/2', 'CategoryController@b');
    Route::get('news/category/3', 'CategoryController@c');


//Login across socialservices
    Auth::routes();
    Route::group(['prefix' => 'auth'], function()
    {
        Route::get('/vk', 'Auth\Vkcontroller@login')->name('vk.login');
        Route::get('/callback', 'Auth\Vkcontroller@response')->name('vk.callback');
        Route::get('/facebook', 'Auth\FacebookController@facebook')->name('fb.login');
         Route::get('/facebook/callback', 'Auth\FacebookController@callback')->name('fb.callback');
    });

//routes for authorized users
    Auth::routes();
    Route::group([ 'middleware' => 'auth'], function()
        {  
        Route::get('/home', 'HomeController@index')->name('home');
        //Route::get('/home', 'ProfileController@index');
        Route::resource('contact', 'ContactController');
        Route::resource('home/profile', 'ProfileController');
        

 //routes for admin users
        Route::group(['prefix' =>'admin', 'middleware' => 'admin'], function(){
            Route::resource('home/add', 'AddController');
            
            Route::get('/home/contact', 'HomeController@contact')->name('contact');
        
    });
        // Route::get('home/contact', 'ContactController@create');        
    });