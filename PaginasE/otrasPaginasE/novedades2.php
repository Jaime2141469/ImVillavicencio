<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/index.css">
    <title>novedades2</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand form-control">Registrar Folios de Vida</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h1>Folios de vida</h1>
<div class="container">
<form action="../controlador/controladorF.php" method="post">
<div class="input-group">
  <span class="input-group-text">Id</span>
  <input type="text" aria-label="Id" class="form-control" name="Id">
</div>
<br>
<div class="input-group">
  <span class="input-group-text">Nombre quien registra</span>
  <input type="text" aria-label="Fecha" class="form-control" name="nombre">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Nombre a quien se le registra</span>
 <input type="text" aria-label="motivo" class="form-control" name="persona">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Observaciones</span>
 <input type="text" aria-label="solicitante" class="form-control" name="observaciones">
</div>
<br>
<button type="submit" class="btn btn-primary form-control" name="registro5">Guardar</button> 
<br>
<br>
<table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Persona</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>

  <tbody>
      
  </tbody>

</table>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand form-control">Registrar Desprendible de pago</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h1>Desprendible de pago</h1>
<div class="container">
<form action="../controlador/controladorD.php" method="post">
<div class="input-group">
  <span class="input-group-text">Id</span>
  <input type="text" aria-label="Id" class="form-control" name="Id">
</div>
<br>
<div class="input-group">
  <span class="input-group-text">Documento</span>
  <input type="text" aria-label="Fecha" class="form-control" name="documento">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Nombre</span>
 <input type="text" aria-label="motivo" class="form-control" name="nombre">
</div>
<br>
<div class="input-group">
 <span class="input-group-text">Monto</span>
 <input type="text" aria-label="solicitante" class="form-control" name="monto">
</div>
<br>
<button type="submit" class="btn btn-primary form-control" name="registro6">Guardar</button> 
<br>
<br>
<table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Documento</th>
      <th scope="col">Nombre</th>
      <th scope="col">Monto</th>
    </tr>
  </thead>

  <tbody>
      
  </tbody>

</table>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand form-control">Registrar Vacaciones</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>

<h1>Vacaciones</h1>
<div class="container">
    <form action="../controlador/controladorV.php" method="post">
        <div class="input-group">
            <span class="input-group-text">Id</span>
            <input type="text" aria-label="Id" class="form-control" name="Id">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Nombre</span>
            <input type="text" aria-label="Nombre" class="form-control" name="nombre">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Fecha</span>
            <input type="text" aria-label="fecha" class="form-control" name="fecha">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Ingreso</span>
            <input type="text" aria-label="Nombre" class="form-control" name="ingreso">
        </div>
        <br>
        <button class="btn btn-primary form-control" name="registro7">Guardar</button>
        <br>
        <br>
        <table class="table table-dark table-hover">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Salida</th>
                    <th scope="col">Fecha Ingreso</th>
                </tr>
            </thead>

            <tbody>

            </tbody>

        </table>      
    </form>
</div>

</div>
  <div class="container">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <a href="../novedades.php" class="btn btn-dark">1</a>
    <a href="otrasPaginasE/novedades2.php" class="btn btn-dark nav-link active">2</a>
    <a href="novedades3.php" class="btn btn-dark">3</a>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>