<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'correo_electronico', 'contraseña', 'rol'];

    public function estudiante()
    {
        return $this->hasOne(Estudiante::class);
    }

    public function profesor()
    {
        return $this->hasOne(Profesor::class);
    }

    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }
}
