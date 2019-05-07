<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;

class NewsController extends Controller
{
    public function getNews($id)
    {
        $data['news'] = News::where('id', $id)->firstOrFail();
        $news_type_id = $data['news']->news_type_id;
        $data['news_type'] = NewsType::where('id', $news_type_id)->firstOrFail();
        $data['news_all'] = News::where('news_type_id', $news_type_id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $data['news_type_all'] = NewsType::all();

        return view('front.news', $data);
    }

    public function listNews($id)
    {
        $data['news_type'] = NewsType::where('id', $id)->firstOrFail();
        $data['news_of_type'] = News::where('news_type_id', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        $data['news_type_all'] = NewsType::all();

        return view('front.listnews', $data);
    }
}
