<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\FeatureSetting;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        $featureSettings = FeatureSetting::first();
        return view('admin.features.index', compact('features', 'featureSettings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'icon' => 'required|string|max:50',
        ]);

        Feature::create($request->only(['title', 'desc', 'icon']));

        return redirect()->route('admin.features.index')
            ->with('success', 'Özellik başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'features' => 'required|array',
            'features.*.title' => 'required|string|max:255',
            'features.*.desc' => 'required|string',
            'features.*.icon' => 'required|string|max:50',
        ]);

        foreach ($request->features as $featureData) {
            if (isset($featureData['id'])) {
                $feature = Feature::find($featureData['id']);
                if ($feature) {
                    $feature->update([
                        'title' => $featureData['title'],
                        'desc' => $featureData['desc'],
                        'icon' => $featureData['icon']
                    ]);
                }
            }
        }

        return redirect()->route('admin.features.index')
            ->with('success', 'Özellikler başarıyla güncellendi.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')
            ->with('success', 'Özellik başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = FeatureSetting::first() ?? new FeatureSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.features.index')
            ->with('success', 'Özellik ayarları başarıyla güncellendi.');
    }
} 