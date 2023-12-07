<!-- Título web -->
<title>Sedes - Reich gym</title>

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
                <div class="row">
                    <!-- First Column -->
                    <div class="col-md-6">
                        <div class="contenedor-ciudades">
                            <a href="{{ route('sedesTunja') }}">
                                <div class="card card-ciudad-tunja text-bg-dark">
                                    <img src="https://colombiavisible.com/wp-content/uploads/2022/04/Templo-Tunja-1024x684.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Tunja</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <!-- Second Column -->
                    <div class="col-md-6">
                        <div class="contenedor-ciudades">
                            <a href="{{ route('sedesBarbosa') }}">
                                <div class="card card-ciudad-barbosa text-bg-dark">
                                    <img src="https://turismoantioquia.travel/wp-content/uploads/2023/04/JPT2039.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Barbosa</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
</x-app-layout>