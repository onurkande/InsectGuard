<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSetting;
use App\Models\Counter;
use App\Models\CounterSetting;
use App\Models\Feature;
use App\Models\FeatureSetting;
use App\Models\VideoSetting;
use App\Models\Video;
use App\Models\Comment;
use App\Models\CommentSetting;
use App\Models\Question;
use App\Models\QuestionSetting;
use App\Models\Contact;
class IndexController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(6)->get();
        $product_settings = ProductSetting::first();
        $counters = Counter::latest()->take(3)->get();
        $counter_settings = CounterSetting::first();
        $features = Feature::latest()->take(6)->get();
        $feature_settings = FeatureSetting::first();
        $video_settings = VideoSetting::first();
        $videos = Video::first();
        $comments = Comment::all();
        $comment_settings = CommentSetting::first();
        $questions = Question::all();
        $question_settings = QuestionSetting::first();
        $contact = Contact::first();
        return view('site.index', compact('products', 'product_settings', 'counters', 'counter_settings', 'features', 'feature_settings', 'video_settings', 'videos', 'comments', 'comment_settings', 'questions', 'question_settings', 'contact'));
    }
}
