<!-- views-admin/editRopa.blade.php -->

@extends('../plantilla-viewAdmin')

@section('contenido')
    <form action="{{ route('ropaAdmin.update', $prendas->IDROPA) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $prendas->NOMBRE }}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $prendas->TIPO }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $prendas->DESCRIPCION }}</textarea>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $prendas->STOCK }}" required>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ $prendas->PRECIO }}" required>

        <label for="talla">Talla:</label>
        <input type="text" name="talla" value="{{ $prendas->TALLA }}" required>

        <label for="color">Color:</label>
        <input type="text" name="color" value="{{ $prendas->COLOR }}" required>

        <label for="sexo">Marca:</label>
        <input type="text" name="sexo" value="{{ $prendas->SEXO }}" required>

        <label for="material">Material:</label>
        <input type="text" name="material" value="{{ $prendas->MATERIAL }}" required>
<!-- 
        <label for="imgSuplemento">Imagen 1 de la prenda:</label>
        <input type="text" name="imgPrenda1" value="{{ $prendas->IMGPRENDA1 }}">

        <label for="imgSuplemento">Imagen 2 de la prenda:</label>
        <input type="text" name="imgPrenda2" value="{{ $prendas->IMGPRENDA2 }}">

        <label for="imgSuplemento">Imagen 3 de la prenda:</label>
        <input type="text" name="imgPrenda3" value="{{ $prendas->IMGPRENDA3 }}">
    
-->

        <button type="submit">Actualizar</button>
    </form>
@endsection
