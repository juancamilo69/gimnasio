<!-- Título web -->
<title>Editar Suplementos - Panel de administración - Reich gym</title>


@extends('../plantilla-viewAdmin')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/formularios/editarMaquina.css') }}">

    <div class="form-content container mt-5">

        <div class="mb-4">
        <h2 class="text-center">Formulario de Actualización de Suplementos</h2>
        <p class="lead text-center">Por favor, altere los campos necesarios para actualizar en la base de datos.</p>
        </div>          

        <form action="{{ route('suplementosAdmin.update', $suplemento->IDSUPLEMENTO) }}" method="post">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $suplemento->NOMBRE }}" required>
            </div>
    
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ $suplemento->MARCA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $suplemento->TIPO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $suplemento->DESCRIPCION }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $suplemento->STOCK }}" required>
            </div>
    
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" value="{{ $suplemento->PRECIO }}" required>
            </div>
    
            <!-- Comenté las imágenes según lo indicado -->
            <!--
            <div class="mb-3">
                <label for="imgSuplemento" class="form-label">Imagen del Suplemento:</label>
                <input type="text" class="form-control" id="imgSuplemento" name="imgSuplemento" value="{{ $suplemento->IMGSUPLEMENTO }}">
            </div>
    
            <div class="mb-3">
                <label for="imgTablaNutricional" class="form-label">Imagen de la Tabla Nutricional:</label>
                <input type="text" class="form-control" id="imgTablaNutricional" name="imgTablaNutricional" value="{{ $suplemento->IMGTABLANUTRICIONAL }}">
            </div>
            -->
    
            <div class="text-end col-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
