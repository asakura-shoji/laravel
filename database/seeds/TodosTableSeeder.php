<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder {

    public function run() {
      
        DB::table('todos')->truncate();
        //TRUNCATE - テーブルから全ての行を削除するSQL
        //truncateメソッド - 全レコードを削除し、自動増分のIDを0にリセットするためにテーブルをTRUNCATEしたい場合

        DB::table('todos')->insert([
          [
            'title'      => 'フレームワークカリキュラムを終わらせる',
            'created_at' => '2015-04-06 23:59:59',
            'updated_at' => '2015-04-07 23:59:59',
          ],
          [
            'title'      => 'Unixオペレーションに慣れる',
            'created_at' => '2015-02-01 00:00:00',
            'updated_at' => '2015-02-01 00:00:00',
          ],
        ]);
    }
}
