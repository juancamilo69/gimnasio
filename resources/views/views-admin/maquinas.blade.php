@extends('../plantilla-viewAdmin')

@section('contenido')
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom Bootstrap -->
<link rel="stylesheet" href="{{ asset('css/maquinas.css') }}">
<!-- Hero Section -->
<Section class="hero">
    <h5>Registro de máquinas</h5>
</Section>

        <div>
            <form action="">
            <select class="select-sedeMaquinas" name="seleccionarSedeMaquinas" id="">
            <option value="S0" selected>Seleccione sede</option>
            <option value="S1">Sede Muiscas</option>
            <option value="S2">Sede Centro</option>
            <option value="S3">Sede Barbosa</option>
            </select>
            <a href=""><button class="btn-buscar-filtro"><i class="fa-solid fa-magnifying-glass"></i></button></a>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
                <div class="btn-crear-maquina">
                    <a href="{{route ('crearMaquinaForm')}}"><button><i class="fa-solid fa-user-plus"></i></button></a>
                </div>
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="cardId">
    @foreach ($maquinas as $maquina)
        <div class="col col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 w-100 text-white bg-dark">
                <img src="{{$maquina->IMGMAQUINA}}" class="card-img card-img-top img-fixed-size" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$maquina->NOMBREMAQUINA}}</h5>
                    <h2 class="card-text-grupomuscular">{{$maquina->GRUPOMUSCULAR}}</h2>
                    <P class="card-text card-text-fechacompra">{{$maquina->FECHACOMPRA}}</P>
                    <hr class="hr hr-blurry" />
                    <P class="card-text card-text-nombresede">{{$maquina->nombreSede}}</P>
                    <P class="card-text card-text-ciudad">{{$maquina->CIUDAD}}</P>
                    <P class="card-text card-text-direccion">{{$maquina->DIRECCION}}</P>
                    <div class="btns-card">
                        <a href=""><button type="button" class="btns btn btn-light">{{$maquina->SOPORTE}}</button></a>
                        <a href="{{ route('maquinas.edit', $maquina->IDEQUIPO) }}"><button type="button" class="btns btn btn-light">Editar</button></a>
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
