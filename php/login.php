<?php 


	session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$usuario=$_POST['correo_electronico'];
		$pass=$_POST['clave'];
		$sql="SELECT * from estudiantes 
				where correo_electronico='$usuario' and clave='$pass'";
		$result=mysqli_query($conexion,$sql);
		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 5;
		}


 ?>