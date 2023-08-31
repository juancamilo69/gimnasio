@extends('../plantilla-viewAdmin')

@section('contenido')
    <div>
        <form action="">
        <h1>Buscar por:</h1>
        <select name="tipoPlan" id="">
        <option value="P0" selected>Seleccione membresía</option>
        <option value="P1">Plan individual</option>
        <option value="P2">Plan pareja</option>
        </select>
        <a href="{{route('planpareja')}}"><button>Buscar</button></a>
        </form>

    </div>
    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-hover table align-middle">
                                        <thead class="encabezado-tabla">
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
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            @foreach($usuarios as $usuario)
                                            <tr>
                                                <td>{{ $usuario->name }}</td>
                                                @if (property_exists($usuario, 'name2') && $usuario->name2 !== null)
                                                <td>{{ $usuario->name2 }}</td>
                                                @endif
                                                <td>{{ $usuario->email }}</td>
                                                @if (property_exists($usuario, 'email2') && $usuario->email2 !== null)
                                                <td>{{ $usuario->email2 }}</td>
                                                @endif
                                                <td>{{ $usuario->CIUDAD }}</td>
                                                <td>{{ $usuario->direccion }}</td>
                                                <td>{{ $usuario->NOMBREMEMBRESIA }}</td>
                                                <td>{{ $usuario->PRECIO }}</td>
                                                <td>{{ $usuario->DURACIONMESES }}</td>
                                                <td>{{ $usuario->PLANPAREJA }}</td>
                                                <td>{{ $usuario->FECHAMEMBRESIAINICIO }}</td>
                                                <td>{{ $usuario->FECHAMEMBRESIAFINAL }}</td> 
                                            </tr>
                                            <script>
                                                $(document).ready(function(){
                                                  $("#buscador").on("keyup", function() {
                                                    var value = $(this).val().toLowerCase();
                                                    $("#tablaLibros tr").filter(function() {
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