@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/viewAdmin-index.Css') }}">

<div class="container mt-4">
  
<div class="mb-4">
    <h2 class="text-center">Panel de Administración</h2>
    <p class="lead text-center">Apartado exclusivo para los Administradores.</p>
    </div>

    <div class="row">
      <!-- Primera fila con 3 tarjetas -->
      <div class="col-md-4 mb-4">
        <a href="">
        <div class="card">
          <img src="https://www.cmdsport.com/app/uploads/2016/10/personas-engordan-gimnasio.jpeg" class="card-img-top" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            <p class="card-text">Monitoreo de clientes.</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="">
        <div class="card">
          <img src="https://www.bodytone.eu/wp-content/uploads/2023/05/Tipos-maquinas-para-gimnasio-Bodytone.jpeg" class="card-img-top" alt="Imagen 2">
          <div class="card-body">
            <h5 class="card-title">Máquinas</h5>
            <p class="card-text">Monitoreo de Máquinas.</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="">
        <div class="card">
          <img src="https://mercadofitness.com/ar/wp-content/uploads/2020/08/Asociacion-Gimnasios-Departamento-Cochabamba.jpeg" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Elementos</h5>
            <p class="card-text">Monitoreo de Elementos.</p>
          </div>
        </div>
        </a>
      </div>
    </div>

    <div class="row">
      <!-- Segunda fila con 2 tarjetas -->
      <div class="col-md-6 mb-4">
        <a href="">
        <div class="card">
          <img src="https://us.123rf.com/450wm/itakdalee/itakdalee1611/itakdalee161100157/68022805-tarros-con-las-prote%C3%ADnas-y-amino%C3%A1cidos-en-un-fondo-gris.jpg?ver=6" class="card-img-top" alt="Imagen 4">
          <div class="card-body">
            <h5 class="card-title">Suplementos</h5>
            <p class="card-text">Monitoreo de Suplementos.</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-6 mb-4">
        <a href="">
        <div class="card">
          <img src="https://www.eltiempo.com/files/image_640_428/uploads/2022/08/23/63053bb53c3c3.jpeg" class="card-img-top" alt="Imagen 5">
          <div class="card-body">
            <h5 class="card-title">Ropa</h5>
            <p class="card-text">Monitoreo de Ropa.</p>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
@endsection