<?php 
	session_start();
	include_once 'model/conexion.php';
	$Matricula = $_POST['Matricula'];
	$TipoUsuario = $_POST['TipoUsuario'];
	$Nombre = $_POST['Nombre'];
	$ApellidoP = $_POST['ApellidoP'];
	$ApellidoM = $_POST['ApellidoM'];

	$Password = $_POST['Passwoord'];
	$sentencia = $bd->prepare('select * from usuarios where 
								Matricula = ? and Passwoord = ?;');

	$sentencia->execute([$Matricula, $Password]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');

		
	}elseif($sentencia->rowCount() == 1){

			
				$_SESSION['Matricula'] = $datos->Matricula;
				$_SESSION['Nombre'] = $datos->Nombre;
				$_SESSION['TipoUsuario'] = $datos->TipoUsuario;
				$_SESSION['ApellidoP'] = $datos->ApellidoP;
				$_SESSION['ApellidoM'] = $datos->ApellidoM;

				if($_SESSION['TipoUsuario'] == "AL"){
					header('Location: principalAL.php');
				}
				else{
					header('Location: principal.php');
				}
	}
?>