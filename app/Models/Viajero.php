<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;
    /* protected $fillable = ['dni', 'nombre', 'direccion', 'telefono']; */
    public function viaje(){
        return $this->hasOne('app\models\viaje');

        

    }
}
