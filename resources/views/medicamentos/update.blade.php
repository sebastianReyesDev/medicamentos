@extends('principal')

@section('menu')
    <div class="container">
        <h1>Editar medicamento</h1>
        <form method="POST" action="{{ route('medicamentos.update', $medicamento->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $medicamento->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="jarabe" @if($medicamento->tipo == 'jarabe') selected @endif>Jarabe</option>
                    <option value="pastilla" @if($medicamento->tipo == 'pastilla') selected @endif>Pastilla</option>
                    <option value="inyeccion" @if($medicamento->tipo == 'inyeccion') selected @endif>Inyección</option>
                </select>
            </div>
            <div class="form-group">
                <label for="presentacion">Presentación:</label>
                <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{ $medicamento->presentacion }}" required>
            </div>
            <div class="form-group">
                <label for="gramaje">Gramaje:</label>
                <input type="number" class="form-control" id="gramaje" name="gramaje" value="{{ $medicamento->gramaje }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_caducidad">Fecha de caducidad:</label>
                <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" value="{{ $medicamento->fecha_caducidad }}" required>
            </div>
            <div class="form-group">
                <label for="unidades">Unidades:</label>
                <input type="number" class="form-control" id="unidades" name="unidades" value="{{ $medicamento->unidades }}" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de registro:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $medicamento->fecha }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
