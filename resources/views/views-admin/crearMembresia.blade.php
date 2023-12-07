<!-- Título web -->
<title>Asignar Membresías - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/formularios/crearCliente.css') }}">

<div class="container mt-5">

  <div class="mb-4">
    <h2 class="text-center">Formulario para Asignar Membresia</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para asignarle una membresia a un cliente.</p>
  </div>

  <form action="{{ route('guardarMembresia') }}" method="POST">
    @csrf 

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">ID cliente 1</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID cliente 1" name="id">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">ID cliente 2</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ID cliente 2" name="id2">
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
      <select name="MONTOPAGO" class="form-control">
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
