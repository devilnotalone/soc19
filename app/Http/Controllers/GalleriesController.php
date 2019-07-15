<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleriesController extends Controller
{
    public function getAlbum()
    {
        $data['album'] = DB::table('galleries')
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('page.album', $data);
    }

    public function getGallery($id)
    {
        $data['gallery'] = DB::table('galleries')
            ->where('id',$id)
            ->get();
        return view('page.gallery', $data);
    }
}
