<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body>

<div class="login-page">
            <div class="form">
                <img src="img/ceideul_logo.png">
              <form class="login-form">
                <input type="text" name="nombre" id="usuario" placeholder="Usuario"/>
                <input type="password" id="password" name="clave" placeholder="Clave"/>
                <button type="button" id="entrarSistema">Ingresar</button> 
                <p class="message">¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>    
              </form>
            </div>
          </div>

<br><br><br>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="correo_electronico=" + $('#usuario').val() + 
					"&clave=" + $('#password').val();
console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==1){
								window.location="home3.php";
							}else{
								alertify.alert('Hello World!').setHeader('<em>  </em> '); ;
							}
						}
					});
		});	
	});
</script>