@extends('../plantilla-viewAdmin')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/formularios/crearMembresia.css') }}">
<link rel="stylesheet" href="{{ asset('css/formularios/editarCliente.css') }}">

<div class="container mt-5">

  <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Cliente</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para crear un nuevo cliente.</p>
  </div>

  <form action="{{route('actualizarCliente', ['id' => $cliente->id])}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="name" value="{{$cliente->name}}" required>
    </div>

    <div class="mb-3">
      <label for="sede" class="form-label">Sede</label>
      <select class="form-select" id="sede" name="sede">
          @forelse ($sedes as $nomSede)
              <option value="{{$nomSede->IDSEDE}}" {{$nomSede->IDSEDE == $cliente->IDSEDE ? 'selected' : ''}}>{{$nomSede->NOMBRE}}</option>
          @empty
          @endforelse
        </select>
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="correo" placeholder="Correo" name="email" value="{{$cliente->email}}" required>
    </div>

    <div class="mb-3">
      <label for="contrasena" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="password" value="{{$cliente->password}}" required>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Tipo membresia</label>
      <select class="form-select" name="IDTIPOSMEMBRESIAS">
        @forelse ($membresiasData as $tipoMem)
            <option value="{{$tipoMem->IDTIPOSMEMBRESIAS}}">{{$tipoMem->NOMBREMEMBRESIA}}</option>
        @empty
        @endforelse
      </select>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Fecha inicio</label>
      <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Fecha inicio" name="FECHAMEMBRESIAINICIO">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Fecha fin</label>
      <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Fecha fin" name="FECHAMEMBRESIAFINAL">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Monto pago</label>
      <select name="MONTOPAGO" class="form-control" >
        @forelse ($membresiasData as $tipoMem)
            <option value="{{$tipoMem->IDTIPOSMEMBRESIAS}}">{{$tipoMem->PRECIO}}</option>
        @empty
        @endforelse
      </select> 
    </div>

    <div class="text-end"> 
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>
@endsection
