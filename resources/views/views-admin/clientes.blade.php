@extends('../plantilla-viewAdmin')

@section('contenido')

    <div>
        <form action="">
        <h1>Buscar por:</h1>
        <select name="tipoPlan" id="">
        <option value="P1">Plan individual</option>
        <option value="P2">Plan pareja</option>
        </select>
        <a href="{{route('planpareja')}}"><button>Buscar</button></a>
        </form>
    </div>

@endsection