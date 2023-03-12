<?php  
		//ABRIREMOS EL RESULTADO DE TABLA INSCRIPCIONES;
	session_start();
	if (!isset($_SESSION['Nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['Nombre'])){
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM preinscripcion;");
		$inscripcion = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}


	
?>

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
                <li><a href="registro_preins.php">REGISTRARSE</a></li>
				<li><a href="cerrar.php">Salir</a></li>
            </ul>
        </nav>
</head>
<body>

<!-- MOSTRAR INFORMACION DE LA BASE DE DATOS -->
<center>
	<h3>Lista de PREINSCRIPCION</h3>
			<table>
				<tr>
					<td>id</td>
					<td>Asignatura</td>
					<td>Grupo</td>
					<td>Matricula</td>
					<td>Profesor</td>
					<td>Semestres</td>
					<td>Estatus</td>
				</tr>

				<?php 
					foreach ($inscripcion as $dato) {
						?>
						<tr>
						<td><?php echo $dato->id; ?></td>
							<td><?php echo $dato->Asignatura; ?></td>
							<td><?php echo $dato->Grupo; ?></td>
							<td><?php echo $dato->Matricula; ?></td>
							<td><?php echo $dato->Profesor; ?></td>
							<td><?php echo $dato->Semestre; ?></td>
							<td><?php echo $dato->Estatus; ?></td>
						</tr>
						<?php
					}
				?>
				
			</table>
</center>





<center>
		<!-- inicio insert -->
		<hr>
		<h3>REGISTRO DE PREINSCRIPCION:</h3>
		<form method="POST" action="insertar_preins.php">
			<table>
				<tr>
					<td>Registro ID: </td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>ASIGNATURA: </td>
					<td><input type="text" name="Asignatura"></td>
				</tr>
				<tr>
					<td>GRUPO: </td>
					<td><input type="text" name="Grupo"></td>
				</tr>
				<tr>
					<td>MATRICULA: </td>
					<td><input type="text" name="Matricula"></td>
				</tr>
				<tr>
					<td>PROFESOR: </td>
					<td><input type="text" name="Profesor"></td>
				</tr>
				<tr>
					<td>SEMESTRE: </td>
					<td><input type="text" name="Semestre"></td>
				</tr>
				<tr>
					<td>ESTATUS: </td>
					<td><input type="text" name="Estatus"></td>
				</tr>
                
				<input type="hidden" name="oculto2" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="PREINSCRIPBIR ASIGNATURA"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>