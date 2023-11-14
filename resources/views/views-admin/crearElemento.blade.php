@extends('../plantilla-viewAdmin')

@section('contenido')
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
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sede" name="IDSEDE">
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
<button type="submit">Guardar</button>
</form>
@endsection
