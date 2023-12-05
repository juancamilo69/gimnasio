<x-app-layout>

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/suplementos.css') }}">

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
    <h1>Suplementos</h1>
    <h5>¡Compra tus suplementos!</h5>
</Section>

        <div>
            <form action="">
            <h2 class="titulo-filtrar">Filtrar por:</h2>
            <select class="select-suplementos" name="seleccionarSuplemento" id="">
            <option value="S0" selected>Seleccione suplemento</option>
            <option value="Creatina">Creatinas</option>
            <option value="Proteina">Proteínas</option>
            <option value="Aminoacidos">Aminoácidos</option>
            <option value="Boosters">Boosters</option>
            <option value="otrosProductos">Otros</option>
            </select>
            <button class="btn-buscar-filtro"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="titulo_input">
                <input type="text" class="buscador form-control" id="buscador" name="buscador" placeholder="Buscar...">
            </div>
        </div>
<!-- CARD ELEMENTOS -->
<div class="cards-suplementos-contenedor row row-cols-1 row-cols-md-4 g-3" id="cardId">
    @foreach ($suplementos as $suplemento)
                    <div class="col col-sm-6">
                        <div class="card h-100 w-100" >
                        <img src="{{$suplemento->IMGSUPLEMENTO}}" class="card-img-top img-fixed-size" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$suplemento->NOMBRE}}</h5>
                            <div class="d-flex">
                            <P class="card-text card-text-precio mt-4">${{ number_format($suplemento->PRECIO, 0, ',', '.') }}</P>
                            <a href="{{route('detalleSuplemento')}}" class="ms-auto"><button type="button" class="btn btn-dark btn-comprar">Detalles</button></a>
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