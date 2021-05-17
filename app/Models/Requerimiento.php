<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion',
        'fecha_atencion',
        'interno',
        'id_users',
        'id_tiporeq',
        'id_calificacion',
        'id_prioridad',
        'id_departamento',
        'id_estado',

    ];
    protected $table = 'categorias';

    public function user()
    {
        return $this->belongsTo(User::class,'id_users','id');
    }

    public function tiporequerimiento()
    {
        return $this->belongsTo(Tiporequerimiento::class,'id_tiporeq','id');
    }

    public function calificacion()
    {
        return $this->belongsTo(Calificacion::class,'id_calificacion','id');
    }

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class,'id_prioridad','id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_departamento','id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class,'id_estado','id');
    }

}
