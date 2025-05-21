<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutSetting;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $aboutSettings = AboutSetting::first();
        return view('site.about', compact('about', 'aboutSettings'));
    }
}
