@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/ropaAdmin.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Hero Section -->
<Section class="hero">
    <h1>Ropa</h1>
    <h5>Registro de Prendas</h5>
</Section>

        <div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-prendas" name="seleccionarRopa" id="">
            <option value="S0" selected>Seleccione ropa</option>
            <option value="Camisetas">Camisetas</option>
            <option value="Esqueletos">Esqueletos</option>
            <option value="Camisetas Oversize">Camisetas Oversize</option>
            <option value="Buzos">Buzos</option>
            <option value="Otros">Otros</option>
            </select>
            <button class="btn-buscar-filtro"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
                <div class="btn-crear-cliente">
                    <a href="{{route ('crearRopa')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
        </div>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-hover table align-middle">
                                        <thead class="encabezado-tabla align-middle">
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Tipo</th>
                                            <th>Descripción</th>
                                            <th>Stock</th>
                                            <th>Precio</th>
                                            <th>Talla</th>
                                            <th>Color</th>
                                            <th>Sexo</th>
                                            <th>Material</th>
                                            <th>IMGPRENDA1</th>
                                            <th>IMGPRENDA2</th>
                                            <th>IMGPRENDA3</th>
                                            <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablaRopa"> 
                                            @foreach($prendas as $prenda)
                                            <tr>
                                                <td>{{ $prenda->NOMBRE }}</td> 
                                                <td>{{ $prenda->TIPO }}</td>
                                                <td>{{ $prenda->DESCRIPCION }}</td>
                                                <td>{{ $prenda->STOCK }}</td>
                                                <td>${{ number_format($prenda->PRECIO, 0, ',', '.') }}</td>
                                                <td>{{ $prenda->TALLA }}</td>
                                                <td>{{ $prenda->COLOR }}</td>
                                                <td>{{ $prenda->SEXO }}</td>
                                                <td>{{ $prenda->MATERIAL }}</td>
                                                <td>{{ $prenda->IMGPRENDA1 }}</td>
                                                <td>{{ $prenda->IMGPRENDA2 }}</td>
                                                <td>{{ $prenda->IMGPRENDA3 }}</td>
                                                <td class="td-acciones"><button><i class="fa-solid fa-user-pen"></i></button> <a href="{{route('eliminarRopa.destroy', $prenda->IDROPA)}}" onclick="return confirm('¿Seguro que quiere eliminar esta prenda?')"><button><i class="fa-solid fa-user-minus"></i></button></a></td>                                                
                                            </tr>
                                            <script>
                                                $(document).ready(function(){
                                                  $("#buscador").on("keyup", function() {
                                                    var value = $(this).val().toLowerCase();
                                                    $("#tablaRopa tr").filter(function() {
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