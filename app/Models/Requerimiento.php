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
        'id_dpto',


    ];
    protected $table = 'requerimientos';

    public function user()
    {
        return $this->belongsTo(User::class,'id_users','id');
    }

    public function tiporequerimiento()
    {
        return $this->belongsTo(Tiporequerimiento::class,'id_tiporeq','id');
    }


    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_dpto','id');
    }
    public function ticket()
    {
        return $this->hasMany(Ticket::class,'id_ticket','id');
    }

}
