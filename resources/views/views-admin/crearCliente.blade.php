@extends('../plantilla-viewAdmin')

@section('contenido')
<form action="{{ route('guardarCliente') }}" method="POST">
@csrf 
<div class="container py-5">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" name="name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Sede</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sede" name="IDSEDE">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Correo</label>
  <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Correo" name="email">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
  <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" name="password">
</div>
</div>
<button type="submit">Guardar</button>
</form>
@endsection
