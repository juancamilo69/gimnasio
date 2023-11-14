@extends('../plantilla-viewAdmin')

@section('contenido')
<form action="{{ route('guardarMaquina') }}" method="POST">
@csrf 
<div class="container py-5">
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
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sede" name="IDSEDE">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Imágen máquina</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Imágen máquina" name="IMGMAQUINA">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Soporte</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Soporte" name="SOPORTE">
</div>
</div>
<button type="submit">Guardar</button>
</form>
@endsection
