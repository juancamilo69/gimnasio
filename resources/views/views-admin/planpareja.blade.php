<!-- Título web -->
<title>Clientes en Plan pareja - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                    <table id="table" class="table table-hover table align-middle">
                                        <thead class="encabezado-tabla">
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Nombre 2</th>
                                            <th>Correo</th>
                                            <th>Correo 2</th>
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
                                                <td>{{ $usuario->name2 }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>{{ $usuario->email2 }}</td>
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