<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sarans')->insert([
            ['tanaman' => 'Padi', 'iklim' => 'sedang'],
            ['tanaman' => 'Gandum', 'iklim' => 'sejuk'],
            ['tanaman' => 'Jagung', 'iklim' => 'sedang'],
            ['tanaman' => 'Kaktus', 'iklim' => 'panas'],
            ['tanaman' => 'Teh', 'iklim' => 'dingin'],
        ]);
    }
}
