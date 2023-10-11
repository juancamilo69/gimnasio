@extends('../plantilla-viewAdmin')

@section('contenido')
    <div>
        <form class="row g-3 needs-validation" novalidate action="{{route('crearRopa.store')}}" method="POST">
            @csrf
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="tipo">
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="validationCustom03" required name="descripcion">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Stock</label>
                <input type="text" class="form-control" id="validationCustom05" required name="stock">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Precio</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required name="precio">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Talla</label>
                <input type="text" class="form-control" id="validationCustom05" required name="talla">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Color</label>
                <input type="text" class="form-control" id="validationCustom05" required name="color">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Sexo</label>
                <input type="text" class="form-control" id="validationCustom05" required name="sexo">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Material</label>
                <input type="text" class="form-control" id="validationCustom05" required name="material">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Imagen 1</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen1">
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Imagen 2</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen2">
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Imagen 3</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen3">
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Crear</button>
            </div>
          </form>
    </div>
@endsection