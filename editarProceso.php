<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'model/conexion.php';
	$id = $_POST['id'];
	$Asignatura = $_POST['Asignatura'];
	$Grupo = $_POST['Grupo'];
	$Profesor = $_POST['Profesor'];
	$Turno = $_POST['Turno'];
	$Semestre = $_POST['Semestre'];
	$Estatus = $_POST['Estatus'];

	$sentencia = $bd->prepare("UPDATE inscripcion SET Asignatura = ?, Grupo = ?, Profesor = ?, 
												Turno = ?, Semestre = ?,Estatus = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$Asignatura,$Grupo,$Profesor,$Turno,$Semestre, $Estatus,$id]);

	if ($resultado === TRUE) {
		header('Location: principal.php');
	}else{
		echo "Error";
	}
?>