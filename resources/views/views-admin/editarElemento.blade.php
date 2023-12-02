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

        <button type="submit">Actualizar</button>
    </form>
@endsection
