<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style_home.css">
<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:index.php");
	 exit(); 
 }
?>
</head>
<body>
<!--hola mundo-->
<!--HOLA -->
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
						<li><a onclick="cerrarsesion()" style="font-size: 15px" >Cerrar Sesión</a></li>
						
						</li>
					</ul>
				</li>
					
			</ul>  

			
			

        </nav>
	
</div>
   
<div class="itemcenter-nobgcolor">

		<img src="img/catedra.png" alt="" style="border-radius: 100px; margin-bottom: 15px;">
	
</div>  
<div class="column-centertext">
    
  <h2>CÁTEDRA DE EMPRENDIMIENTO</h2>
  <p>Es un espacio multidisciplinar que busca el desarrollo del SER a través del estímulo de habilidades y competencias que permitan a los estudiantes crear y ejecutar ideas de negocio viables o intraemprendimientos que le aporten a su proyecto de vida.

	</p>

</div>
<div class="mainitem" id="aboutbox" onclick="">
	<img src="img/disenadores-graficos-reunion_1170-2002.png">
	<h1>DESARROLLO DE COMPETENCIAS BLANDAS</h1>
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
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos'].' '.'▼'; ?>';
</script>
</body>
</html> 