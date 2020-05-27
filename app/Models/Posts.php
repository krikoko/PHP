<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
     protected $fillable = [
        'token' => '7YyjoVlQ43idt4ScXCz2D5qjkQeFwJUQRGJyziu5',
        'prew',
        'text' ,
        'textarea' => 'test',
        'category',
        'author',
     ];
    

    public static function politic()
    {
        return static::where('category', 'politic')->get();
    }

    public static function economic()
    {
        return static::where('category', 'economic')->get();
    }

    public static function sport()
    {
        return static::where('category', 'sport')->get();
    }

    
}
