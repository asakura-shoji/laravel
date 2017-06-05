<?php

//コントローラー

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;//Todoモデルを読み込む
use App\Http\Requests;

class TodoController extends Controller {
  private $todo;
  //private - クラス内からでしかアクセスできない

  public function __construct(Todo $todo){
    //__construct - クラスにおいてオブジェクトが生成された際に実行されるメソッド
    //Todoモデルは各メソッドで使用するのでコンストラクタで変数に入れておく
    $this->todo = $todo;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(){
    $todos = $this->todo->all();
    //$this->todo->all() - Todoモデルから全てのレコードを取得
    return view('todo.index',compact('todos'));
    //view - 第一引数のURLを表示させる。
    //viewヘルパーに渡している最初の引数はディレクトリー中のビューファイル名
    //２つ目の引数は、ビューで使用するデータの配列
    //compact - 変数を受け渡す
  }

  public function create() {
    return view('todo.create');
    //view - URLを表示
  }

  public function store(Request $request) {
    $input = $request->all();
    //$request->all() - 入力されたフォームの内容を取得
    $this->todo->fill($input);
    //fill()を使うとEloquentは$fillableをチェックして、このプロパティを設定できるかどうかを確認する。
    $this->todo->save();
    //save() - 新しいレコードがデータベースに挿入されます。
    //created_atとupdated_atタイムスタンプは自動的に設定されます。
    //saveメソッドはデータベースで既に存在するモデルを更新するためにも使用されます。

    return redirect()->to('todo');
    //保存後にToDo一覧にリダイレクトするようにしている
  }
}
