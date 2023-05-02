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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
