<!-- Título web -->
<title>Elementos - Panel de administración - Reich gym</title>

@extends('../plantilla-viewAdmin')

@section('contenido')
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/elementos.css') }}">

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<Section class="hero">
    <h5>Registro de elementos</h5>
</Section>

        <div>
            <form action="">
            <select class="select-sedeElemento" name="seleccionarSedeElementos" id="">
            <option value="S0" selected>Seleccione sede</option>
            <option value="S1">Sede Muiscas</option>
            <option value="S2">Sede Centro</option>
            <option value="S3">Sede Barbosa</option>
            </select>
            <a href=""><button class="btn-buscar-filtro"><i class="fa-solid fa-magnifying-glass"></i></button></a>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
                <div class="btn-crear-elemento">
                    <a href="{{route ('crearElementoForm')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="cardId">
    @foreach ($elementos as $elemento)
        <div class="col col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 w-100 text-white bg-dark">
                <img src="{{$elemento->IMGELEMENTO}}" class="card-img-top img-fixed-size" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$elemento->nombreElemento}}</h5>
                    <h2 class="card-text-tipo">{{$elemento->TIPO}}</h2>
                    <p class="card-text card-text-uso">{{$elemento->USO}}</p>
                    <P class="card-text card-text-fechacompra">{{$elemento->FECHACOMPRA}}</P>
                    <hr class="hr hr-blurry" />
                    <P class="card-text card-text-nombresede">{{$elemento->nombreSede}}</P>
                    <P class="card-text card-text-ciudad">{{$elemento->CIUDAD}}</P>
                    <P class="card-text card-text-direccion">{{$elemento->DIRECCION}}</P>
                    <div class="btns-card">
                    <a href=""><button type="button" class="btns btn btn-light">{{$elemento->SOPORTE}}</button></a>
                    <a href="{{ route('elementos.edit', $elemento->IDELEMENTO) }}"><button type="button" class="btns btn btn-light btn-editar">Editar</button></a>
                    <button type="button" class="btns btn btn-light btn-eliminar" onclick="confirmDelete('{{route('elementos.destroy', $elemento->IDELEMENTO)}}')">Eliminar</button>
                        <script>
                        function confirmDelete(url) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: '¿Seguro que quiere eliminar este elemento?',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Sí, eliminarlo'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = url;
                                }
                            });
                        }
                    </script>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    $(document).ready(function(){
        $("#buscador").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#cardId div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

                
@endsection