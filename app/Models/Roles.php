<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $fillable = [
        'id',
        'user_id',
        'role',
    ];
}
