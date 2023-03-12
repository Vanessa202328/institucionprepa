
<!DOCTYPE html>
<html lang="es">
<head>
    <!--REGISTRAR USUARIOS NUEVOS TIPO AL O SE-->   
	<title>Universidad | Preparatoria CDMX </title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/estilos_boton.css" media="all">
	<meta charset="utf-8">
	<nav class="navegacion">
            <ul class="menu">
                <li><a href="index.html">INICIO</a></li>
                <li><a href="registro_usu.php">REGISTRARSE</a></li>
				<li><a href="login.php">INICIAR SESION</a></li>
				<li><a href="cerrar.php">Salir</a></li>
            </ul>
        </nav>
</head>
<body>
<center>
		<!-- inicio insert -->
		<hr>
		<h3>REGISTRAR USUARIOS:</h3>
		<form method="POST" action="insertar_usu.php">
			<table>
				<tr>
					<td>Registro ID: </td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>MATRICULA: </td>
					<td><input type="text" name="Matricula"></td>
				</tr>
				<tr>
					<td>NOMBRE: </td>
					<td><input type="text" name="Nombre"></td>
				</tr>
				<tr>
					<td>APELLIDO PATERNO: </td>
					<td><input type="text" name="ApellidoP"></td>
				</tr>
				<tr>
					<td>APELLIDO MATERNO: </td>
					<td><input type="text" name="ApellidoM"></td>
				</tr>
				<tr>
					<td>TURNO: </td>
					<td><input type="text" name="Turno"></td>
				</tr>
				<tr>
					<td>TIPO DE USUARIO: </td>
					<td><input type="text" name="TipoUsuario"></td>
				</tr>
                <tr>
					<td>PASSWORD: </td>
					<td><input type="password" name="Passwoord"></td>
				</tr>
                <tr>
					<td>CONFIRMAR PASS: </td>
					<td><input type="password" name="Passwoord1"></td>
				</tr>
				<input type="hidden" name="oculto1" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="Registrar USUARIO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>