<?php  
	if (!isset($_POST['oculto2'])) {
		exit();
	}

	include 'model/conexion.php';
	$id = $_POST['id'];
    $Asignatura = $_POST['Asignatura'];
    $Grupo = $_POST['Grupo'];
	$Matricula = $_POST['Matricula'];
	$Profesor = $_POST['Profesor'];
	$Semestre = $_POST['Semestre'];
	$Estatus = $_POST['Estatus'];


	$sentencia2 = $bd->prepare("INSERT INTO preinscripcion(id,Asignatura,Grupo,Matricula,Profesor,Semestre,Estatus) VALUES (?,?,?,?,?,?,?);");
	$resultado2 = $sentencia2->execute([$id,$Asignatura,$Grupo,$Matricula,$Profesor,$Semestre,$Estatus]);

	if ($resultado2 === TRUE) {
		//echo "Insertado correctamente";
		header('Location: registro_preins.php');
	}else{
		echo "Error";
	}
?>