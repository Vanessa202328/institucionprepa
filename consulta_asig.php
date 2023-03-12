<?php  
		//ABRIREMOS EL RESULTADO DE TABLA INSCRIPCIONES;
	session_start();
	if (!isset($_SESSION['Nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['Nombre'])){
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM inscripcion;");
		$inscripcion = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Universidad | Preparatoria CDMX </title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/estilos_boton.css" media="all">
	<meta charset="utf-8">
	<nav class="navegacion">
            <ul class="menu">
                <li><a href="index.html">INICIO</a></li>
				<li><a href="consulta_asig.php">CONSULTAR ASIGNATURA</a></li>
				<li><a href="cerrar.php">Salir</a></li>
            </ul>
        </nav>
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['Nombre'] ?> <?php echo $_SESSION['ApellidoP'] ?> <?php echo $_SESSION['ApellidoM'] ?></h1>
		<h1>Tipo de Usuario: <?php echo $_SESSION['TipoUsuario'] ?> Matricula:<?php echo $_SESSION['Matricula'] ?></h1>
		
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de Inscripciones</h3>
		<table>
			<tr>
				<td>id</td>
				<td>Asignatura</td>
				<td>Grupo</td>
				<td>Profesor</td>
				<td>Turno</td>
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
						<td><?php echo $dato->Profesor; ?></td>
						<td><?php echo $dato->Turno; ?></td>
						<td><?php echo $dato->Semestre; ?></td>
						<td><?php echo $dato->Estatus; ?></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		</form>
		<!-- fin insert-->

	</center>
</body>
</html>