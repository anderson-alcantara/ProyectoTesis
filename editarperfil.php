<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style_home.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:index.php");
	 exit(); 
 }
?>
</head>
<body>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="catedra_empren.php" style="margin-top:50px;">Cátedra de emprendimiento</a>
  <a href="elevator_pitch.php">Elevator Pitch</a>
  <a href="#">Feria Empresarial</a>
  <a href="opcion_gado.php">Opción de Grado- Creación de Empresa</a>
  <a href="#">Proyecto Social</a>
  <a href="#">Consultorio</a>
  <a href="#">Asesoría</a>
  <a href="#">Extensión</a>
  <a href="#">Clúster Fami-pyme</a>
  <a href="#">Innovación</a>
  <a onclick="openFormularios('<?php echo $_SESSION['tipo_usuario']; ?>')">registro de formularios</a>
</div>

<div id="main">
<div class="header">
	<img src="img/ulibrelogo2.png">
	
	<nav class="navbar-user-top full-reset"  >
            <ul>
			<li><button class="openbtn" onclick="openNav()">☰</button></li>
			<li><a href="" id="txtnombre" style="font-size: 15px">Nombre</a>
					<ul>
						<li><a href="editarperfil.php" style="font-size: 15px" >Editar perfil</a></li>
						<li><a href="editarperfil.php" style="font-size: 15px" >Cerrar Sesión</a></li>
						
						</li>
					</ul>
				</li>
					
			</ul>  

			
			

        </nav>
	
</div>
   
<div class="itemcenter-nobgcolor">

</div>  
<div class="input-editarperfil">
<label for="txtnombreperfil">Nombres</label>
	<input type="text" id="txtnombreperfil" name="txtnombreperfil" placeholder="Tu Nombre..." disabled >
	<button onclick="enbalecontrol('txtnombreperfil')">Editar</button>
	<label for="txtapellidosperfil">Apellidos</label>
	<input type="text" id="txtapellidosperfil" name="txtapellidosperfil" placeholder="Tus Apellidos..."disabled >
	<button onclick="enbalecontrol('txtapellidosperfil')">Editar</button>
	<label for="txtpass1">Contraseña</label>
	<input type="password" id="txtpass1" name="txtpass1"  placeholder="Contrseña..." disabled >
	<button onclick="changepass()">Editar</button>
	<label for="txtpass2" id="lblpass2" style="visibility:hidden">Repetir contraseña</label>
	<input type="hidden" id="txtpass2"   name="txtpass2" style="width:90%;" placeholder="Repetir contraseña..." hidden>
	
	</div>
	<div class="itemcenter-nobgcolor">
		<div class="acept-button">
		<button id="btn_confirm">Guardar cambios</button>
		</div>

</div>  

<!--
<div class="container-content">
	<div class="row">

		<div class="column"style="margin-left: 20px;">
			<img src="img/manos-negocios-unieron-trabajo-equipo_53876-30575.jpg"  alt="" style="border-radius: 80px;">
		  <h2>NUESTRA MISIÓN</h2>
		</div>
	  </div>
	  <div class="itemcenter-nobgcolor">
		<div class="column" style="max-width: 50%;">
		   <img src="img/objetivos-objetivo-aspiracion-papel-perforado-grafico_53876-41397.png"  alt="" style="border-radius: 80px;">
		   <h2>NUESTRA VISIÓN</h2>
		</div>
	</div> 
</div>
-->

<footer>
	<p>Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre(CEIDEUL)</p>
	<p>E-mail:ceideul@unilibre.edu.co</p>
	<p>TEL:4232700 ext. 1812</p>
	
  </footer>



<script src="js/home.js"></script>
<script>
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
document.getElementById("txtnombreperfil").value = '<?php echo $_SESSION['nombres']?>';
document.getElementById("txtapellidosperfil").value = '<?php echo $_SESSION['apellidos']?>';
document.getElementById("txtpass1").value = '<?php echo $_SESSION['clave']?>';

function enbalecontrol(idcontrol){
	console.log(idcontrol);
	 var txtcontrol=document.getElementById(idcontrol);
	 if(txtcontrol.disabled){
		txtcontrol.disabled = false;
}else{
	txtcontrol.disabled = true;
	if(idcontrol=="txtnombreperfil"){
		document.getElementById("txtnombreperfil").value = '<?php echo $_SESSION['nombres']?>';
	}else if(idcontrol=="txtapellidosperfil"){
		document.getElementById("txtapellidosperfil").value = '<?php echo $_SESSION['apellidos']?>';
	}
}
};
function changepass(){
	
	$("#lblpass2").css("visibility", "visible");
	document.getElementById("txtpass2").type = 'password';
	document.getElementById("txtpass1").disabled = false;

}
$(document).ready(function(){
		$('#btn_confirm').click(function(){
			if($('#txtnombreperfil').val()==""){
				alertify.alert("Debes agregar tu nombre").setHeader('<em>  </em> '); 
				return false;
			}else if($('#txtapellidosperfil').val()==""){
				alertify.alert("Debes agregar tus apellidos").setHeader('<em>  </em> '); 
				return false;
			}
		else if($('#txtpass1').val()==""){
				alertify.alert("Debes agregar una contraseña").setHeader('<em>  </em> '); 
				return false;
			}
			else if(($('#txtpass1').val()!==$('#txtpass2').val()) &&($("#lblpass2").css("visibility")!=='hidden')){
				alertify.alert("las contraseñas no coinciden").setHeader('<em>  </em> '); 
				return false;
			}
alert("hola");
			var cadena="correo_electronico=" + '<?php echo $_SESSION['user']; ?>' + 
					"&nombres=" + $('#txtnombreperfil').val()+"&apellidos="
					+ $('#txtapellidosperfil').val()+"&clave="+ $('#txtpass1').val();

console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/editarperfil.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==1){
						

								alertify.alert('Usuario modificado con éxito').set('onok', function(closeEvent){ window.location="index.php";
									<?php
 ?>} ).setHeader('<em>  </em> '); 
							}else{
								alertify.alert('error al modificar').setHeader('<em>  </em> '); ;
							}
						}
					});
		});	
	});

 </script>     
</body>
</html> 