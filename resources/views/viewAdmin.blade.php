@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/viewAdmin-index.Css') }}">
<div class="grid ">
  <div class="item" tabindex="1">
    <div class="box">
      <div class="diamond"><span>Clientes</span></div>
      <div class="tooltip">Clientes</div>
    </div>
  </div>
  <div class="item" tabindex="2">
    <div class="box">
      <div class="diamond"><span>Suplementos</span></div>
      <div class="tooltip">Suplementos</div>
    </div>
  </div>
  <div class="item" tabindex="3">
    <div class="box">
      <div class="diamond"><span>Máquinas</span></div>
      <div class="tooltip">Máquinas</div>
    </div>
  </div>
  <div class="item" tabindex="4">
    <div class="box">
      <div class="diamond"><span>Elementos</span></div>
      <div class="tooltip">Elementos</div>
    </div>
  </div>
  <div class="item" tabindex="5">
    <div class="box">
      <div class="diamond"><span>Ropa</span></div>
      <div class="tooltip">Ropa</div>
    </div>
  </div>
</div>  
@endsection