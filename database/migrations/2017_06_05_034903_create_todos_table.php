<?php

//マイグレーション - データベースのバージョンコントロール

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//テーブル作成時の記述
    {
      Schema::create('todos', function(Blueprint $table){
        //Schema::create テーブルを制作するメソッド
        //createメソッドの最初の引数はテーブル名、２つ目は無名関数、
        //新しいテーブルを定義するためのBlueprintオブジェクトを取る。

        $table->increments('id');//自動増分ID（主キー）
        $table->string('title');//VARCHARカラム - 可変長文字列
        $table->timestamps();
        //TIMESTAMPカラム - レコードが更新された時に自動で日時が更新されるように設定
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//テーブル削除時の記述
    {
      Schema::drop('todos');
    }
}
