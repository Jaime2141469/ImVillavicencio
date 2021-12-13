<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plataforma de la empresa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand form-control">Novedades de personal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h1>Gestionar Novedades de personal</h1>
<div class="container">
<form action="../controlador/controladorN.php" method="post">
<div class="input-group">
  <span class="input-group-text">Id</span>
  <input type="text" aria-label="Id" class="form-control" name="Id">
</div>
<br>
<div class="input-group">
  <span class="input-group-text">Fecha de novedad</span>
  <input type="text" aria-label="Fecha" class="form-control" name="fecha">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Motivo de novedad</span>
 <input type="text" aria-label="motivo" class="form-control" name="motivo">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Solicitante</span>
 <input type="text" aria-label="solicitante" class="form-control" name="solicitante">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Descripcion</span>
 <input type="text" aria-label="descripcion" class="form-control" name="descripcion">
</div>
<br>
<button type="submit" class="btn btn-primary form-control" name="registro3">Guardar</button>
<a href="plataforma.php" class="btn btn-info form-control">Regresar</a>  
<br>
<br>
<table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Motivo</th>
      <th scope="col">Solicitante</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>

  <tbody>
    <?php

      require '../ModeloDao/DaoN.php';
      require '../ModeloDto/DtoN.php';
      require '../utilidades/conexion.php';
      $uDaoN = new DaoN();
      $allusers = $uDaoN -> listarNovedad();
      foreach ($allusers as $user) {

    ?>

        <tr>
          <td> <?php echo $user['Id'];?></td>
          <td> <?php echo $user['Fecha'];?></td>
          <td> <?php echo $user['motivo'];?></td>
          <td> <?php echo $user['solicitante'];?></td>
          <td> <?php echo $user['descripcion'];?></td>
        </tr>

    <?php
    }
    ?>
  </tbody>

</table>
</form>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand form-control">Afiliacion a EPS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h1>Gestionar Afiliaciones</h1>
<div class="container">
<form action="../controlador/controladorA.php" method="post">
<div class="input-group">
  <span class="input-group-text">Id</span>
  <input type="text" aria-label="Id" class="form-control" name="Id">
</div>
<br>
<div class="input-group">
  <span class="input-group-text">Fecha de afiliacion</span>
  <input type="text" aria-label="Fecha" class="form-control" name="fecha">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">EPS a la que se afilio</span>
 <input type="text" aria-label="motivo" class="form-control" name="eps">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Fecha de fin afiliacion</span>
 <input type="text" aria-label="solicitante" class="form-control" name="fin">
</div>
<br>
<button type="submit" class="btn btn-primary form-control" name="registro4">Guardar</button>

<table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">EPS</th>
      <th scope="col">Fin</th>
    </tr>
  </thead>

  <tbody>
    <?php 

    require '../ModeloDao/DaoA.php';
    require '../ModeloDto/DtoA.php';
    require '../utilidades/conexion2.php';
    $uDaoA = new DaoA();
    $allusers = $uDaoA->listarAfiliacion();
    foreach ($allusers as $user) {
   
    ?>

    <tr>
      <td><?php echo $user['Id']; ?></td>
      <td><?php echo $user['Fecha']; ?></td>
      <td><?php echo $user['Eps']; ?></td>
      <td><?php echo $user['Fn_fecha']; ?></td>
    </tr>

    <?php
     }
    ?>
  </tbody>

  </table>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand form-control">Gestion Personal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h1>Gestionar Personal</h1>
<div class="container">
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

      require '../ModeloDao/DaoE.php';
      require '../ModeloDto/DtoE.php';
      require '../utilidades/conexion3.php';
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

  </table>
  </div>
  <div class="container">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <a href="novedades.php" class="btn btn-dark nav-link active">1</a>
    <a href="otrasPaginasE/novedades2.php" class="btn btn-dark">2</a>
    <a href="otrasPaginasE/novedades3.php" class="btn btn-dark">3</a>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>