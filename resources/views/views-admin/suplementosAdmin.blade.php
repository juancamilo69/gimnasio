@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/suplementosAdmin.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Hero Section -->
<Section class="hero">
    <h1>Suplementos</h1>
    <h5>Registro de suplementos</h5>
</Section>

<div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-suplementos" name="seleccionarSuplemento" id="">
            <option value="S0" selected>Seleccione suplemento</option>
            <option value="Creatina">Creatinas</option>
            <option value="Proteina">Proteínas</option>
            <option value="Aminoacidos">Aminoácidos</option>
            <option value="Boosters">Boosters</option>
            <option value="otrosProductos">Otros</option>
            </select>
            <button class="btn-buscar-filtro"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
            </div>
        </div>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-hover table align-middle">
                                        <thead class="encabezado-tabla align-middle">
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Marca</th>
                                            <th>Tipo</th>
                                            <th>Descripción</th>
                                            <th>Stock</th>
                                            <th>Precio</th>
                                            <th>Imágen portada</th>
                                            <th>Imágen tabla nutricional</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablaSuplementos"> 
                                            @foreach($suplementos as $suplemento)
                                            <tr>
                                                <td>{{ $suplemento->NOMBRE }}</td>
                                                <td>{{ $suplemento->MARCA }}</td>
                                                <td>{{ $suplemento->TIPO }}</td>
                                                <td>{{ $suplemento->DESCRIPCION }}</td>
                                                <td>{{ $suplemento->STOCK }}</td>
                                                <td>{{ $suplemento->PRECIO }}</td>
                                                <td>{{ $suplemento->IMGSUPLEMENTO }}</td>
                                                <td>{{ $suplemento->IMGTABLANUTRICIONAL }}</td>
                                            </tr>
                                            <script>
                                                $(document).ready(function(){
                                                  $("#buscador").on("keyup", function() {
                                                    var value = $(this).val().toLowerCase();
                                                    $("#tablaSuplementos tr").filter(function() {
                                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                    });
                                                  });
                                                });
                                                </script>
                                            @endforeach
                                        </tbody>
                                    </table>
                        </div>
@endsection