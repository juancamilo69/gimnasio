<!-- Título web -->
<title>Ropa - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/ropaAdmin.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!-- Hero Section -->
<Section class="hero">
    <h5>Registro de Prendas</h5>
</Section>

        <div>
            <form action="">
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
                <div class="btn-crear-prenda">
                    <a href="{{route ('crearRopa')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
        </div>

    <div class="tabla-container-responsive table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table
                                    table-dark table-hover align-middle
                                    table-striped">
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
                                                <td>
                                                <span class="descripcion-corta">{{ Illuminate\Support\Str::limit($prenda->DESCRIPCION, $limit = 20, $end = '...') }}</span>

                                                    <span class="descripcion-completa" style="display:none;">{{ $prenda->DESCRIPCION }}</span> <button class="btn-ver-descripcion" data-toggle="modal" data-target="#modalDescripcion">Ver descripción</button>
                                                </td>
                                                <td>{{ $prenda->STOCK }}</td>
                                                <td>${{ number_format($prenda->PRECIO, 0, ',', '.') }}</td>
                                                <td>{{ $prenda->TALLA }}</td>
                                                <td>{{ $prenda->COLOR }}</td>
                                                <td>{{ $prenda->SEXO }}</td>
                                                <td>{{ $prenda->MATERIAL }}</td>
                                                <td>{{ $prenda->IMGPRENDA1 }}</td>
                                                <td>{{ $prenda->IMGPRENDA2 }}</td>
                                                <td>{{ $prenda->IMGPRENDA3 }}</td>
                                                <td class="td-acciones">
                                                <a href="{{ route('ropaAdmin.edit', $prenda->IDROPA) }}"><button><i class="fa-solid fa-user-pen"></i></button></a>
                                                <a href="{{route('eliminarRopa.destroy', $prenda->IDROPA)}}" onclick="return confirm('¿Seguro que quiere eliminar esta prenda?')"><button><i class="fa-solid fa-user-minus"></i></button></a></td>                                                
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

                        <!-- MODAL DESCRIPCIÓN -->
                        <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Descripción Completa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="descripcionModal" style="max-height: 300px; overflow-y: auto;"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="{{ asset('js/modal-desc.js') }}"></script>

@endsection