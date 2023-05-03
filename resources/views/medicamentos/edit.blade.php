@extends('principal')

@section('menu')
    <div class="container">
        <h1>Lista de medicamentos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Presentación</th>
                    <th>Gramaje</th>
                    <th>Fecha de caducidad</th>
                    <th>Unidades</th>
                    <th>Fecha de registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{ $medicamento->nombre }}</td>
                        <td>{{ $medicamento->tipo }}</td>
                        <td>{{ $medicamento->presentacion }}</td>
                        <td>{{ $medicamento->gramaje }}</td>
                        <td>{{ $medicamento->fecha_caducidad }}</td>
                        <td>{{ $medicamento->unidades }}</td>
                        <td>{{ $medicamento->fecha }}</td>
                        <td>
                            <form method="POST" action="{{ route('medicamentos.destroy', $medicamento->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" data-id="{{ $medicamento->id }}">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('medicamentos.update', $medicamento->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary" data-id="{{ $medicamento->id }}">Modificar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
