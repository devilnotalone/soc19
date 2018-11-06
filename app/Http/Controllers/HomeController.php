<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{
    public function getIndex()
    {
        $data['slides'] = Slide::all();
        $data['count_slide'] = Slide::count();
        return view('front.index',$data);
    }
}
