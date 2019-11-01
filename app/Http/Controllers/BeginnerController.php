<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerController extends Controller
{
    // indexアクション
    public function index()
    {
        $data = array(); //配列の初期化
        $data['name'] = 'カズさん！';
        $data['message'] = 'こんばんは！！！';
        $today = date('2019/11/01');
        return view('beginner', ['data' => $data, 'today' => $today]);
    }
}
