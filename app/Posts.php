<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
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
