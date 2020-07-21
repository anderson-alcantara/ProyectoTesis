function openNav() {

    var mediaqueryList = window.matchMedia("(min-width: 800px)");
    if(mediaqueryList.matches) {
            document.getElementById("mySidebar").style.width = "15%";
    document.getElementById("main").style.width = "85%";
    document.getElementById("main").style.marginLeft = "200px";
      }else{
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("main").style.width = "75%";
        document.getElementById("main").style.marginLeft = "190px";

      }
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.width = "100%";
    document.getElementById("main").style.marginLeft = "0";
  }
  function onOpenAbout(){
    window.location.href="quienes_somos.php"
  }
  function onOpenMision(){
    window.location.href="mision.php"
  }
  function onOpenVision(){
    window.location.href="vision.php"
  }

  function onOpenform(form){
    var frame=document.getElementById('frameforms');
    switch(form){
      case "f_diagAsesoria":
        frame.src="forms/f_diagAsesoria.php";
        break;
        case "f_inicioAsesoriaEmp":
        frame.src="forms/f_inicioAsesoriaEmp.php";
        break;
        case "f_EntregaAsesoria":
        frame.src="forms/f_EntregaAsesoria.php";
        break;
        case "f_DiagAppOfimatica":
        frame.src="forms/f_DiagAppOfimatica.php";
        break;
        case "f_diagAsesoria":
        frame.src="forms/f_diagAsesoria.php";
        break;
        case "f_AnalisisDisePtrabajo":
          frame.src="forms/f_AnalisisDisePtrabajo.php";
          break;
        case "f_perfilacion":
        frame.src="forms/f_perfilacion.php";
        break;
        case "f_analisis":
          frame.src="forms/f_analisis.php";
          break;
        case "f_balance":
          frame.src="forms/f_balance.php";
          break;
          case "f_ishikawa":
            frame.src="forms/f_ishikawa.php";
            break;


    }
    
  }
  

