<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profiles';

    public $timestamps = 'false';

    protected $fillable = ['name', 
                           'sername', 
                           'tel', 
                           'about', 
                           'city',
                           'profile_id'
];
    public function user()
    {
        $this->hasOne('App\Models\User', 'profile_id', 'id');
    }
}
