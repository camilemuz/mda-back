<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';

    public function sucursal()
    {
        return $this->hasMany(Sucursal::class,'id_sucursal','id');
    }



}
