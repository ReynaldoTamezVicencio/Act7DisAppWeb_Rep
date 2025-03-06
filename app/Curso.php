<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['clave', 'nombre', 'caratula', 'contenido', 'kit_robotica'];

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_curso');
    }
}
