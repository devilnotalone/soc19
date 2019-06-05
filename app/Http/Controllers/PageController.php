<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getIndex($slug){
        $data['page'] = DB::table('pages')->where('slug', $slug)->first();
        return view('page.index',$data);
    }

    public function getCourse($id,$i){
        $data['course'] = DB::table('courses')->where('degrees_id', $id)->get();
        $data['count_course'] = DB::table('courses')->where('degrees_id', $id)->count();
        $data['get_i']= $i;
        $data['degree'] = $id;

        return view('page.course',$data);
    }

    public function getChart(){
        return view('page.orgchart');
    }
}
