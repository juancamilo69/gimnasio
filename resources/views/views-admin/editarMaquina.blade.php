<!-- Título web -->
<title>Editar Máquinas - Panel de administración - Reich gym</title>


@extends('../plantilla-viewAdmin')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/formularios/editarMaquina.css') }}">
    <div class="form-content container mt-5">

        <div class="mb-4">
        <h2 class="text-center">Formulario de Actualización de Máquinas</h2>
        <p class="lead text-center">Por favor, altere los campos necesarios para actualizar en la base de datos.</p>
        </div>

        <form action="{{ route('maquinas.update', $maquinas->IDEQUIPO) }}" method="post">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="idsede" class="form-label">ID Sede:</label>
                <input type="text" class="form-control" id="idsede" name="idsede" value="{{ $maquinas->IDSEDE }}" required>
            </div>
            
            <div class="mb-3">
                <label for="nombremaquina" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombremaquina" name="nombremaquina" value="{{ $maquinas->NOMBREMAQUINA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="grupomuscular" class="form-label">Grupo Muscular:</label>
                <input type="text" class="form-control" id="grupomuscular" name="grupomuscular" value="{{ $maquinas->GRUPOMUSCULAR }}" required>
            </div>
    
            <div class="mb-3">
                <label for="fechacompra" class="form-label">Fecha Compra:</label>
                <input type="text" class="form-control" id="fechacompra" name="fechacompra" value="{{ $maquinas->FECHACOMPRA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="imgmaquina" class="form-label">Img máquina:</label>
                <input type="text" class="form-control" id="imgmaquina" name="imgmaquina" value="{{ $maquinas->IMGMAQUINA }}" required>
            </div>
    
            <div class="mb-3">
                <label for="soporte" class="form-label">Soporte:</label>
                <input type="Text" class="form-control" id="soporte" name="soporte" value="{{ $maquinas->SOPORTE }}" required>
            </div>
    
            <div class="text-end col-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </form>    
    </div>
    @endsection
