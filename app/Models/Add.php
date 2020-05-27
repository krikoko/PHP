<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{

    protected $table = 'posts';

    public $timestamps = 'false';
    
    protected $fillable = ['text', 
                            'date', 
                            'author', 
                            'head', 
                            'category'
                        ];
     
  
}
