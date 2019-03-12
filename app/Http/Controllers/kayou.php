<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class kayou extends Controller
{
    //
    public function kayou()
    {
        //显示咖啡交友的主页
        return view('kayou.index');
    }
    public function detail()
    {
        return view('kayou.detail');
    }
    public function add()//
    {
        return view('kayou.add');
    }
}
