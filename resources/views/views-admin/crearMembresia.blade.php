@extends('../plantilla-viewAdmin')

@section('contenido')
<form action="{{ route('guardarMembresia') }}" method="POST">
@csrf 
<div class="container py-5">
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
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tipo membresia" name="IDTIPOSMEMBRESIAS">
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
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Monto pago" name="MONTOPAGO">
</div>
</div>
<button type="submit">Guardar</button>
</form>
@endsection
