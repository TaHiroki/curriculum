<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->delete();

        $param = [
            'user_id' => 1,
            'body' => "テスト投稿",
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'body' => "お腹痛い",
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'body' => "ハートも痛い",
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('posts')->insert($param);

    }
}
