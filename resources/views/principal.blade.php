<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Estilos CSS para el CRUD de medicamentos -->
<style>
  /* Estilo para el encabezado */
  .crud-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
  }
  
  /* Estilo para el título */
  .crud-title {
    font-size: 2rem;
    font-weight: bold;
  }
  
  /* Estilo para el botón de agregar */
  .crud-add {
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
  }
  
  /* Estilo para la tabla */
  .crud-table {
    width: 100%;
    border-collapse: collapse;
  }
  
  /* Estilo para las filas */
  .crud-row {
    border-bottom: 1px solid #ddd;
  }
  
  /* Estilo para las celdas de la tabla */
  .crud-cell {
    padding: 0.5rem;
    text-align: left;
    vertical-align: middle;
  }
  
  /* Estilo para los botones de acción */
  .crud-action-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    margin-right: 0.5rem;
  }
  
  /* Estilo para el botón de editar */
  .crud-edit-button {
    background-color: #ffc107;
    color: #fff;
  }
  
  /* Estilo para el botón de eliminar */
  .crud-delete-button {
    background-color: #dc3545;
    color: #fff;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Medicamentos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ url('/medicamentos/create') }}">Registrar</a>
        <a class="nav-link" href="{{ url('/medicamentos/') }}">Actualizar</a>
        <a class="nav-link" href="{{ url('/medicamentos/') }}">Borrar</a>
        <a class="nav-link" href="{{ url('/medicamentos/') }}">Ver medicamentos</a>
      </div>
    </div>
  </div>
</nav>
        @yield('menu')
</body>
</html>