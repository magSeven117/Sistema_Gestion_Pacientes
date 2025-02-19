<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    // Un género tiene muchos pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'genero_id');
    }
}
