<?php

namespace Database\Seeders;

use App\Models\aprendices;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AprendicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        DB::table('Aprendices')->insert([
            'documento' =>'1022373058',
            'nombres' => 'julieth astrid',
            'apellidos' => 'hernandez caballero',
            'correo_electronico' => 'juliethahc@misena.edu.co',
            'fecha_nacimiento' =>'14/01/1992',
            'genero' => 'femenino',
            'tipo_documento' => 'cc'
        ]);
    }
}
