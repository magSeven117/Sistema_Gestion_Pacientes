@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Lista de Pacientes</h1>

            <a href="{{ route('pacientes.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                + Agregar Paciente
            </a>

            @if(session('success'))
                <p class="text-green-600 font-semibold">{{ session('success') }}</p>
            @endif

            <div class="overflow-x-auto mt-4">
                <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-100 border-b">
                        <tr>
                            <th class="px-4 py-2 text-left">Documento</th>
                            <th class="px-4 py-2 text-left">Nombre</th>
                            <th class="px-4 py-2 text-left">Departamento</th>
                            <th class="px-4 py-2 text-left">Municipio</th>
                            <th class="px-4 py-2 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-2">{{ $paciente->numero_documento }}</td>
                                <td class="px-4 py-2">{{ $paciente->nombre1 }} {{ $paciente->apellido1 }}</td>
                                <td class="px-4 py-2">{{ $paciente->departamento->nombre }}</td>
                                <td class="px-4 py-2">{{ $paciente->municipio->nombre }}</td>
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="{{ route('pacientes.edit', $paciente) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                        Editar
                                    </a>
                                    <form method="POST" action="{{ route('pacientes.destroy', $paciente) }}" onsubmit="return confirm('¿Estás seguro de eliminar este paciente?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection