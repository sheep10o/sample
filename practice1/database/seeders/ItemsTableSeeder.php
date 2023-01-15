<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            //テスト用データ、1件目
            'name' => '林檎',
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            //テスト用データ、2件目
            'name' => '葡萄',
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            //テスト用データ、3件目
            'name' => '檸檬',
            'price' => 700,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
