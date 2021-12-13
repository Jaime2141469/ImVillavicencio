<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
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
          <a class="nav-link active" href="Registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RegistroE.php">RegistroEmleado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Empleados.php">Empleados</a>
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

<h1>Formulario de Registro</h1>

<br>

<div class="container">

<form class="row g-3 needs-validation" novalidate action="controlador/controlador.php" method="POST">
  <div class="col-md-4">
    <label for="validationCustom00" class="form-label">ID</label>
    <input type="text" class="form-control" id="validationCustom00" value="" required name="Id">
    <div class="invalid-feedback">
      Ingrese el Id
    </div>
    <div class="valid-feedback">
      muy bien!!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre">
    <div class="invalid-feedback">
      Ingrese su nombre
    </div>
    <div class="valid-feedback">
      muy bien!!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required name="apellido">
    <div class="invalid-feedback">
      Ingrese su apellido
    </div>
    <div class="valid-feedback">
      muy bien!!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="usuario">
      <div class="invalid-feedback">
        Ingrese un usuario
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="validationCustom03" required name="contraseña">
    <div class="invalid-feedback">
      Por favor ingrese una contraseña
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary form-control" type="submit" id="registro" name="registro">Registrarme</button>
  </div>
</form>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="container2">
    
    <p>IM Villavicencio 2020 - 2022</p>
    <p>todos los derechos reservados</p>

  </footer>

  <script type="text/javascript" src="js/validacion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>