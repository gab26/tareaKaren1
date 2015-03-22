<?php 
if ($method == "get"){
    require_once("modelos/almacenes.php");
    if(isset($_GET["id"])){
        $idalmacen = $_GET["id"];
        $almacenes = obtenerLibroPorISBN($idalmacen);
        foreach($almacenes as $columna=>$valor){
            setData($columna, $valor);
        }
        echo renderizarVista("almacenes", $pageData);
    }else{
        header("location:index.php");
        die();
    }
}
if ($method == "post"){
    
}
?>