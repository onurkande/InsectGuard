<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'video_url'
    ];

    // 1. Iframe'den src'yi al
    function extractYoutubeThumbnail($iframeHtml) {
        // src'yi ayıkla
        preg_match('/src="([^"]+)"/', $iframeHtml, $matches);
        if (!isset($matches[1])) return null;

        $src = $matches[1]; // örnek: https://www.youtube.com/embed/qRedtz_UJTY

        // 2. video ID'yi al
        $parts = explode('/', $src);
        $videoId = end($parts); // örnek: qRedtz_UJTY

        // 3. thumbnail URL'yi döndür
        return "https://i.ytimg.com/vi/{$videoId}/maxresdefault.jpg";
    }

}