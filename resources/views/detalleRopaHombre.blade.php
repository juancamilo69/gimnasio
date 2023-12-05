<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/general.css') }}">
<link rel="stylesheet" href="{{ asset('css/detalleRopaHombre.css') }}">
<!-- Defautl Css -->
@extends('default')

{{-- Carousel --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm" style="border-radius: 14px;">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contenedor-producto">
                            <div class="contenedor-img-producto">
                                <img src="{{$prenda->IMGPRENDA1}}" class="card-img-top img-fixed-size" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contenedor-producto">
                            <div class="contenedor-info-producto">
                                <h2 class="nombre-producto">{{ $prenda->NOMBRE }}</h2>
                                <h3>{{ $prenda->TIPO }}<span> | </span>{{ $prenda->TALLA }}</h3>
                                <h3>{{ $prenda->COLOR }}<span> | </span>{{ $prenda->MATERIAL }}</h3>
                                <p>{{ $prenda->DESCRIPCION }}</p>
                                <h2 class="precio-producto">{{ number_format($prenda->PRECIO, 0, ',', '.') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

</x-app-layout>
