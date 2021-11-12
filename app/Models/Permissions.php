<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    public $fillable = [
        'id',
        'permission',
    ];
}
