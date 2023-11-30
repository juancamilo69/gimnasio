<!-- views-admin/editSuplemento.blade.php -->

@extends('../plantilla-viewAdmin')

@section('contenido')
    <form action="{{ route('suplementosAdmin.update', $suplemento->IDSUPLEMENTO) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $suplemento->NOMBRE }}" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="{{ $suplemento->MARCA }}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $suplemento->TIPO }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $suplemento->DESCRIPCION }}</textarea>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $suplemento->STOCK }}" required>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ $suplemento->PRECIO }}" required>
<!-- 
        <label for="imgSuplemento">Imagen del Suplemento:</label>
        <input type="text" name="imgSuplemento" value="{{ $suplemento->IMGSUPLEMENTO }}">

        <label for="imgTablaNutricional">Imagen de la Tabla Nutricional:</label>
        <input type="text" name="imgTablaNutricional" value="{{ $suplemento->IMGTABLANUTRICIONAL }}"> -->

        <button type="submit">Actualizar</button>
    </form>
@endsection
