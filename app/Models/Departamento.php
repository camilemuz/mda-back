<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;


    protected $table = 'departamentos';

    public function requerimiento()
    {
        return $this->hasMany(Requerimiento::class,'id_departamento','id');
    }

}
