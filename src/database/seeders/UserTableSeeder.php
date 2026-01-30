<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'シャーロックホームズ',
            'email' => 'holmes@gmail.com',
            'password' => Hash::make('221bekar')
        ];
        DB::table('users')->insert($user);

        $weight_target = [
            'user_id' => 1,
            'target_weight' => 55.0
        ];
        DB::table('weight_target')->insert($weight_target);

        $weight_log = [
            'user_id' => 1,
            'weight' => 53.0,
            'calories'=> 1200,
            'exercise_time' => '01:30:00',
            'date' => '2026-01-30',
            'exercise_content' => '昨日よりも頑張ったよ'
        ];
        DB::table('weight_logs')->insert($weight_log);
    }
}
