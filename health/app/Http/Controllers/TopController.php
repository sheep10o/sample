<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function calcHealth(Request $req)
    {
        // フォームから身長を取得
        $userHeight = $req->userHeight;
        $userWeight = $req->userWeight;

        // 入力のチェック
        if ((!isset($userHeight) || strlen($userHeight) === 0) && (!isset($userWeight) || strlen($userWeight) === 0)) {
            // 変数が存在しない、または未入力の場合
            return redirect("/"); //トップページに強制移動
        }

        // BMI、小数点以下第一位で四捨五入
        $bmi = $userWeight / pow(($userHeight / 100), 2);
        $bmi = round(($bmi * 10) / 10, 1);

        // 標準体重、小数点以下第一位で四捨五入
        $stdWeight = pow(($userHeight / 100), 2) * 22;
        $stdWeight = round(($stdWeight * 10) / 10, 1);


        $data = [
            'userHeight' => $userHeight,
            'userWeight' => $userWeight,
            'bmi' => $bmi,
            'stdWeight' => $stdWeight
        ];
        // データを指定してビューの呼び出し
        return view('top.result', $data);
    }
}
