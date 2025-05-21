<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'iframe',
        'address',
        'telephone',
        'email',
        'working_hours'
    ];
} 