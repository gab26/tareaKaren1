<?php
    session_start();
    //Siempre se va a renderizar algo asi que se carga el renderizador
    require_once("vistas/renderizador.php");
    //Siempre es bueno tener utilidades a mano
    require_once("controladores/utilidades.php");
    // index.php?page=idPage
    $page = "error";
    if(!isset($_GET["page"])){
        $page = "index";
    }else{
        $page = $_GET["page"];
    }
    //determinado el metodo utilizado
    $method = "get";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $method="post";
    }
    //$pageData
    //en este arreglo se iran depositando toda la información necesaria que será pasada
    //a las plantillas para ser renderizadas
    
    //para levantar los errores guardados en session.
    require_once("controladores/middleware.php");
    
    switch($page){
        case "index":
            require_once("controladores/index.php");
            break;
        case "almacenes":
            require_once("controladores/almacenes.php");
            break;
        case "nuevoalmacen":
            require_once("controladores/nuevoalmacen.php");
            break;
        case "tipoalmacen":
            require_once("controladores/tipoalmacen.php");
            break;
        case "tipomaterial":
            require_once("controladores/tipomaterial.php");
            break;
         case "empresas":
            require_once("controladores/empresas.php");
            break;
   
        case "error":
            echo "error";
            break;
        default:
            echo "error default";
            break;
    }
    
    //utilidades básicas
    

?>