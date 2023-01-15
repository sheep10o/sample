<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; //利用するモデルの読み込み

class DbController extends Controller
{
    //全レコードを取得するメソッド
    public function list()
    {
        $data = [
            // 全レコードを取得するモデル内のメソッドを実行し、保存
            'records' => Item::all()
        ];
        return view('db.list', $data);
    }
    public function insert()
    {
        return view('db.insert');
    }

    // フォームのデータを取得し、テーブルに保存するアクションメソッド
    public function store(Request $req)
    {
        $item = new Item(); //モデルのインスタンスを作成
        // フォームのデータをプロパティに代入
        $item->name = $req->name;
        $item->price = $req->price;
        // テーブルにデータを保存するメソッドを実行
        $item->save();

        // ビューで登録したデータを表示するため、データを渡す
        $data = [
            'name' => $req->name,
            'price' => $req->price
        ];
        return view('db.store', $data);
    }
    public function keyword()
    {
        return view('db.search');
    }
    public function search(Request $req)
    {
        $name = $req->name;
        $data = [
            'name' => $name,
            'price' => Item::where('name', 'LIKE', '%' . $name . '%')->get()

        ];
        return view('db.search', $data);
    }
}
