<?php  
	if (!isset($_POST['oculto1'])) {
		exit();
	}

	include 'model/conexion.php';
	$id = $_POST['id'];
	$Matricula = $_POST['Matricula'];
	$Nombre = $_POST['Nombre'];
	$ApellidoP = $_POST['ApellidoP'];
	$ApellidoM = $_POST['ApellidoM'];
	$Turno = $_POST['Turno'];
	$TipoUsuario = $_POST['TipoUsuario'];
    $Passwoord = $_POST['Passwoord'];

	$sentencia1 = $bd->prepare("INSERT INTO usuarios(id,Matricula,Nombre,ApellidoP,ApellidoM,Turno,TipoUsuario,Passwoord) VALUES (?,?,?,?,?,?,?,?);");
	$resultado1 = $sentencia1->execute([$id,$Matricula,$Nombre,$ApellidoP,$ApellidoM,$Turno,$TipoUsuario,$Passwoord]);

	if ($resultado1 === TRUE) {
		//echo "Insertado correctamente";
		header('Location: principal.php');
	}else{
		echo "Error";
	}
?>