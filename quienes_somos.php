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
<img src="img/Docentes CEIDEUL.png" alt=""></div>  
<div class="column-centertext">
    
  <h2>¿QUIÉNES SOMOS?</h2>
  <p>CEIDEUL es el Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre. Este órgano, se encarga de acompañar, fomentar y asesorar el intraemprendimiento en la comunidad unilibrista, estudiantes, egresados y comunidad en general con miras a apoyar proyectos creativos e innovadores, generando ideas y modelos de negocio, con el fin de implementar recursos que permitan patrocinar los proyectos de emprendimiento e innovación por medio de la incubadora de empresa, spin off, capital semilla, capital de riesgo o ángel inversionista</p>

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