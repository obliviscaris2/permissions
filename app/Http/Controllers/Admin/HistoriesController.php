<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function application_index()
    {
        $data = History::where('type',1)->orderBy('id', 'desc')->get(['id','description','user_id','ip_address','created_at']);

        return view('admin.history.index-application',[
            'data' => $data
        ]);
    }
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function system_index()
    {
        $data=History::where('type',0)->orderBy('id', 'desc')->get(['id','description','user_id','ip_address','created_at']);

        return view('admin.history.index-system',[
            'data' => $data
        ]);
    }


}
