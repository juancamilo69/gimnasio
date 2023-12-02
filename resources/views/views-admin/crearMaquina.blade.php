@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/crearMaquina.css') }}">
<div class="form-content container mt-5">

    <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Máquinas</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para añadir una máquina.</p>
    </div>

  <form class="row g-3 needs-validation" action="{{ route('guardarMaquina') }}" method="POST">
@csrf 
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre máquina</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre máquina" name="NOMBREMAQUINA">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Grupo muscular</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Grupo muscular" name="GRUPOMUSCULAR">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Fecha compra</label>
  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Fecha compra" name="FECHACOMPRA">
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
  <label for="formGroupExampleInput2" class="form-label">Imágen máquina</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Imágen máquina" name="IMGMAQUINA">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Soporte</label>
  <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Soporte" name="SOPORTE">
</div>

<div class="text-end col-12">
  <button class="btn btn-primary" type="submit">Crear</button>
</div>

</form>
</div>

@endsection
