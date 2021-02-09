<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;

    protected $table='aprendices';
    protected $primaryKey='id_aprendices';
    protected $fillable =[
        'nom1',
        'nom2',
        'ape1',
        'ape2',
        'estado',
        'correo',
        'fechaNacimiento',
        'genero',
        'foto',
        'tipoDoc',
        'FK_ficha'
    ];

    public function ficha(){
        return $this->belongsTo('App\Models\Ficha', 'FK_ficha');
    }
}
