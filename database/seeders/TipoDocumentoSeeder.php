<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tipos = ['Cédula de Ciudadanía', 'Tarjeta de Identidad'];

        foreach ($tipos as $nombre) {
            TipoDocumento::create(['nombre' => $nombre]);
        }
    }
}
