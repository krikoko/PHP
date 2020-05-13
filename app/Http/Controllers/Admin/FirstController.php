<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function index(){

        return <<<php
        <h1>Заголовок1</h1><br>
        <p>Добро пожаловать на страницу!</p><br>
        <a href='/'>Ссылка на публичку страницу</a>
php;
    }
}
