<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\In;

class DocgiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i< 4; $i++){
            DB::table('doc_gia')->insert([
                'tendocgia' => Str::random(3),
                'madocgia' => Str::random(3),
                'diachi' => Str::random(3),
                'sodienthoai' => 12321321,
                'sachdangmuon' => Str::random(3),
            ]);
        }
    }
}
