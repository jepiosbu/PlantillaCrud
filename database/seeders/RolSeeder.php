<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    public function run()
    {
        $roles=['Estudiante','Profesor'];
        foreach ($roles as $rol){
            DB::table('rols')->insert(['nombre' => $rol]);
        }
    }
}
