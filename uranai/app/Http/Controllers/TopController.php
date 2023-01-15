<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function fortune()
    {    //ビューに渡すデータを連想配列で準備
        $data = [
            // キー「score」に0~100の乱数を指定
            'score' => mt_rand(0, 100)
        ];
        // 利用するビューの指定
        return view('top.fortune', $data);
    }


    public function omikuji()
    {
        // おみくじの結果(文字列)を配列で初期化
        $omikuji = ['Excellent Luck', 'Good Luck', 'Uncertain Luck', 'Bad Luck'];

        // 画像ファイル名を配列で初期化
        $img = ['daikichi.png', 'chukichi.png', 'suekichi.png', 'kyo.png'];

        // 乱数(0～3)を求める→おみくじの番号として利用
        $no = mt_rand(0, 3);
        // ビューにキー「result」としておみくじの結果を返す
        $data = [
            'result' => $omikuji[$no],
            'path' => 'img/' . $img[$no]
        ];
        // 利用するビューの指定
        return view('top.omikuji', $data);
    }
}
