<?php

//Model

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $fillable = ['title'];
  //protected - そのクラス自身とそのクラスを継承したクラスからのみアクセスできる
  //$fillable - ホワイトリスト_複数代入時に代入を許可する属性を配列で設定
  //insertやcreateメソッドでテーブルのカラムに値を複数代入する際に、
  //予期せぬ代入(製作者が意図していない代入)が起こることを防ぐ(id等)

  //Formヘルパーを使って送信するとCSRF対策として自動でランダム文字列も送ってくれます
  //ただこの_tokenの値は保存しないので必要な項目のみ登録するようにしている
}
