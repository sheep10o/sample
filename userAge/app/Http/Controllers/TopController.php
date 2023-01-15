<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function calcAge(Request $req)
    {
        // フォームから氏名のデータ(name=userName)の取得
        $userName = $req->userName;
        // 入力のチェック
        if (!isset($userName) || strlen($userName) === 0) {
            // 変数が存在しない、または未入力の場合
            return redirect("/"); //トップページへ強制移動
        }
        // フォームから生まれた西暦を(name=born)
        $born = $req->born;
        // 入力のチェック
        if (!isset($born) || strlen($born) === 0) {
            // 変数が存在しない、または未入力の場合
            return redirect("/"); //トップページへ強制移動
        }
        $thisYear = date('Y'); //今年の西暦を取得
        $age = $thisYear - $born; //今年の年齢を求める
        //ビューに渡すデータを連想配列としてセット
        $data = [
            'name' => $userName, //ユーザー名
            'born' => $born, //生まれた西暦
            'thisYear' => $thisYear, //今年の西暦
            'age' => $age //今年の年齢
        ];
        // データを指定してビューの呼び出し
        return view('top.result', $data);
    }
}
