<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'favicon',
        'image',
        'title',
        'desc',
        'instagram_url',
        'facebook_url',
        'youtube_url',
        'twitter_url',
        'bottom_desc',
        'bottom_content'
    ];
} 