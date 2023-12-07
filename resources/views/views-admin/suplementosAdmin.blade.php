<!-- Título web -->
<title>Suplementos - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/suplementosAdmin.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!-- Hero Section -->
<Section class="hero">
    <h5>Registro de suplementos</h5>
</Section>

<div>
            <form action="">
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
                <div class="btn-crear-suplemento">
                    <a href="{{route ('crearSuplementos')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
            
        </div>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-dark table-hover table align-middle table-striped">
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
                                            <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablaSuplementos"> 
                                            @foreach($suplementos as $suplemento)
                                            <tr>
                                                <td>{{ $suplemento->NOMBRE }}</td>
                                                <td>{{ $suplemento->MARCA }}</td>
                                                <td>{{ $suplemento->TIPO }}</td>
                                                <td>
                                                <span class="descripcion-corta">{{ Illuminate\Support\Str::limit($suplemento->DESCRIPCION, $limit = 20, $end = '...') }}</span>

                                                    <span class="descripcion-completa" style="display:none;">{{ $suplemento->DESCRIPCION }}</span> <button class="btn-ver-descripcion" data-toggle="modal" data-target="#modalDescripcion">Ver descripción</button>
                                                </td>
                                                <td>{{ $suplemento->STOCK }}</td>
                                                <td>${{ number_format($suplemento->PRECIO, 0, ',', '.') }}</td>
                                                <td>{{ $suplemento->IMGSUPLEMENTO }}</td>
                                                <td>{{ $suplemento->IMGTABLANUTRICIONAL }}</td> 
                                                <td class="td-acciones">              
                                                <a href="{{ route('suplementosAdmin.edit', $suplemento->IDSUPLEMENTO) }}"><button><i class="fa-solid fa-user-pen"></i></button></a>
                                                <a href="{{route('suplementos.destroy', $suplemento->IDSUPLEMENTO)}}" onclick="return confirm('¿Seguro que quiere eliminar este suplemento?')"><button><i class="fa-solid fa-user-minus"></i></button></a></td>
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