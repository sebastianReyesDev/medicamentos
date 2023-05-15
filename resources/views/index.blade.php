<!DOCTYPE html>
<html>
<head>
    <title>MEDIFCA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 50px auto;
            max-width: 800px;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
        }

        .menu {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .menu a {
            margin-left: 10px;
            text-decoration: none;
            color: #000;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #f0f0f0;
        }

        .search-bar {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>MEDIFCA</h1>
        <div class="menu">
            <a href="{{ url('/pacientes') }}">Pacientes</a>
            <a href="{{ url('/medicamentos') }}">Medicamentos</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar paciente">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">No de cuenta</th>
                    <th scope="col">Diagnóstico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09:00</td>
                    <td>John Doe</td>
                    <td>123456</td>
                    <td>Fiebre</td>
                </tr>
                <tr>
                    <td>10:30</td>
                    <td>Jane Smith</td>
                    <td>987654</td>
                    <td>Dolor de cabeza</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
        <a href="{{ url('/consulta/create') }}" class="btn btn-primary">Registrar nueva consulta</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
