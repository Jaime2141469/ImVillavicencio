<!DOCTYPE html>

<?php

session_start();
if (!isset($_SESSION['nombre'])) {
	header('Location:../Usuarios.php');
}elseif (isset($_SESSION['nombre'])) {
	require '../ModeloDao/DaoE.php';
    require '../ModeloDto/DtoE.php';
    require '../utilidades/conexion.php';
}else {
	echo "ocurrio un error";
}

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Pagina Usuarios</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="pagina.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="compensar.php">Compensar</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="agenda.php">Agenda</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="../Contacto.php">Contacto</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
		<div class="text-center"> <a  href="../procesos/cerrar.php" class="btn btn-outline-danger">Cerrar</a> <br>
      </form>
    </div>
  </div>
</nav>

<h1>Bienvenidos Usuario <?php echo $_SESSION['nombre']?></h1>

<div class="container">
	
	<p>Aqui va a poder navegar atravez de las distintas eps, las cualesson con las que tenemos convenio</p>
	<p>Las Eps son las siguentes</p>

	<table class="table table-dark table-hover">
		
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th scope="row">1</th>
				<th >Compensar</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">2</th>
				<th >Nueva EPS</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">3</th>
				<th >Coomeva</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">4</th>
				<th >EPS_Sura</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">5</th>
				<th >MediMas</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">6</th>
				<th >SaludTotal</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">7</th>
				<th >Eps_Sanitas</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">8</th>
				<th >FamiSanar</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">9</th>
				<th >CoopiDrogas</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">10</th>
				<th >CooSalud</th>
			</tr>
		</tbody>

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