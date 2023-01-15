<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function first(Request $req)
    {
        $score = mt_rand(0, 10); //乱数の生成
        // セッションにデータを保存
        $req->session()->put('score', $score);
        // リダイレクト
        return redirect('/sessionSample/second');
    }
    public function second(Request $req)
    {
        // セッションからデータを取得
        $score = $req->session()->get('score', 0);
        $data = [
            'score' => $score
        ];
        return view('top.show', $data);
    }
}

