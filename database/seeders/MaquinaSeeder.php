<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maquinas')->insert([
            'nome' => "Hack Squat",
            'descricao' => "Máquina de agachamento para foco quads",
            'musculo_id' => 7,
            'marca_id' => 1,
        ]);
    }
}
