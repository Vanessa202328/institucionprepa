
<?php 
	session_start();
	if (isset($_SESSION['Matricula'])) {

		
		header('Location: principal.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion Preparatoria</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/estilos_boton.css" media="all">
</head>
<body>
<center>
		<h2 class="titulo">____________________________________</h2>
		<h2 class="titulo">!!! INICIAR SESION !!!</h2>
		<h2 class="titulo">____________________________________</h2>
		<h2 class="titulo"></h2>

	
		<form method="POST" action="loginProceso.php">
			
			<label>MATRICULA: </label>
			<input type="text" name="Matricula">
			<br>
			<label>PASSWORD: </label>
			<input type="password" name="Passwoord">
			<br>
			<input type="submit" value="Iniciar sesión">
		</form>

		<a href="index.html">Regreso a Inicio</a>
	</center>
</body>
</html>