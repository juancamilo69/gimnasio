<!-- views-admin/editarElemento.blade.php -->

@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/editarElemento.css') }}">

    <div class="form-content container mt-5">

        <div class="mb-4">
        <h2 class="text-center">Formulario de Actualización de Elementos</h2>
        <p class="lead text-center">Por favor, altere los campos necesarios para actualizar en la base de datos.</p>
        </div>        

        <form action="{{ route('elementos.update', $elementos->IDELEMENTO) }}" method="post">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="idsede" class="form-label">ID Sede:</label>
                <input type="text" class="form-control" id="idsede" name="idsede" value="{{ $elementos->IDSEDE }}" required>
            </div>
    
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $elementos->NOMBRE }}" required>
            </div>
    
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $elementos->TIPO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="uso" class="form-label">Uso:</label>
                <input type="text" class="form-control" id="uso" name="uso" value="{{ $elementos->USO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="fechacompra" class="form-label">Fecha compra:</label>
                <input type="text" class="form-control" id="fechacompra" name="fechacompra" value="{{ $elementos->FECHACOMPRA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="imgelemento" class="form-label">Imágen del elemento:</label>
                <input type="text" class="form-control" id="imgelemento" name="imgelemento" value="{{ $elementos->IMGELEMENTO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="soporte" class="form-label">Soporte:</label>
                <input type="text" class="form-control" id="soporte" name="soporte" value="{{ $elementos->SOPORTE }}" required>
            </div>
    
            <div class="text-end col-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
