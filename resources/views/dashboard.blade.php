<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/general.css') }}">
<!-- Defautl Css -->
@extends('default')

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="texto-bienvenido font-semibold text-gray-800 leading-tight">
            {{ __('Bienvenido/a ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="hero-section conatiner-fluid" style="position: relative;">
        <img src="{{ asset('images/banner/banner1.jpg') }}" alt="" class="img-ajustable1">
        <div class="texto-hero">
            <h1>EL IMPERIO DE LA DISCIPLINA</h1>
        </div>
        <div class="mouse">
            <div class="scroll"></div>
          </div>
    </div>
    
    <!-- Membresias -->
    <div class="contenedor-body-box">
       <div class="membresias-card max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="contenedor-titulos-cards container">
            <h3>Nuestros</h3>
            <h2>Planes</h2>
            </section>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4">            
                <!-- CARD MEMBRESÍAS -->
                @foreach ($membresiasData as $membresiasDatas)
                <div class="col">
                    <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{$membresiasDatas->NOMBREMEMBRESIA}}</h5>
                        <h2>{{$membresiasDatas->PRECIO}}</h2>
                        <p class="card-text">{{$membresiasDatas->DESCRIPCION}}</p>
                        <button type="button" class="btns">Adquirir</button>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Enunciado el imperio de la disciplina -->
    <section class="section-imperio">
        <div class="contenido-imperio container">
            <div class="row">
                <div class="col-numero col-12 col-sm-12 col-md-12 col-lg-3">
                    <h2>01</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                <h3>El imperio de la <span>disciplina</span></h3>
                <p>¡Bienvenidos al sitio web de Reich Gym!
                    En Reich Gym, nuestra misión es ayudarte a alcanzar tus metas de acondicionamiento 
                    físico y salud. Nuestro equipo de entrenadores altamente capacitados está comprometido
                    para brindarte la mejor experiencia posible y así puedas alcanzar tus objetivos de forma 
                    segura y eficiente.</p>
                </div>
                <!-- <div class="col col-lg-3">
                    <img src="{{ asset('images/recursos-pagina/personas-ejercicio.svg') }}" alt="Ejercicio gym" class="img-imperio img-responsive">
                </div> -->
            </div>
        </div>
    </section>

    <!-- Enunciado 2 -->
    <section class="section-imperio2">
        <div class="contenido-imperio2 container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                <h3>El imperio de la <span>disciplina</span></h3>
                <p>¡Bienvenidos al sitio web de Reich Gym!
                    En Reich Gym, nuestra misión es ayudarte a alcanzar tus metas de acondicionamiento 
                    físico y salud. Nuestro equipo de entrenadores altamente capacitados está comprometido
                    para brindarte la mejor experiencia posible y así puedas alcanzar tus objetivos de forma 
                    segura y eficiente.</p>
                </div>
                <div class="col-numero2 col-12 col-sm-12 col-md-12 col-lg-3">
                    <h2>02</h2>
                </div>
                <!-- <div class="col col-lg-3">
                    <img src="{{ asset('images/recursos-pagina/personas-ejercicio.svg') }}" alt="Ejercicio gym" class="img-imperio img-responsive">
                </div> -->
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/sedes.js') }}"></script>
</x-app-layout>
