<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public function destino(){
        return $this->belongsTo('app\models\destino');

    }

    use HasFactory;
    public function viajero(){
        return $this->belongsTo('app\models\viajero');

    }

    use HasFactory;
    public function origen(){
        return $this->belongsTo('app\models\origen');

    }


}
