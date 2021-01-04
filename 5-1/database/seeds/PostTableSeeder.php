<?php

use Illuminate\Database\Seeder;

class PosttableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'body' => "テスト投稿"
        ];

        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'body' => "お腹痛い"
        ];

        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'body' => "ハートも痛い"
        ];

        DB::table('posts')->insert($param);

    }
}
