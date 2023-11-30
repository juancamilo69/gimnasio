<!-- views-admin/editarElemento.blade.php -->

@extends('../plantilla-viewAdmin')

@section('contenido')
    <form action="{{ route('elementos.update', $elementos->IDELEMENTO) }}" method="post">
        @csrf
        @method('PUT')

        <label for="idsede">Id sede:</label>
        <input type="text" name="idsede" value="{{ $elementos->IDSEDE }}" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $elementos->NOMBRE }}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $elementos->TIPO }}" required>

        <label for="uso">Uso:</label>
        <input type="text" name="uso" value="{{ $elementos->USO }}" required>

        <label for="fechacompra">Fecha compra:</label>
        <input type="text" name="fechacompra" value="{{ $elementos->FECHACOMPRA }}" required>

        <label for="imgelemento">Imágen del elemento:</label>
        <input type="text" name="imgelemento" value="{{ $elementos->IMGELEMENTO }}" required>

        <label for="soporte">Soporte:</label>
        <input type="text" name="soporte" value="{{ $elementos->SOPORTE }}" required>
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
