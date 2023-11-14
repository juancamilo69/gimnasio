@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/crearSuplementos.css') }}">

    <div class="form-content container mt-5">

    <div class="mb-4">
    <h2 class="text-center">Formulario de Creación de Suplementos</h2>
    <p class="lead text-center">Por favor, completa los siguientes campos para añadir un suplemento.</p>
    </div>

        <form class="row g-3 needs-validation" novalidate action="{{route('crearSuplementos.store')}}" method="POST">
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
                <label for="validationCustom01" class="form-label">Marca</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required name="marca">
                <div class="valid-feedback">
                  Looks good!
                </div>
            </div>
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Tipo</label>
                <select id="validationCustom01" value="" required name="tipo">
                <option value="" disabled selected>Seleccione el tipo de suplemento</option>
                  <option value="Creatina">Creatina</option>
                  <option value="Proteina">Proteína</option>
                  <option value="Aminoacidos">Aminoácidos</option>
                  <option value="Boosters">Boosters</option>
                  <option value="Suplementos">Suplementos</option>
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
            </div>
            <!-- Col-6 -->
            <div class="col-6">
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
                              <label for="validationCustom02" class="form-label">Imagen Suplento</label>
                              <input type="text" class="form-control" id="validationCustom02" value="" required name="imgSuplemento">
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="validationCustom02" class="form-label">Imagen tabla nutricional</label>
                              <input type="text" class="form-control" id="validationCustom02" value="" required name="imgTablaNutricion">
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