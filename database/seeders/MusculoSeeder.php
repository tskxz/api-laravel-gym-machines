<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('musculos')->insert([
            'nome' => "Bicep"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Tricep"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Ombro Frontal"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Ombro Lateral"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Ombro Anterior"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Dorsal"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Quadriceps"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Trapézio"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Abdominais"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Antebraço"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Peito"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Isquiotibiais"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Gémeos"
        ]);
        DB::table('musculos')->insert([
            'nome' => "Glúteos"
        ]);
    }
}
