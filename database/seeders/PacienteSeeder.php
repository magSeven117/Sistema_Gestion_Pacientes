<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $pacientes = [
            ['tipo_documento_id' => 1, 'numero_documento' => '10000001', 'nombre1' => 'Juan', 'apellido1' => 'Pérez', 'genero_id' => 1, 'departamento_id' => 1, 'municipio_id' => 1],
            ['tipo_documento_id' => 1, 'numero_documento' => '10000002', 'nombre1' => 'María', 'apellido1' => 'López', 'genero_id' => 2, 'departamento_id' => 2, 'municipio_id' => 3],
            ['tipo_documento_id' => 2, 'numero_documento' => '10000003', 'nombre1' => 'Carlos', 'apellido1' => 'Gómez', 'genero_id' => 1, 'departamento_id' => 3, 'municipio_id' => 5],
            ['tipo_documento_id' => 2, 'numero_documento' => '10000004', 'nombre1' => 'Ana', 'apellido1' => 'Martínez', 'genero_id' => 2, 'departamento_id' => 4, 'municipio_id' => 7],
            ['tipo_documento_id' => 1, 'numero_documento' => '10000005', 'nombre1' => 'Luis', 'apellido1' => 'Ramírez', 'genero_id' => 1, 'departamento_id' => 5, 'municipio_id' => 9],
        ];

        foreach ($pacientes as $paciente) {
            Paciente::create($paciente);
        }
    }
}
