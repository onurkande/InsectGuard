<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $aboutSettings = AboutSetting::first();
        return view('admin.abouts.index', compact('about', 'aboutSettings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'our_story' => 'required|string',
            'our_vision' => 'required|string',
            'our_mission' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $about = About::first() ?? new About();

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('background-settings', $imageName, 'public');
            $about->image = $imagePath;
        }

        $about->fill($request->except('image'));
        $about->save();

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Hakkımızda sayfası başarıyla güncellendi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = AboutSetting::first() ?? new AboutSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.abouts.index')
            ->with('success', 'Hakkımızda ayarları başarıyla güncellendi.');
    }
} 