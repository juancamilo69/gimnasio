@extends('../plantilla-viewAdmin')

@section('contenido')
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Hero Section -->
<Section class="hero">
    <h1>Máquinas</h1>
    <h5>Registro de máquinas</h5>
</Section>

        <div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-sedeMaquinas" name="seleccionarSuplemento" id="">
            <option value="S0" selected>Seleccione suplemento</option>
            <option value="Creatinas">Creatinas</option>
            <option value="Proteinas">Proteínas</option>
            <option value="Aminoacidos">Aminoácidos</option>
            <option value="Boosters">Boosters</option>
            <option value="otrosProductos">Sede Barbosa</option>
            </select>
            <a href=""><button class="btn-buscar-filtro">Buscar</button></a>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4" id="cardId">
    @foreach ($suplementos as $suplemento)
                    <div class="col col-sm-6">
                        <div class="card h-100 w-100" >
                        <img src="{{$suplemento->IMGMAQUINA}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$suplemento->NOMBRE}}</h5>
                            <hr class="hr hr-blurry" />
                            <P class="card-text card-text-direccion">{{$suplemento->PRECIO}}</P>
                            <a href=""><button type="button" class="btns btn btn-dark">COMPRAR</button></a>
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