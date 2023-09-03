@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/maquinas.css') }}">
<!-- CARD ELEMENTOS -->
<div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4">
    @foreach ($maquinas as $maquina)
                    <div class="col" style="width: 25rem;">
                        <div class="card h-100">
                        @if($maquina->IMGMAQUINA)
                        <img src="{{$maquina->IMGMAQUINA}}" class="card-img-top img-fixed-size" alt="...">
                        @else 
                            Sin imágen malparido
                        @endif 
                        <div class="card-body">
                            <h5 class="card-title">{{$maquina->NOMBREMAQUINA}}</h5>
                            <h2 class="card-text-grupomuscular">{{$maquina->GRUPOMUSCULAR}}</h2>
                            <P class="card-text card-text-fechacompra">{{$maquina->FECHACOMPRA}}</P>
                            <hr class="hr hr-blurry" />
                            <P class="card-text card-text-nombresede">{{$maquina->nombreSede}}</P>
                            <P class="card-text card-text-ciudad">{{$maquina->CIUDAD}}</P>
                            <P class="card-text card-text-direccion">{{$maquina->DIRECCION}}</P>
                            <a href=""><button type="button" class="btns btn btn-dark">{{$maquina->SOPORTE}}</button></a>
                        </div>
                        </div>
                    </div>
                    @endforeach
    </div>

@endsection
