<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class,'id_prioridad','id');
    }
    public function calificacion()
    {
        return $this->belongsTo(Calificacion::class,'id_calificacion','id');
    }
}
