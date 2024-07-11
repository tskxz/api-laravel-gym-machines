<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marcas')->insert([
            'nome' => "Cybex"
        ]);
        DB::table('marcas')->insert([
            'nome' => "Hammer Strength"
        ]);
        DB::table('marcas')->insert([
            'nome' => "Rogue"
        ]);
    }
}
