<?php 
	session_start();
	require_once "conexion.php";
	$conexion=conexion();
		$usuario=$_POST['correo_electronico'];
		$pass=$_POST['clave'];
		$sql="SELECT * from tb_usuarios 
				where correo_electronico='$usuario' and clave='$pass'";
		$result=mysqli_query($conexion,$sql);
		if(mysqli_num_rows($result) > 0){
			buscatipo($usuario,$conexion);
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 5;
		}

		function buscatipo($user,$conexion){
			$sql2="SELECT * from tb_usuarios 
				where correo_electronico='$user'";
			$result2=mysqli_query($conexion,$sql2);

			if(mysqli_num_rows($result2) > 0){
				
				$row = $result2->fetch_array();
				$tipo_usuario=$row['tipo_usuario'];
				$nombres=$row['nombres'];
				$apellidos=$row['apellidos'];
				$_SESSION['tipo_usuario']=$tipo_usuario;
				$_SESSION['nombres']=$nombres;
				$_SESSION['apellidos']=$apellidos;

			}
		}
 ?>
