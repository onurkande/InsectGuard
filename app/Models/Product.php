<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'slug',
        'desc',
        'content',
        'tags',
        'material',
        'dimensions',
        'color_options',
        'guarantee',
        'montaj'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
    }

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200); // Assuming 200 words per minute reading speed
        return $minutes;
    }

    public function settings()
    {
        return $this->hasOne(ProductSetting::class);
    }
}
