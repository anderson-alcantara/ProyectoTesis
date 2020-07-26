<?php 

	require_once "conexion.php";
	$conexion=conexion();
		$tipousuario=$_POST['tipousuario'];
		$usuario=$_POST['correo_electronico'];
		$password=$_POST['password'];
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];

		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into tb_usuarios (correo_electronico,clave,tipo_usuario,nombres,apellidos)
				values ('$usuario','$password','$tipousuario','$nombres','$apellidos')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from tb_usuarios 
				where correo_electronico='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				
				return 1;
			}else{
				return 0;
			}
		}

 ?>