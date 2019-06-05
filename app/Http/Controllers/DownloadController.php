<?php

namespace App\Http\Controllers;

use App\Document;
use App\TypeDocument;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    public function ta_download($id)
    {
        $data['TypeDoc'] = TypeDocument::where('id', $id)->firstOrFail();
        $data['ListDoc'] = Document::where('type_documents_id', $id)
            ->join('type_documents', 'documents.type_documents_id', '=', 'type_documents.id')
            ->where('for_user', 1)
            ->paginate(15);
        $data['ListTypeDoc'] = DB::table('documents')
            ->join('type_documents', 'documents.type_documents_id', '=', 'type_documents.id')
            ->where('for_user', 1)
            ->select('documents.type_documents_id as id', 'type_documents.type_doc as type_doc')
            ->groupBy('documents.type_documents_id')
            ->get();

        return view('page.ta_download', $data);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data['posts'] = DB::table('documents')->where('title', 'like', '%')->paginate(10);
        return view('page.ta_download', $data);
    }

    public function st_download($id)
    {
        $data['TypeDoc'] = TypeDocument::where('id', $id)->firstOrFail();
        $data['ListDoc'] = Document::where('type_documents_id', $id)
            ->join('type_documents', 'documents.type_documents_id', '=', 'type_documents.id')
            ->where('for_user', 2)
            ->paginate(15);
        $data['ListTypeDoc'] = DB::table('documents')
            ->join('type_documents', 'documents.type_documents_id', '=', 'type_documents.id')
            ->where('for_user', 2)
            ->select('documents.type_documents_id as id', 'type_documents.type_doc as type_doc')
            ->groupBy('documents.type_documents_id')
            ->get();

        return view('page.st_download', $data);
    }
}
