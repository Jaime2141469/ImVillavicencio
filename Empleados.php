<?php

session_start();
if (isset($_SESSION['nombre'])) {
  header('Location:PaginasE/empleado.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Empleados</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">IM VILLAVICENCIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RegistroE.php">RegistroEmleado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Empleados.php">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Correos.php">PQR</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1>Ingreso de Empleados</h1>

<div class="container">
<form action="procesos2/ProcesosE.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
  </div>
  <button type="submit" class="btn btn-primary form-control">Ingresar</button>
</form>

<br>

<table class="table table-dark table-hover">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Rol</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>

  <tbody>
    <?php

      require 'ModeloDao/DaoE.php';
      require 'ModeloDto/DtoE.php';
      require 'utilidades/conexion.php';
      $uDaoE = new DaoE();
      $allusers = $uDaoE -> listarEmpleados();
      foreach ($allusers as $user) {

    ?>

    <tr>
        <td><?php echo $user['Id']; ?></td>
        <td><?php echo $user['Nombre']; ?></td>
        <td><?php echo $user['Apellido']; ?></td>
        <td><?php echo $user['Rol']; ?></td>
        <td><?php echo $user['Usuario']; ?></td>
    </tr>

    <?php
    }
    ?>
  </tbody>
  <br>
  <a href="RegistroE.php" class="link-dark">Registrar un nuevo empleado</a>
</table>

</div>

<footer class="container2">
    
    <p>IM Villavicencio 2020 - 2022</p>
    <p>todos los derechos reservados</p>

  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>