<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipos_documento'; // Asegura que el nombre sea correcto
    protected $fillable = ['nombre'];

    // Un tipo de documento tiene muchos pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'tipo_documento_id');
    }
}


