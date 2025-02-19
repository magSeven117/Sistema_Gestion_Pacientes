<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    // Un departamento tiene muchos municipios
    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'departamento_id');
    }

    // Un departamento tiene muchos pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'departamento_id');
    }
}
