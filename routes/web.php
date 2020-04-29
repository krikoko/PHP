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

Route::get('/', function () {
    return view('index', [
        'title' => 'MobileShop',
        'head' => 'Добро пожаловать на мой сайт!'
    ]);
});

Route::get('catalog', function () {
    return view('catalog', [
        'head' => 'Каталог',
        'com' => 'Здесь мой небольшой коммент...'
    ]);
});

Route::get('about', function () {
    $p = 'Регистрация';
    $li = [
        'Main page',
        'Registration',
        'Catalog'
    ];
    return view('about',compact('p'), compact('li'));
});
