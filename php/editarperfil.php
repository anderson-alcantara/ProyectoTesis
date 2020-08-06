<?php 

	require_once "conexion.php";
	$conexion=conexion();
		$usuario=$_POST['correo_electronico'];
		$password=$_POST['clave'];
		$nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        
                // $sql = "UPDATE tb_usuarios SET nombres='$nombres',apellidos='$apellidos',
                // calve='$password' WHERE correo_electronico='$usuario'";
                $sql = "UPDATE tb_usuarios SET nombres='$nombres',apellidos='$apellidos',clave='$password' WHERE correo_electronico='$usuario'";
if(mysqli_query($conexion, $sql)){
    echo 1;
} else {
    echo 0;
}
 ?>