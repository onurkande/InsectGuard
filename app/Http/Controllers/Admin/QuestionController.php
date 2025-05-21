<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSetting;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $questionSettings = QuestionSetting::first();
        return view('admin.questions.index', compact('questions', 'questionSettings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'icon' => 'required|string|max:255'
        ]);

        Question::create($request->only(['title', 'desc', 'icon']));

        return redirect()->route('admin.questions.index')
            ->with('success', 'Soru başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'questions' => 'required|array',
            'questions.*.title' => 'required|string|max:255',
            'questions.*.desc' => 'required|string',
            'questions.*.icon' => 'required|string|max:255'
        ]);

        foreach ($request->questions as $questionData) {
            if (isset($questionData['id'])) {
                $question = Question::find($questionData['id']);
                if ($question) {
                    $question->update([
                        'title' => $questionData['title'],
                        'desc' => $questionData['desc'],
                        'icon' => $questionData['icon']
                    ]);
                }
            }
        }

        return redirect()->route('admin.questions.index')
            ->with('success', 'Sorular başarıyla güncellendi.');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')
            ->with('success', 'Soru başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = QuestionSetting::first() ?? new QuestionSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.questions.index')
            ->with('success', 'Soru ayarları başarıyla güncellendi.');
    }
} 