<?php

namespace Database\Seeders;

use App\Models\ficha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FichaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ficha')->insert([
                    'jornada'     =>'nocturna',
                    'caracter'  => '1803183',
                    'ficha_activa' => 'si',
                    'ficha_inactiva' =>'no'
        ]);
    }
}

