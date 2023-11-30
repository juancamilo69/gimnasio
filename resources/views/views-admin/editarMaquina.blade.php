<!-- views-admin/editarMaquina.blade.php -->

@extends('../plantilla-viewAdmin')

@section('contenido')
    <form action="{{ route('maquinas.update', $maquinas->IDEQUIPO) }}" method="post">
        @csrf
        @method('PUT')

        <label for="idsede">Id sede:</label>
        <input type="text" name="idsede" value="{{ $maquinas->IDSEDE }}" required>
        
        <label for="nombremaquina">Nombre:</label>
        <input type="text" name="nombremaquina" value="{{ $maquinas->NOMBREMAQUINA }}" required>

        <label for="grupomuscular">Grupo Muscular:</label>
        <input type="text" name="grupomuscular" value="{{ $maquinas->GRUPOMUSCULAR }}" required>

        <label for="fechacompra">Fecha Compra:</label>
        <input type="text" name="fechacompra" value="{{ $maquinas->FECHACOMPRA }}" required>

        <label for="imgmaquina">Img máquina:</label>
        <input type="text" name="imgmaquina" value="{{ $maquinas->IMGMAQUINA }}" required>

        <label for="soporte">Soporte:</label>
        <input type="Text" name="soporte" value="{{ $suplemento->SOPORTE }}" required>

<!-- 
        <label for="imgSuplemento">Imagen del Suplemento:</label>
        <input type="text" name="imgSuplemento" value="{{ $suplemento->IMGSUPLEMENTO }}">

        <label for="imgTablaNutricional">Imagen de la Tabla Nutricional:</label>
        <input type="text" name="imgTablaNutricional" value="{{ $suplemento->IMGTABLANUTRICIONAL }}"> -->

        <button type="submit">Actualizar</button>
    </form>
@endsection
