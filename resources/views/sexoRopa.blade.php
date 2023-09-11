<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/general.css') }}">
<link rel="stylesheet" href="{{ asset('css/sexoRopa.css') }}">
<!-- Defautl Css -->
@extends('default')

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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="contenedor-seleccionar-sexo">

                <a href="{{ route('ropaMujer') }}">
                <div class="card card-sexo-mujer text-bg-dark">
                <img src="{{ asset('images/banner/banner-girl1.jpg') }}" class="card-img img-fixed-size" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Mujer</h5>
                </div>
                </div>
                </a>

                <a href="{{ route('ropaHombre') }}"> 
                <div class="card card-sexo-hombre text-bg-dark">
                <img src="{{ asset('images/banner/banner1.jpg') }}" class="card-img img-fixed-size" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Hombre</h5>
                </div>
                </div>
                </a>


                </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>