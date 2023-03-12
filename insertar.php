<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$id = $_POST['id'];
	$Asignatura = $_POST['Asignatura'];
	$Grupo = $_POST['Grupo'];
	$Profesor = $_POST['Profesor'];
	$Turno = $_POST['Turno'];
	$Semestre = $_POST['Semestre'];
	$Estatus = $_POST['Estatus'];

	$sentencia = $bd->prepare("INSERT INTO inscripcion(id,Asignatura,Grupo,Profesor,Turno,Semestre,Estatus) VALUES (?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$id,$Asignatura,$Grupo,$Profesor,$Turno,$Semestre,$Estatus]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: principal.php');
	}else{
		echo "Error";
	}
?>