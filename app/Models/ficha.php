<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $table='ficha';
    protected $primaryKey='id_ficha';
    protected $fillable =[
        'No_ficha',
        'descrip',
        'estado',
        'FK_jornada',
        'FK_formacion',
    ];

    public function jornada(){
        return $this->belongsTo('App\Models\Jornada', 'FK_jornada');
    }

    public function formacion(){
        return $this->belongsTo('App\Models\Formacion', 'FK_formacion');
    }

    public function aprendices(){



        
        return $this->hasMany(Ficha::class);
    }
   




}



































































































































































































































































































































































































































































































































































































































































































































































































































