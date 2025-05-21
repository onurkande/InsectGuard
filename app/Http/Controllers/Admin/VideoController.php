<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoSetting;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $videoSettings = VideoSetting::first();
        return view('admin.videos.index', compact('videos', 'videoSettings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'video_url' => 'required|string',
        ]);

        Video::create($request->only(['title', 'desc', 'video_url']));

        return redirect()->route('admin.videos.index')
            ->with('success', 'Video başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'videos' => 'required|array',
            'videos.*.title' => 'required|string|max:255',
            'videos.*.desc' => 'required|string',
            'videos.*.video_url' => 'required|string',
        ]);

        foreach ($request->videos as $videoData) {
            if (isset($videoData['id'])) {
                $video = Video::find($videoData['id']);
                if ($video) {
                    $video->update([
                        'title' => $videoData['title'],
                        'desc' => $videoData['desc'],
                        'video_url' => $videoData['video_url']
                    ]);
                }
            }
        }

        return redirect()->route('admin.videos.index')
            ->with('success', 'Videolar başarıyla güncellendi.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')
            ->with('success', 'Video başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = VideoSetting::first() ?? new VideoSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.videos.index')
            ->with('success', 'Video ayarları başarıyla güncellendi.');
    }
}