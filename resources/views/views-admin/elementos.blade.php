@extends('../plantilla-viewAdmin')

@section('contenido')
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/elementos.css') }}">

<Section class="hero">
    <h1>Elementos</h1>
    <h5>Registro de elementos</h5>
</Section>

        <div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-sedeElemento" name="seleccionarSedeElementos" id="">
            <option value="S0" selected>Seleccione sede</option>
            <option value="S1">Sede Muiscas</option>
            <option value="S2">Sede Centro</option>
            <option value="S3">Sede Barbosa</option>
            </select>
            <a href=""><button class="btn-buscar-filtro">Buscar</button></a>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4" id="cardId">
@foreach ($elementos as $elemento)
                <div class="col col-sm-6">
                    <div class="card h-100 w-100">
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
                        <a href=""><button type="button" class="btns btn btn-dark">{{$elemento->SOPORTE}}</button></a>
                    </div>
                    </div>
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
                @endforeach
</div>
                
@endsection