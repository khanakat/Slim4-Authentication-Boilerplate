<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name'
    ];
}
