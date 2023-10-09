@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/clientes.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Hero Section -->
<Section class="hero">
    <h1>Clientes</h1>
    <h5>Registro de clientes</h5>
</Section>

        <div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-membresia" name="tipoPlan" id="">
            <option value="P0" selected>Seleccione membresía</option>
            <option value="P1">Plan individual</option>
            <option value="P2">Plan pareja</option>
            </select>
            <a href="{{route('planpareja')}}"><button class="btn-buscar-filtro" onclick="cambiarTexto()">Buscar</button></a>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
                <div class="btn-crear-cliente">
                    <a href="{{route ('crearCliente')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
        </div>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-hover table align-middle">
                                        <thead class="encabezado-tabla align-middle">
                                            <tr>
                                            <th>Nombre</th>
                                            @if ($usuarios->first() && property_exists($usuarios->first(), 'name2'))
                                            <th>Nombre 2</th>
                                            @endif
                                            <th>Correo</th>
                                            @if ($usuarios->first() && property_exists($usuarios->first(), 'email2'))
                                            <th>Correo 2</th>
                                            @endif
                                            <th>Ciudad</th>
                                            <th>Dirección</th>
                                            <th>Membresía</th>
                                            <th>Precio membresía</th>
                                            <th>Duración membresía</th>
                                            <th>PLAN PAREJA</th>
                                            <th>Fecha inicio</th>
                                            <th>Fecha final</th>
                                            <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablaClientes"> 
                                            @foreach($usuarios as $usuario)
                                            <tr>
                                                <td class="td-usuario">{{ $usuario->name }}</td>
                                                @if (property_exists($usuario, 'name2') && $usuario->name2 !== null)
                                                <td class="td-usuario-2">{{ $usuario->name2 }}</td>
                                                @endif
                                                <td class="td-email">{{ $usuario->email }}</td>
                                                @if (property_exists($usuario, 'email2') && $usuario->email2 !== null)
                                                <td class="td-email-2">{{ $usuario->email2 }}</td>
                                                @endif
                                                <td>{{ $usuario->CIUDAD }}</td>
                                                <td>{{ $usuario->direccion }}</td>
                                                <td>{{ $usuario->NOMBREMEMBRESIA }}</td>
                                                <td>{{ $usuario->PRECIO }}</td>
                                                <td class="td-duracionmembresia">{{ $usuario->DURACIONMESES }}</td>
                                                <td class="td-planpareja">{{ $usuario->PLANPAREJA }}</td>
                                                <td>{{ $usuario->FECHAMEMBRESIAINICIO }}</td>
                                                <td>{{ $usuario->FECHAMEMBRESIAFINAL }}</td>
                                                <td class="td-acciones"><button><i class="fa-solid fa-user-pen"></i></button> <button><i class="fa-solid fa-user-minus"></i></button></td>
                                            </tr>
                                            <script>
                                                $(document).ready(function(){
                                                  $("#buscador").on("keyup", function() {
                                                    var value = $(this).val().toLowerCase();
                                                    $("#tablaClientes tr").filter(function() {
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