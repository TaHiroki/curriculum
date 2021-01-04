<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $param = [
            'name' => '佐藤',
            'email' => 'satou@co.jp',
            'password' => Hash::make('testsatou'),
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('users')->insert($param);

        $param = [
            'name' => '鈴木',
            'email' => 'suzuki@co.jp',
            'password' => Hash::make('testsuzuki'),
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('users')->insert($param);

        $param = [
            'name' => '加藤',
            'email' => 'katou@co.jp',
            'password' => Hash::make('testkatou'),
            'created_at' => new DateTime(),
            'updated_at' => new Datetime(),
        ];

        DB::table('users')->insert($param);
    }
}
