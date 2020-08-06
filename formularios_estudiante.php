<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/stylehome.css">
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/crbnMenu.js"></script>
    <script src="js/home.js"></script>
    <?php
 session_start();
 if(!isset($_SESSION['user'])  ||  $_SESSION['tipo_usuario']!=='Estudiante'){
	 header("Location:index.php");
	 exit(); 
 }
?>
    <script>
        if ($(window)) {
            $(function () {
                $('.menu').crbnMenu({
                    hideActive: true
                });
            });
        }
    </script>
</head>
<body>
    <div class="menu-container">
        <div class="crbnMenu">
            <div class="link-stack">
                <span class="brand">Sistema CEIDEUL</span>
                <a id="nav-toggle" class="nav-toggle">
                    <span></span>
                </a>
            </div>
            <ul class="menu">
                <li style="background-color: #1f1e1efd;">
                    <a  style="pointer-events: none; cursor: default;">Asesoría y Consultoría</a>
                </li>


                <li>
                    <a class="nav-link" href="#" ><span>asesoría y consultoría empresarial</span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    <ul>
                        <li>
                            <a href="#" onclick="onOpenform('f_diagAsesoria')" style="cursor: pointer;" onclick="onOpenform('f_diagAsesoria')">Formato De Diagnostico Para Asesoría Empresarial  </a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_inicioAsesoriaEmp')" style="cursor: pointer;">Formato De Inicio De Asesoría Empresarial</a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_EntregaAsesoria')" style="cursor: pointer;">Formato De Entrega De Asesoría</a>
                        </li>
                    </ul>
                </li>
                <li>


                    <a class="nav-link" href="#">herramientas para la asesoría y consultoría empresarial<span></span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    <ul>

                        <li>
                            <a href="#" onclick="onOpenform('f_DiagAppOfimatica')" style="cursor: pointer;">Formato De Diagnostico De Aplicaciones Ofimaticas E Informatica</a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_AnalisisDisePtrabajo')" style="cursor: pointer;">Formato De Análisis Para El Diseño De Puestos De Trabajo</a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_perfilacion')" style="cursor: pointer;">Formato De Perfilación De Puestos De Trabajo</a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_analisis')" style="cursor: pointer;">Formato De análisis Del Entorno</a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_balance')" style="cursor: pointer;">Formato De Balance Scorecard</a>
                        </li>
                        <li>
                            <a href="#">Formato De Identificación De Mercado </a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('f_ishikawa')" style="cursor: pointer;">Formato De Diagrama De Ishikawa / Espina De Pescado</a>
                        </li>
                        <li>
                            <a href="#">Formato De Caracterización De Procesos</a>
                        </li>
                        <li>
                            <a href="#">Formato De Evaluación De Marco Estratégico</a>
                        </li>
                        <li>
                            <a href="#">Formato De Diagnostico Interno</a>
                        </li>
                        <li>
                            <a href="#">Formato De Matriz Dofa </a>
                        </li>
                        <li>
                            <a href="#">Formato De Cadena De Valor</a>
                        </li>
                        <li>
                            <a href="#">Formato De Modelo Canvas</a>
                        </li>
                        <li>
                            <a href="#">Formato De Solicitud De Acciones Preventivas Y De Mejora</a>
                        </li>
                    </ul>
                </li>



                <li style="background-color: #1f1e1efd;">
                    <a  style="pointer-events: none; cursor: default;">Opción de Grado</a>
                </li>

                <li>
                    <a class="nav-link" href="#" ><span>Opciones De Grado CEIDEUL</span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    <ul>
                        <li>
                            <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato De Inscripción  Para  Opción De Grado Creación De Empresa </a>
                        </li>
                        <li>
                            <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato De Recurso Estudiante / Externo </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link" href="#" ><span>Opciones De Grado Creación De Empresa</span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    <ul>
                        <li>
                            <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato De Asignación De Tutor Para Proyecto De Grado</a>
                        </li>
                        
                        <li>
                            <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato De Evaluación Proyecto De Grado “creación De Empresa” </a>
                        </li>
                    </ul>
                </li>


                <li style="background-color: #1f1e1efd;">
                    <a  style="pointer-events: none; cursor: default;">Cátedra De emprendimiento</a>
                </li>

            <li>
                <a>Formato De Compromiso a La Catedra De Emprendimiento</a>
            </li>    
            <li>
                <a class="nav-link" href="#" ><span>Elevator Pitch</span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                <ul>
                    <li>
                        <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato De Banco De Ideas De Negocio</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="#" ><span>Ideas De Negocio</span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                <ul>
                    <li>
                        <a href="#" onclick="onOpenform('')" style="cursor: pointer;">Formato Cátedra De Emprendimiento- Ideas De Negocio</a>
                    </li>
                </ul>
            </li>




            <li style="background-color: #1f1e1efd;">
                <a  style="pointer-events: none; cursor: default;">Feria Empresarial</a>
            </li>
            <li>
                <a>Formato Inscripción Feria Empresarial</a>
            </li>    
            <li>
                <a>Formato Protocolo Expositores Feria Empresarial</a>
            </li>  
            <li>
                <a> Formato De Inventario Feria Empresarial</a>
            </li>

            <li>


                <a class="nav-link" href="#">Evaluación Empresarial<span></span> <span class="menu-toggle"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                <ul>

                    
                    <li>
                        <a href="#">Formato De Evaluación Feria Empresarial</a>
                    </li>
                    <li>
                        <a href="#">Formato De Satisfacción Del Expositor</a>
                    </li>
                </ul>
            </li>


            <li style="background-color: #1f1e1efd;">
                <a  style="pointer-events: none; cursor: default;">Práctica Empresarial</a>

            </li>
            <li>
                <a href="#">Formato De Inicio De Practica Empresarial</a>
            </li>
            <li>
                <a href="#">Formato De Concepto Docente Experto Disciplinar Práctica Empresarial</a>
                
            </li>
            <li>
                <a href="#">Formato De Entrega Final De Trabajo De  Práctica Empresarial</a>
            </li>
            <li>
                <a href="#">Formato De Evaluación Entrega Final Practica Empresarial</a>
            </li>








        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset" >
            <ul>
				<li><a href="">Inicio</a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu4</a></li>
                        <li><a href="">Submenu5</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>

       
        </nav>
        <iframe src="forms/form_inicio.html" id="frameforms" width="100%" height="100%"></iframe>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>

    </div>
</body>
<script>
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';

 </script>  
</html>