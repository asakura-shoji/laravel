<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('todo', 'TodoController');
//通信方法がなんであろうが渡す
//resource(どこのURL（ページ）が欲しいか,どこのメソッドを呼び出すか)
//todoフォルダの中のURLすべてにアクセスされたら
Route::get('/', function () {
    return view('welcome');
    //view - URLを表示させる。
});
