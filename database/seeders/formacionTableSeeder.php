<?php

namespace Database\Seeders;

use App\Models\formacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formacion')->insert([
            'codigo'     =>'1803183',
            'programa_formacion'  => 'analisis y desarrolo de sistemas de informacion',
            'codigo_programa' =>'22',
            'sigla' => 'ADSI'
        ]);
    }
}
