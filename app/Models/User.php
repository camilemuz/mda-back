<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory,HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'rol',
        'cargo',
        'division',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function requerimiento (){
        return $this->hasMany(Requerimiento::class,'id_req','id' );
    }

    public function calificacion (){
        return $this->hasMany(CalificacionTicketUsuario::class,'id_caltickuser','id' );
    }
    public function asignado (){
        return $this->hasMany(Asignado::class,'id_asignadp','id' );
    }
    public function rol (){
        return $this->belongsTo(Role::class,'id_rol','id' );
    }
    public function cargo (){
        return $this->belongsTo(Cargo::class,'id_cargo','id' );
    }
}
