@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/elementos.css') }}">
<Section class="hero">
    <h1>Elementos</h1>
    <h5>Registro de elementos</h5>
</Section>
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4">
@foreach ($elementos as $elemento)
                <div class="col col-sm-6"">
                    <div class="card h-100 w-100">
                    <img src="{{$elemento->IMGELEMENTO}}" class="card-img-top img-fixed-size" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$elemento->nombreElemento}}</h5>
                        <h2 class="card-text-tipo">{{$elemento->TIPO}}</h2>
                        <p class="card-text card-text-uso">{{$elemento->USO}}</p>
                        <P class="card-text card-text-fechacompra">{{$elemento->FECHACOMPRA}}</P>
                        <hr class="hr hr-blurry" />
                        <P class="card-text card-text-nombresede">{{$elemento->nombreSede}}</P>
                        <P class="card-text card-text-ciudad">{{$elemento->CIUDAD}}</P>
                        <P class="card-text card-text-direccion">{{$elemento->DIRECCION}}</P>
                        <a href=""><button type="button" class="btns btn btn-dark">{{$elemento->SOPORTE}}</button></a>
                    </div>
                    </div>
                </div>
                @endforeach
</div>
                
@endsection