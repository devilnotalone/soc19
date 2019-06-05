<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slide;
use App\News;

class HomeController extends Controller
{
    public function getIndex()
    {
        $data['slides'] = DB::table('slides')
            ->orderBy('created_at','desc')
            ->take(4)
            ->get();
        $data['count_slide'] = Slide::count();


        $data['news_head_1'] = News::where('news_type_id',1)
            ->orderBy('created_at','desc')
            ->take(3)
            ->get();
        $data['news_1_1'] = News::where('news_type_id', 1)
            ->orderBy('created_at', 'desc')
            ->skip(3)
            ->take(10)
            ->get();
        $data['news_2'] = News::where('news_type_id', 2)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $data['news_3'] = News::where('news_type_id', 3)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $data['news_4'] = News::where('news_type_id', 4)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('front.index', $data);

    }
}
