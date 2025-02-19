<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_documento_id',
        'numero_documento',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'genero_id',
        'departamento_id',
        'municipio_id',
    ];

    // Relación con Departamento (Muchos pacientes pertenecen a un departamento)
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    // Relación con Municipio (Muchos pacientes pertenecen a un municipio)
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }

    // Relación con Tipo de Documento (Cada paciente tiene un tipo de documento)
    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id');
    }

    // Relación con Género (Cada paciente tiene un género)
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }
}

