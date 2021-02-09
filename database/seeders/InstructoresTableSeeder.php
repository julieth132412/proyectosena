<?php

namespace Database\Seeders;

use App\Models\instructores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Instructores')->insert([
            'nombres'     =>'robinson',
            'apellidos'  => 'cortes',
            'documento' => '15426598715',
            'foto' =>'foto'
        ]);
    }
}





