<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $commentSettings = CommentSetting::first();
        return view('admin.comments.index', compact('comments', 'commentSettings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|',
            'desc' => 'required|string',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255'
        ]);

        $data = $request->only(['desc', 'name', 'location']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('comments', 'public');
        }

        Comment::create($data);

        return redirect()->route('admin.comments.index')
            ->with('success', 'Yorum başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'comments' => 'required|array',
            'comments.*.desc' => 'required|string',
            'comments.*.name' => 'required|string|max:255',
            'comments.*.location' => 'required|string|max:255',
            'comments.*.image' => 'nullable|image|'
        ]);

        foreach ($request->comments as $commentData) {
            if (isset($commentData['id'])) {
                $comment = Comment::find($commentData['id']);
                if ($comment) {
                    $data = [
                        'desc' => $commentData['desc'],
                        'name' => $commentData['name'],
                        'location' => $commentData['location']
                    ];

                    if (isset($commentData['image']) && $commentData['image']) {
                        if ($comment->image) {
                            Storage::disk('public')->delete($comment->image);
                        }
                        $data['image'] = $commentData['image']->store('comments', 'public');
                    }

                    $comment->update($data);
                }
            }
        }

        return redirect()->route('admin.comments.index')
            ->with('success', 'Yorumlar başarıyla güncellendi.');
    }

    public function destroy(Comment $comment)
    {
        if ($comment->image) {
            Storage::disk('public')->delete($comment->image);
        }
        
        $comment->delete();

        return redirect()->route('admin.comments.index')
            ->with('success', 'Yorum başarıyla silindi.');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $settings = CommentSetting::first() ?? new CommentSetting();
        $settings->fill($request->only(['title', 'desc']));
        $settings->save();

        return redirect()->route('admin.comments.index')
            ->with('success', 'Yorum ayarları başarıyla güncellendi.');
    }
} 