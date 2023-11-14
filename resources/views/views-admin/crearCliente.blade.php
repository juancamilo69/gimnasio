@extends('../plantilla-viewAdmin')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/formularios/crearMembresia.css') }}">

<div class="container mt-5">

  <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Cliente</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para crear un nuevo cliente.</p>
  </div>

  <form action="{{ route('guardarCliente') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="name" required>
    </div>

    <div class="mb-3">
      <label for="sede" class="form-label">Sede</label>
      <select class="form-select" id="sede" name="IDSEDE">
          @forelse ($sedes as $nomSede)
              <option value="{{$nomSede->IDSEDE}}">{{$nomSede->NOMBRE}}</option>
          @empty
          @endforelse
        </select>
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="correo" placeholder="Correo" name="email" required>
    </div>

    <div class="mb-3">
      <label for="contrasena" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="password" required>
    </div>

    <div class="text-end"> 
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>
@endsection
