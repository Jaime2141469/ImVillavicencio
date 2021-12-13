<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Pagina Empleados</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="empleado.php">Inicio</a>
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
        <li class="nav-item">
        	<a class="nav-link" href="plataforma.php">Plataforma de la empresa</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1>Lista de reuniones</h1>
<br>
<div class="container">
	
	<p>Cantidad de Eventos o Reuniones y su Día :</p>

	<table class="table table-success table-striped">

		<thead>
			<tr>
				<th scope="col">Dia</th>
				<th scope="col">Nº</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th scope="row">Lunes</th>
				<th>5</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Martes</th>
				<th>4</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Miercoles</th>
				<th>5</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Jueves</th>
				<th>2</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Viernes</th>
				<th>1</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Sabado</th>
				<th>0</th>
			</tr>
		</tbody>

		<tbody>
			<tr>
				<th scope="row">Domingo</th>
				<th>0</th>
			</tr>
		</tbody>

	</table>

</div>

<br>
<h1>Bienvenido Gerente a Tu Cuentas de Pagos y Fiador</h1>
<br>

<div class="container">
	
	<table class="table table-dark table-hover">
		
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Meses sin pagar</th>
				<th scope="col">Total del pago</th>
			</tr>
		</thead>

		<tbody>
			
			<tr>
				<th scope="row">1</th>
				<th>Jill</th>
				<th>Sanchez</th>
				<th>1</th>
				<th>$120.500</th>
			</tr>

			<tr>
				<th scope="row">2</th>
				<th>Eve</th>
				<th>Perez</th>
				<th>2</th>
				<th>$120.500</th>
			</tr>

			<tr>
				<th scope="row">3</th>
				<th>Adam</th>
				<th>Marin</th>
				<th>5</th>
				<th>$361.500</th>
			</tr>

			<tr>
				<th scope="row">4</th>
				<th>Tomas</th>
				<th>Sanchez</th>
				<th>7</th>
				<th>$241.000</th>
			</tr>

			<tr>
				<th scope="row">5</th>
				<th>Mike</th>
				<th>Silva</th>
				<th>7</th>
				<th>$843.500</th>
			</tr>

		</tbody>

	</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>