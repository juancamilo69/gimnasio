<!-- Título web -->
<title>Bienvenido a Reich gym</title>

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
    <div class="hero-section" style="position: relative;">
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

    <div class="overflow-hidden mb-5">
        <div class="p-6 text-gray-900">
            <div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4">            
                <!-- CARD MEMBRESÍAS -->
                @foreach ($membresiasData as $membresiasDatas)
                <div class="col">
                    <div class="cardm h-100">
                    <div class="cardm-body">
                        <h5 class="cardm-title">{{$membresiasDatas->NOMBREMEMBRESIA}}</h5>
                        <p class="cardm-text">{{$membresiasDatas->DESCRIPCION}}</p>
                        <h2 class="cardm-precio">$ {{$membresiasDatas->PRECIO}} <span>/ Mes</span></h2>
                        <p class="cardm-checktext"><i class="fa-solid fa-circle-check"></i> <span>Válido por {{$membresiasDatas->DURACIONMESES}} @if($membresiasDatas->DURACIONMESES > 1)
                                                          meses
                                                      @else
                                                          mes
                                                      @endif
                                                    </span></p>
                        <a href="{{$membresiasDatas->LINKPAGO}}"><button class="cardm-btn">Adquirir</button></a>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Section Sedes -->
    <section class="section-sedes">
        <div class="contenido-sedes container">
        <section class="contenedor-titulos-sedes container">
            <h3>Conoce</h3>
            <h2>Nuestras Sedes</h2>
            </section>

            <div class="contenedor-sedes">
              <a href="{{route ('sedesTunja')}}">
                <div class="cardsede cardsede-tunja">
                  <div class="cardsede-img">
                    <img src="https://www.rocfit.com/wp-content/uploads/2020/07/montar-un-gimnasio-en-tu-comunidad-de-vecinos-1.jpeg" alt="">
                  </div>
                  <div class="cardsede-info">
                    <p>Tunja</p>
                  </div>                  
                </div>
              </a>
              <a href="{{route ('sedesBarbosa')}}">
                <div class="cardsede cardsede-barbosa">
                <div class="cardsede-img">
                    <img src="https://sportsolutions.com.mx/wp-content/uploads/2021/01/como-renovar-gimnasio-residencial-despues.jpg" alt="">
                  </div>
                  <div class="cardsede-info">
                    <p>Barbosa</p>
                  </div>        
                </div>
              </a>
            </div>
        </div>
    </section>

    <!-- Servicios section -->

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section class="contenedor-introduccion-servicios container">
            <div class="textos-introduccion-servicios">
                <h3>Con nosotros</h3>
                <h2 class="texto-recibes">Recibes:</h2>
            </div>

            <div class="cards-servicios-contenedor row row-cols-1 row-cols-md-3 g-4">
                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Asesoria.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Asesorías</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Entrenamiento semi-personalizado.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Entrenamiento semi-personalizado</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Suplementación.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Suplementación</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Clases grupales.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Clases grupales</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Valoración física.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Valoración física</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/servicios/Eventos y actividades sociales.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Eventos y actividades sociales</p>
                        </div>
                        </div>
                    </div>
    </div>

    <section class="zonas-especializadas">
    <div class="texto-zonas">
    <h2>Zonas <span>especializadas:</span></h2>
    </div>

    <div class="cards-servicios-contenedor row row-cols-1 row-cols-md-3 g-4">
                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/zonas especializadas/zonaMuscular.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Zona musculación</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/zonas especializadas/zonaCardio.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Zona Cardio</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-sm-6">
                        <div class="card h-100 w-100">
                        <img src="{{asset('images/zonas especializadas/salonesGrupales.jpg')}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <p>Salones grupales</p>
                        </div>
                        </div>
                    </div>
    </div>
    </section> <!-- sección Zonas especializadas -->


            </section>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-white">
      <!-- Social media section-->
      <section
        class="social-media-section d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Visítanos en nuestras redes sociales:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="icons-social-media" style="display: flex; margin-top: 5px;">
        <a href="https://www.instagram.com/reichgym._/" class="me-4 link-secondary">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/profile.php?id=100078401858405" class="me-4 link-secondary">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </section>
      <!-- Social media Section  -->

      <!-- Links Section  -->
      <section class="links-section">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
              <i class="fa-solid fa-dumbbell me-3"></i>Reich Gym
              </h6>
              <p>
              En Reich Gym estamos comprometidos en proporcionarte una experiencia excepcional mientras te esfuerzas por mantenerte en forma y saludable. ¡Esperamos verte pronto en nuestras instalaciones!
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div
              class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"
              style="text-align: center"
            >
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Membresías</h6>
              @foreach ($membresiasData as $membresiasDatas)
              <p class="py-1">
                <a href="#!" class="text-reset">{{$membresiasDatas->NOMBREMEMBRESIA}}</a>
              </p>
              @endforeach
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div
              class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"
              style="text-align: center"
            >
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Links</h6>
              <p>
                <a href="#!" class="text-reset">Sedes</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
              <p>
                <i class="fas fa-home me-3"></i> Cualquiera de nuestras sedes
              </p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                Reichgym@gmail.com
              </p>
              <p>
                <i class="fas fa-phone me-3"></i> 3228178509
              </p>
              <p>
                <i class="fas fa-print me-3"></i> 3112562333
              </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.3)"
      >
        <b>© Reich Gym</b>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script type="text/javascript" src="{{ asset('js/sedes.js') }}"></script>
</x-app-layout>
