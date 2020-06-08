<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthData extends Model
{
    protected $table = 'auth_table';

    protected $guarded = ['id'];
}
