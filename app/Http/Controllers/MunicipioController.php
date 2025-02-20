<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function getByDepartamento($departamento_id)
    {
        $municipios = Municipio::where('departamento_id', $departamento_id)->get();

        // Retorna los municipios en formato JSON para el AJAX
        return response()->json($municipios);
    }
}
