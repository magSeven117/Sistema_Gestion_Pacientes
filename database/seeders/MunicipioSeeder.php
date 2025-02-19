<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $municipios = [
            1 => ['Ibagué', 'Espinal'], // Tolima
            2 => ['Bogotá', 'Soacha'], // Cundinamarca
            3 => ['Medellín', 'Envigado'], // Antioquia
            4 => ['Cali', 'Palmira'], // Valle
            5 => ['Bucaramanga', 'Floridablanca'], // Santander
        ];

        foreach ($municipios as $departamento_id => $nombres) {
            foreach ($nombres as $nombre) {
                Municipio::create([
                    'nombre' => $nombre,
                    'departamento_id' => $departamento_id,
                ]);
            }
        }
    }
}
