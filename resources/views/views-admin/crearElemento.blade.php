<!-- Título web -->
<title>Crear Elementos - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/crearElemento.css') }}">

<div class="form-content container mt-5">

    <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Elementos</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para añadir un elemento.</p>
    </div>

  <form action="{{ route('guardarElemento') }}" method="POST">
  @csrf 
  <div class="container py-5">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nombre elemento</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre elemento" name="NOMBRE">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tipo" name="TIPO">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Uso</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Uso" name="USO">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Sede</label>
    <select class="form-select" id="sede" name="IDSEDE">
      @forelse ($sedes as $nomSede)
          <option value="{{$nomSede->IDSEDE}}">{{$nomSede->NOMBRE}}</option>
      @empty
      @endforelse
    </select>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Fecha Compra</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Fecha compra" name="FECHACOMPRA">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Imágen elemento</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Imágen elemento" name="IMGELEMENTO">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Soporte</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Soporte" name="SOPORTE">
  </div>
  </div>
  <div class="text-end col-12">
              <button class="btn btn-primary" type="submit">Crear</button>
            </div>
  </form>
</div>


@endsection
