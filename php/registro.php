<?php 

	require_once "conexion.php";
	$conexion=conexion();
		$tipousuario=$_POST['tipousuario'];
		$usuario=$_POST['correo_electronico'];
		$password=$_POST['password'];

		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into estudiantes (correo_electronico,clave,tipo_usuario)
				values ('$usuario','$password','$tipousuario')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from estudiantes 
				where correo_electronico='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>