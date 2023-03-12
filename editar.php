<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: principal.php');
	}

	


	if (!isset($_SESSION['Nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['Nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM inscripcion WHERE id = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Asignacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/estilos_boton.css" media="all">
</head>
<body>
	<center>
		<h3>Editar Asignacion:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="id" value="<?php echo $persona->id; ?>"></td>
				</tr>
				<tr>
					<td>Asignatura: </td>
					<td><input type="text" name="Asignatura" value="<?php echo $persona->Asignatura; ?>"></td>
				</tr>
				<tr>
					<td>Grupo: </td>
					<td><input type="text" name="Grupo" value="<?php echo $persona->Grupo; ?>"></td>
				</tr>
				<tr>
					<td>Profesor: </td>
					<td><input type="text" name="Profesor" value="<?php echo $persona->Profesor ?>"></td>
				</tr>
				<tr>
					<td>Turno: </td>
					<td><input type="text" name="Turno" value="<?php echo $persona->Turno; ?>"></td>
				</tr>
				<tr>
					<td>Semestre: </td>
					<td><input type="text" name="Semestre" value="<?php echo $persona->Semestre; ?>"></td>
				</tr>
				<tr>
					<td>Estatus: </td>
					<td><input type="text" name="Estatus" value="<?php echo $persona->Estatus; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
					<td colspan="2"><input type="submit" value="EDITAR ASIGNATURA"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>