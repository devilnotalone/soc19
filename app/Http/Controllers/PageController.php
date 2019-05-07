<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\TypePage;

class PageController extends Controller
{
    public function getIndex($slug){
        $data['page'] = Page::where('slug', $slug)->firstOrFail();
        return view('page.index',$data);
    }
}
