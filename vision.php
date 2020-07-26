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

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="catedra_empren.php">Cátedra de emprendimiento</a>
  <a href="elevator_pitch.php">Elevator Pitch</a>
  <a href="#">Feria Empresarial</a>
  <a href="opcion_gado.php">Opción de Grado- Creación de Empresa</a>
  <a href="#">Proyecto Social</a>
  <a href="#">Consultorio</a>
  <a href="#">Asesoría</a>
  <a href="#">Extensión</a>
  <a href="#">Clúster Fami-pyme</a>
  <a href="#">Innovación</a>
  <a href="formularios.php">registro de formularios</a>
</div>

<div id="main">
<div class="header">
	<img src="img/ulibrelogo2.png">
	<h1></h1>
	<button class="openbtn" onclick="openNav()">☰</button> 
	
</div>
   
<div class="itemcenter-nobgcolor">

		<img src="img/objetivos-objetivo-aspiracion-papel-perforado-grafico_53876-41397.png" alt="" style="border-radius: 100px; margin-bottom: 15px;
		width: 5px; height: 400px;">
	
</div>  
<div class="column-centertext">
    
  <h2>NUESTRA VISIÓN</h2>
  <p>Ser un Centro de proyección económica y 
	social, en el que participa la comunidad de 
	la Universidad Libre en el emprendimiento 
	y el empresarismo, con el fin de desarrollar 
	proyectos tecnológicos e innovadores, así 
	como asesorar las mipymes del país, 
	extendiendo sus servicios dentro de su 
	entorno, promoviendo la creación de 
	Empresa y Proyectos sustentables con la 
	comunidad, que respondan a las 
	necesidades de la población con miras a 
	mejorar la calidad de vida.
	
	</p>

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
   
</body>
</html> 