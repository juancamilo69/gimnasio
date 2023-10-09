@extends('../plantilla-viewAdmin')

@section('contenido')
<form action="{{route('crearCliente.store')}}" method="POST">
<div class="container py-5">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" name="nombre">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Correo</label>
  <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Correo" name="correo">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Ciudad</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" name="ciudad">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Dirección</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Dirección" name="direccion">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Membresía</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Membresía" name="membresia">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Precio Membresía</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Precio Membresía" name="precioMembresia">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Duración Membresía</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Duración Membresía" name="duracionMembresia">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Plan pareja</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Plan pareja" name="planPareja">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Fecha Inicio</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Fecha Inicio" name="fechaInicio">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Fecha Fin</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Fecha Fin" name="fechaFin">
</div>
</div>
<button type="submit">Guardar</button>
</form>
@endsection
