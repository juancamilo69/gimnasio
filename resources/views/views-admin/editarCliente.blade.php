@extends('../plantilla-viewAdmin')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/formularios/crearMembresia.css') }}">
<link rel="stylesheet" href="{{ asset('css/formularios/editarCliente.css') }}">

<div class="container mt-5">

    <div class="mb-4">
        <h2 class="text-center">Formulario de Edición de Cliente</h2>
        <p class="lead text-center">Edita los siguientes campos para actualizar la información del cliente.</p>
    </div>

    <form action="{{ route('actualizarCliente', $membresia->IDMEMBRESIA) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="name" value="{{ $usuario->name }}" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" placeholder="Correo" name="email" value="{{ $usuario->email }}" required>
        </div>

        <div class="mb-3">
            <label for="sede" class="form-label">Sede</label>
            <select class="form-select" id="sede" name="sede">
                @forelse ($sedes as $nomSede)
                    <option value="{{ $nomSede->IDSEDE }}" {{ $nomSede->IDSEDE == $usuario->IDSEDE ? 'selected' : '' }}>{{ $nomSede->NOMBRE }}</option>
                @empty
                @endforelse
            </select>
        </div>

        @if($membresia->IDTIPOSMEMBRESIAS == 6)
        <!-- Agregar campos del cliente 2 -->
        <div class="mb-3">
            <label for="nombre2" class="form-label">Nombre Cliente 2</label>
            <input type="text" class="form-control" id="nombre2" placeholder="Nombre Cliente 2" name="name2" value="{{ optional($usuario2)->name }}" required>
        </div>

        <div class="mb-3">
            <label for="correo2" class="form-label">Correo Electrónico Cliente 2</label>
            <input type="email" class="form-control" id="correo2" placeholder="Correo Cliente 2" name="email2" value="{{ optional($usuario2)->email }}" required>
        </div>

        <div class="mb-3">
            <label for="sede2" class="form-label">Sede Cliente 2</label>
            <select class="form-select" id="sede2" name="sede2">
                @forelse ($sedes as $nomSede)
                    <option value="{{ $nomSede->IDSEDE }}" {{ optional($usuario2)->IDSEDE == $nomSede->IDSEDE ? 'selected' : '' }}>{{ $nomSede->NOMBRE }}</option>
                @empty
                @endforelse
            </select>
        </div>
        @endif

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo membresia</label>
            <select class="form-select" name="IDTIPOSMEMBRESIAS">
                @forelse ($membresiasData as $tipoMem)
                    <option value="{{ $tipoMem->IDTIPOSMEMBRESIAS }}" {{ $tipoMem->IDTIPOSMEMBRESIAS == $membresia->IDTIPOSMEMBRESIAS ? 'selected' : '' }}>{{ $tipoMem->NOMBREMEMBRESIA }}</option>
                @empty
                @endforelse
            </select>
        </div>

        <div class="mb-3">
            <label for="fechamembresiainicio" class="form-label">Fecha inicio</label>
            <input type="date" class="form-control" id="fechamembresiainicio" name="fechamembresiainicio" value="{{ $membresia->FECHAMEMBRESIAINICIO }}" required>
        </div>

        <div class="mb-3">
            <label for="fechamembresiafinal" class="form-label">Fecha fin</label>
            <input type="date" class="form-control" id="fechamembresiafinal" name="fechamembresiafinal" value="{{ $membresia->FECHAMEMBRESIAFINAL }}" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>

@endsection
