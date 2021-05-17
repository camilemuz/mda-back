<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursals';

    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'id_municipio','id');
    }


}
