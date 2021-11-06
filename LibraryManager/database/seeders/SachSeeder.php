<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i< 4; $i++){
            DB::table('sach')->insert([
                'tensach' => Str::random(3),
                'tacgia' => Str::random(3),
                'masach' => Str::random(3),
                'theloai' => Str::random(3),
                'namxuatban' => Str::random(3),
            ]);
        }
    }
}
