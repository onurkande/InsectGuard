<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoSetting;
class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $video_settings = VideoSetting::first();
        return view('site.videos', compact('videos', 'video_settings'));
    }
}
