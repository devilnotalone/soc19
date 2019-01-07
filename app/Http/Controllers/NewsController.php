<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsType;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
     public function getNews($id)
    {
        $data['news'] = News::where('id', $id)->firstOrFail();
        $news_type_id = $data['news']->news_type_id;
        $data['news_type'] = NewsType::where('id', $news_type_id)->firstOrFail();
        $data['news_all'] = News::where('news_type_id', $news_type_id)
            ->orderBy('created_at','desc')
            ->take(5)
            ->get();
        $data['count_news'] = News::with(['types_n'])
            ->get();

        return view('front.news', $data);
    }
}
