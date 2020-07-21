<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>

<div class="login-page">
          <div class="bolas">
            <div class="form" >
                <img src="img/ceideul_logo.png">
              <form class="login-form" id="form1">
                <input type="text" placeholder="E-mail" id="correo_electronico" required/>
                <input type="password" placeholder="Clave" id="password" required/>
                <input type="password" placeholder="Repetir clave" id="password2" required/>
                <select name="tipousuario" id="selectTipo" class="select-css"
                style="border-bottom: 100px;" autocomplete="off">
                  <option value="value1" selected>Tipo de Usuario</option>
                  <option value="value2">Estudiante</option>
                  <option value="value3">Administrativo</option>

                </select>
                <button type="button" style="margin-top: 20px;" id="registrarNuevo" >Ingresar</button> 
              </form>
            </div>
          </div>
          </div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#correo_electronico').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la contraseña");
				return false;
			}else if($('#password').val()!==$('#password2').val()){
				alertify.alert("las contraseñas no coinciden");
				return false;
			}
			else if($("#selectTipo option:selected" ).text()=="Tipo de Usuario"){
				alertify.alert("Debes agregar el tipo de usuario");
				return false;
			}
			

			cadena="correo_electronico=" + $('#correo_electronico').val() +
					"&password=" + $('#password').val() +
					"&tipousuario=" + $("#selectTipo option:selected").text();
				console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#form1')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

