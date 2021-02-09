<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formacion extends Model
{
    use HasFactory;

    protected $table='formacion';
    protected $primaryKey='id_formacion';
    protected $fillable =[
        'nombreProgama',
        'sigla'
    ];

    public function ficha(){
        return $this->hasMany(Ficha::class);
    }

  
}