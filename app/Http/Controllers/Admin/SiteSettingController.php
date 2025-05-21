<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        return view('admin.site-settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
            'image' => 'nullable|image',
            'instagram_url' => 'nullable|url',
            'facebook_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'bottom_desc' => 'nullable|string',
            'bottom_content' => 'nullable|string',
        ]);

        $settings = SiteSetting::first() ?? new SiteSetting();

        // Logo işleme
        if ($request->hasFile('logo')) {
            if ($settings->logo) {
                Storage::disk('public')->delete($settings->logo);
            }
            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logoPath = $logo->storeAs('background-settings', $logoName, 'public');
            $settings->logo = $logoPath;
        }

        // Favicon işleme
        if ($request->hasFile('favicon')) {
            if ($settings->favicon) {
                Storage::disk('public')->delete($settings->favicon);
            }
            $favicon = $request->file('favicon');
            $faviconName = time() . '_' . $favicon->getClientOriginalName();
            $faviconPath = $favicon->storeAs('background-settings', $faviconName, 'public');
            $settings->favicon = $faviconPath;
        }

        // Image işleme
        if ($request->hasFile('image')) {
            if ($settings->image) {
                Storage::disk('public')->delete($settings->image);
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('background-settings', $imageName, 'public');
            $settings->image = $imagePath;
        }

        $settings->fill($request->except(['logo', 'favicon', 'image']));
        $settings->save();

        return redirect()->route('admin.site-settings.index')
            ->with('success', 'Site ayarları başarıyla güncellendi.');
    }
} 