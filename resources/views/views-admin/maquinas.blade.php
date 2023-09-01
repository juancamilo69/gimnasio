@extends('../plantilla-viewAdmin')

@section('contenido')

<!-- CARD ELEMENTOS -->

<div class="cards-membresias-contenedor row row-cols-1 row-cols-md-3 g-4">
    @foreach ($maquinas as $maquina)
                    <div class="col" style="width: 30rem;">
                        <div class="card h-100">
                        @if($maquina->IMGMAQUINA)
                        <img src="{{asset('storage/images' . $maquina->IMGMAQUINA)}}" class="card-img-top" alt="...">
                        @else 
                            Sin imágen malparido
                        @endif 
                        <div class="card-body">
                            <h5 class="card-title">{{$maquina->NOMBREMAQUINA}}</h5>
                            <h2>{{$maquina->GRUPOMUSCULAR}}</h2>
                            <P class="card-text">{{$maquina->FECHACOMPRA}}</P>
                            <hr class="hr hr-blurry" />
                            <P class="card-text">{{$maquina->nombreSede}}</P>
                            <P class="card-text">{{$maquina->CIUDAD}}</P>
                            <P class="card-text">{{$maquina->DIRECCION}}</P>
                            <a href=""><button type="button" class="btns">{{$maquina->SOPORTE}}</button></a>
                        </div>
                        </div>
                    </div>
                    @endforeach
    </div>

@endsection
