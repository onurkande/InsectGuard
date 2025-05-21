<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\CounterSetting;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        $counterSettings = CounterSetting::first();
        return view('admin.counters.index', compact('counters', 'counterSettings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'number' => 'required|integer',
            'icon' => 'required|string|max:50',
        ]);

        Counter::create($request->only(['title', 'number', 'icon']));

        return redirect()->route('admin.counters.index')
            ->with('success', 'Sayaç başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'counters' => 'required|array',
            'counters.*.title' => 'required|string|max:255',
            'counters.*.number' => 'required|integer',
            'counters.*.icon' => 'required|string|max:50',
        ]);

        foreach ($request->counters as $counterData) {
            if (isset($counterData['id'])) {
                $counter = Counter::find($counterData['id']);
                if ($counter) {
                    $counter->update([
                        'title' => $counterData['title'],
                        'number' => $counterData['number'],
                        'icon' => $counterData['icon']
                    ]);
                }
            }
        }

        return redirect()->route('admin.counters.index')
            ->with('success', 'Sayaçlar başarıyla güncellendi.');
    }

    public function destroy(Counter $counter)
    {
        $counter->delete();
        return redirect()->route('admin.counters.index')
            ->with('success', 'Sayaç başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        // Sayaç ayarları tablosunda sadece tek bir kayıt olacak
        $settings = CounterSetting::first() ?? new CounterSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.counters.index')
            ->with('success', 'Sayaç ayarları başarıyla güncellendi.');
    }
} 