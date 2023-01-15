<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //利用するモデルの読み込み

class DbController extends Controller
{
    //全レコードを取得するアクションメソッドの定義
    public function list()
    {
        $data = [
            // 全レコードを取得するモデル内のメソッドを実行
            'records' => Article::all()
        ];
        return view('db.list', $data);
    }
    // データ登録用フォームを返すアクションメソッドの定義
    public function insert()
    {
        return view('db.insert');
    }

    public function store(Request $req)
    {
        $article = new Article(); //モデルのインスタンスを生成
        //フォームのデータをプロパティに代入
        $article->user_name = $req->user_name;
        $article->posted_item = $req->posted_item;
        // テーブルにデータを保存するメソッドを実行
        $article->save();
        // ビューで登録したデータを表示するためにデータを渡す
        $data = [
            'user_name' => $req->user_name,
            'posted_item' => $req->posted_item
        ];
        return view('db.store', $data); //ビューの呼び出し
    }

    // 更新するデータのid値を入力するフォーム(ビュー)を返すアクションメソッド
    public function editId()
    {
        return view('db.edit');
    }
    // 指定されたid値の既存のデータを表示するフォーム(ビュー)を返すメソッド
    public function editData(Request $req)
    {

        $id = $req->id; //入力されたキーの取得
        $data = [
            'record' => Article::find($id) //主キーのデータを取得
        ];
        return view('db.edit', $data);
    }
    // フォームのデータを取得し、テーブルに保存(更新)するアクションメソッド
    public function update(Request $req)
    {
        // 該当するデータをモデルに取り出す
        $article = Article::find($req->id);
        // フォームのデータで内容を更新(上書き)する
        $article->user_name = $req->user_name;
        $article->posted_item = $req->posted_item;
        // テーブルにデータを保存するメソッドを実行
        $article->save();
        $data = [
            'id' => $req->id,
            'user_name' => $req->user_name,
            'posted_item' => $req->posted_item
        ];
        return view('db.update', $data); //ビューの呼び出し

    }
    // 削除するデータのid値を入力するフォーム(ビュー)を返すアクションメソッド
    public function eraseId()
    {
        return view('db.erase');
    }
    // 指定されたid値の既存のデータを表示するフォーム
    public function eraseData(Request $req)
    {
        $id = $req->id; //入力された主キーの取得
        $data = [
            'record' => Article::find($id) //主キーのデータを取得
        ];
        return view('db.erase', $data);
    }
    // フォームのデータを取得し、テーブルから削除するアクションメソッド
    public function delete(Request $req) {
        // 該当するデータをモデルに取り出す
        $article = Article::find($req->id);
        // データを削除するメソッドを実行
        $article->delete();
        $data = [
            'id' => $req->id,
            'user_name' => $req->user_name,
            'posted_item' => $req->posted_item
        ];
        return view('db.delete', $data); //ビューの呼び出し
    }
}
