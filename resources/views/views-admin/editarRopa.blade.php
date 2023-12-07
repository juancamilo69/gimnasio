<!-- Título web -->
<title>Editar Prendas - Panel de administración - Reich gym</title>


@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/editarRopa.css') }}">

    <div class="form-content container mt-5">

        <div class="mb-4">
        <h2 class="text-center">Formulario de Actualización de Ropa</h2>
        <p class="lead text-center">Por favor, altere los campos necesarios para actualizar en la base de datos.</p>
        </div> 

        <form action="{{ route('ropaAdmin.update', $prendas->IDROPA) }}" method="post">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $prendas->NOMBRE }}" required>
            </div>
    
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $prendas->TIPO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $prendas->DESCRIPCION }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $prendas->STOCK }}" required>
            </div>
    
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" value="{{ $prendas->PRECIO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="talla" class="form-label">Talla:</label>
                <input type="text" class="form-control" id="talla" name="talla" value="{{ $prendas->TALLA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="color" class="form-label">Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $prendas->COLOR }}" required>
            </div>
    
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $prendas->SEXO }}" required>
            </div>
    
            <div class="mb-3">
                <label for="material" class="form-label">Material:</label>
                <input type="text" class="form-control" id="material" name="material" value="{{ $prendas->MATERIAL }}" required>
            </div>
    
            <!-- Comenté las imágenes según lo indicado -->
            <!--
            <div class="mb-3">
                <label for="imgPrenda1" class="form-label">Imagen 1 de la prenda:</label>
                <input type="text" class="form-control" id="imgPrenda1" name="imgPrenda1" value="{{ $prendas->IMGPRENDA1 }}">
            </div>
    
            <div class="mb-3">
                <label for="imgPrenda2" class="form-label">Imagen 2 de la prenda:</label>
                <input type="text" class="form-control" id="imgPrenda2" name="imgPrenda2" value="{{ $prendas->IMGPRENDA2 }}">
            </div>
    
            <div class="mb-3">
                <label for="imgPrenda3" class="form-label">Imagen 3 de la prenda:</label>
                <input type="text" class="form-control" id="imgPrenda3" name="imgPrenda3" value="{{ $prendas->IMGPRENDA3 }}">
            </div>
            -->
    
            <div class="text-end col-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
