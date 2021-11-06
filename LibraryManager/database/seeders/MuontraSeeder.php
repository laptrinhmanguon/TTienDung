<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\In;

class MuontraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i< 4; $i++){
            DB::table('muon_tra')->insert([
                'tendocgia' => Str::random(3),
                'madocgia' => Str::random(3),
                'tensach' => Str::random(3),
                'masach' => Str::random(3),
                'sodienthoai' => 21321321,
                'sophieu' => Str::random(3),
                'thuthu' => Str::random(3),
            ]);
        }
    }
}
