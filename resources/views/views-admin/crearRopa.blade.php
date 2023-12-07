<!-- Título web -->
<title>Crear Prendas - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/crearRopa.css') }}">

    <div class="form-content container mt-5">

    <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Prendas</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para añadir una prenda.</p>
    </div>

        <form class="row g-3 needs-validation" novalidate action="{{route('crearRopa.store')}}" method="POST">
            @csrf
            <div class="col-6">
              <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Tipo</label>
                <select id="validationCustom01" value="" required name="tipo">
                <option value="" disabled selected>Seleccione el tipo de prenda</option>
                  <option value="Camisetas">Camisetas</option>
                  <option value="Esqueletos">Esqueletos</option>
                  <option value="Camisetas Oversize">Camisetas Oversize</option>
                  <option value="Buzos">Buzos</option>
                  <option value="Otros">Otros</option>
                </select>
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="mb-3">
                <label for="validationCustom03" class="form-label">Descripción</label>
                <textarea type="text" id="validationCustom03" required name="descripcion"></textarea>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
            </div>
            <div class="mb-3">
                <label for="validationCustom05" class="form-label">Stock</label>
                <input type="number" class="form-control" id="validationCustom05" required name="stock" min="1">
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Precio</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required name="precio">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="mb-3">
                <label for="validationCustom05" class="form-label">Talla</label>
                <select id="validationCustom05" required name="talla">
                  <option value="" disabled selected>Seleccione la talla</option>
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            </div>
            <!-- Col-6 -->
            <div class="col-6">
              <div class="mb-3">
                  <label for="validationCustom05" class="form-label">Color</label>
                  <input type="text" class="form-control" id="validationCustom05" required name="color">
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
              </div>
              <div class="mb-3">
                  <label for="validationCustom05" class="form-label">Sexo</label>
                  <select id="validationCustom05" required name="sexo">
                  <option value="" disabled selected>Seleccione el sexo</option>
                  <option value="Mujer">Mujer</option>
                  <option value="Hombre">Hombre</option>
                </select>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
              </div>
              <div class="mb-3">
                  <label for="validationCustom05" class="form-label">Material</label>
                  <input type="text" class="form-control" id="validationCustom05" required name="material">
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
              </div>
              <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Imagen 1</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen1">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
              </div>
              <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Imagen 2</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen2">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
              </div>
              <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Imagen 3</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required name="imagen3">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
              </div>
            </div>
            <!-- Col-6 -->
            <div class="text-end col-12">
              <button class="btn btn-primary" type="submit">Crear</button>
            </div>
          </form>
    </div>
@endsection