<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Genero;
use App\Models\Municipio;
use App\Models\Paciente;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::with('departamento', 'municipio', 'tipoDocumento', 'genero')->get();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        $tiposDocumento = TipoDocumento::all();
        $generos = Genero::all();
        return view('pacientes.create', compact('departamentos', 'tiposDocumento', 'generos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required|unique:pacientes,numero_documento',
            'nombre1' => 'required|string',
            'apellido1' => 'required|string',
            'tipo_documento_id' => 'required',
            'genero_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente registrado correctamente.');
    }

    public function edit(Paciente $paciente)
    {
        $tiposDocumento = TipoDocumento::all();
        $generos = Genero::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::where('departamento_id', $paciente->departamento_id)->get(); // Municipios del departamento del paciente

        return view('pacientes.edit', compact('paciente', 'tiposDocumento', 'generos', 'departamentos', 'municipios'));
    }



    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'numero_documento' => 'required|unique:pacientes,numero_documento,' . $paciente->id,
            'nombre1' => 'required|string',
            'apellido1' => 'required|string',
            'tipo_documento_id' => 'required',
            'genero_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente.');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado correctamente.');
    }
}
