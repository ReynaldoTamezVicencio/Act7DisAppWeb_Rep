<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

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
