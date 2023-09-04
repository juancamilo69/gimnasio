<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/general.css') }}">
<link rel="stylesheet" href="{{ asset('css/sedes.css') }}">
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
                <div class="row row-cols-1 row-cols-md-2 g-4 contenedor-cards-tunja">
                    <div class="col">
                        <div class="card">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9842106828496!2d-73.34675972616012!3d5.569351233517665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7db3da1eaf6d%3A0x47e98f5846f4f4a6!2sReich%20Gym%20Sede%20Muiscas!5e0!3m2!1ses-419!2sco!4v1693117202435!5m2!1ses-419!2sco" class="embed-responsive-item" max-width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Reich Gym Sede Muiscas</h5>
                            <p class="card-text">Avenida Nte. #64 - 160, Tunja, Boyacá.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.2490264810062!2d-73.36911802616034!3d5.530028233912676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7d763e6fec37%3A0xce2658a54901c71!2sREICH%20GYM%20TUNJA!5e0!3m2!1ses-419!2sco!4v1693120413880!5m2!1ses-419!2sco" class="embed-responsive-item" max-width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Reich Gym Sede Centro</h5>
                            <p class="card-text">Cl. 16 #13-28, Tunja, Boyacá.</p>
                        </div>
                        </div>
                    </div>
                    </div>
</div>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>