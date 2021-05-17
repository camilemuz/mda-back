<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiporequerimiento extends Model
{
    use HasFactory;

    protected $table = 'tiporequerimientos';

    public function tiporequerimiento()
    {
        return $this->belongsTo(Categoria::class,'id_categorias','id');
    }

    public function requerimiento()
    {
        return $this->hasMany(Requerimiento::class,'id_req','id');
    }

}
