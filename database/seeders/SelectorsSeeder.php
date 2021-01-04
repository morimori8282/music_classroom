<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // initialize

        /**
         *  gender
         */
        DB::table('sys_selectors')->insert([
            [
                'type' => 'gender',
                'val' => '1',
                'name' => '男',
            ],[
                'type' => 'gender',
                'val' => '2',
                'name' => '女',
            ],[
                'type' => 'gender',
                'val' => '3',
                'name' => 'その他',
            ],
        ]);

        /**
         *  status
         */
        DB::table('sys_selectors')->insert([
            [
                'type' => 'status',
                'val' => '1',
                'name' => '予約中',
            ],[
                'type' => 'status',
                'val' => '2',
                'name' => '完了',
            ],[
                'type' => 'status',
                'val' => '3',
                'name' => 'キャンセル',
            ],
        ]);
    }
}
