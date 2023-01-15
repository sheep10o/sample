<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータを3件作成
        DB::table('articles')->insert([
            'user_name' => '大阪太郎',
            'posted_item' => 'Laravelの練習',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('articles')->insert([
            'user_name' => '大阪太郎',
            'posted_item' => 'ポリテクセンター関西 ICTエンジニア科',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('articles')->insert([
            'user_name' => '梅田羊子',
            'posted_item' => 'プログラマに就職希望',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
