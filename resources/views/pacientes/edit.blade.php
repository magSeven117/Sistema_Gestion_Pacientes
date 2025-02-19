@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">Editar Paciente</h1>

        <form method="POST" action="{{ route('pacientes.update', $paciente) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <!-- Número de Documento -->
                <div>
                    <label class="block text-gray-700">Número de Documento:</label>
                    <input type="text" name="numero_documento" value="{{ $paciente->numero_documento }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Nombre -->
                <div>
                    <label class="block text-gray-700">Nombre:</label>
                    <input type="text" name="nombre1" value="{{ $paciente->nombre1 }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Apellido -->
                <div>
                    <label class="block text-gray-700">Apellido:</label>
                    <input type="text" name="apellido1" value="{{ $paciente->apellido1 }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Tipo de Documento -->
                <div>
                    <label class="block text-gray-700">Tipo de Documento:</label>
                    <select name="tipo_documento_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @foreach($tiposDocumento as $tipo)
                            <option value="{{ $tipo->id }}" {{ $tipo->id == $paciente->tipo_documento_id ? 'selected' : '' }}>
                                {{ $tipo->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Género -->
                <div>
                    <label class="block text-gray-700">Género:</label>
                    <select name="genero_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @foreach($generos as $genero)
                            <option value="{{ $genero->id }}" {{ $genero->id == $paciente->genero_id ? 'selected' : '' }}>
                                {{ $genero->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Departamento -->
                <div>
                    <label class="block text-gray-700">Departamento:</label>
                    <select id="departamento" name="departamento_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" {{ $departamento->id == $paciente->departamento_id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Municipio -->
                <div>
                    <label class="block text-gray-700">Municipio:</label>
                    <select id="municipio" name="municipio_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @foreach($municipios as $municipio)
                            <option value="{{ $municipio->id }}" {{ $municipio->id == $paciente->municipio_id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Botón Guardar -->
            <div class="mt-4">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                    Actualizar Paciente
                </button>
            </div>
        </form>
    </div>

    <!-- AJAX para Carga de Municipios -->
    <script>
        document.getElementById('departamento').addEventListener('change', function() {
            let departamento_id = this.value;
            let municipioSelect = document.getElementById('municipio');
    
            if (departamento_id) {
                fetch(`/municipios/${departamento_id}`)
                    .then(response => response.json())
                    .then(data => {
                        municipioSelect.innerHTML = '<option value="">Seleccione un Municipio</option>';
                        data.forEach(municipio => {
                            municipioSelect.innerHTML += `<option value="${municipio.id}">${municipio.nombre}</option>`;
                        });
                    })
                    .catch(error => console.error('Error cargando municipios:', error));
            } else {
                municipioSelect.innerHTML = '<option value="">Seleccione un Municipio</option>';
            }
        });
    </script>
@endsection
