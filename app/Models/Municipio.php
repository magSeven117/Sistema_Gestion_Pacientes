<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'departamento_id'];

    // Un municipio pertenece a un departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    // Un municipio tiene muchos pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'municipio_id');
    }
}
