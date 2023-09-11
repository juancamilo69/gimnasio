<x-app-layout>

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/ropaHombre.css') }}">

<!-- Defautl Css -->
@extends('default')

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<div class="py-12 contenedor-mayor color-txt-semiblack">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <div class="p-6">
                    <!-- Hero Section -->
<Section class="hero">
    <h1>Reich gym hombres</h1>
    <h5>¡Compra tu ropa!</h5>
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
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-ropa-mujer row row-cols-1 row-cols-md-4 g-3" id="cardId">
    @foreach ($prendas as $prenda)
                    <div class="col col-sm-6">
                        <div class="card h-100 w-100" >
                        <img src="{{$prenda->IMGPRENDA1}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$prenda->NOMBRE}}</h5>
                            <p class="card-text-tipo">{{$prenda->TIPO}}</p>
                            <p class="card-text-color">{{$prenda->COLOR}}</p>
                            <div class="d-flex">
                            <P class="card-text card-text-precio mt-4">${{ number_format($prenda->PRECIO, 0, ',', '.') }}</P>
                            <button type="button" class="btn btn-dark btn-comprar ms-auto ">Detalles</button>
                            </div>
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
                </div>
            </div>
        </div>
    </div>

</x-app-layout>