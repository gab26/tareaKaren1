<?php
//controladore del index

if ($method == "get"){
    require_once("modelos/almacenes.php");
    setData('page-subtitulo',"Simple MVC NW");
    setData("almacenes", obtenerLibrosIndex());
    echo renderizarVista("index", $pageData);
}
if ($method == "post"){
    
}
?>