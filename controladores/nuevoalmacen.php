<?php

if ($method == "get"){
   setData("page-subtitulo","Mantenimiento Almacenes");
   setData("error-msg","");
   setData("intIdalmacenes","");
   setData("txtAlmacenrazon","");
   setData("txtAlmacendesc","");
   setData("intTipoalmacen","");
   echo renderizarVista("nuevoalmacen",$pageData);
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $intIdalmacenes = intval($_POST["intIdalmacenes"]);
        $txtAlmacenrazon = $_POST["txtAlmacenrazon"];
        $txtAlmacendesc = $_POST["txtAlmacendesc"];
        $intTipoalmacen = intval($_POST["intTipoalmacen"]);
        //Aqui debera ir validaciones de datos
        $validado = true;
        if($intIdalmacenes == ""){
            $validado=false;
        }
        //grabando
        require_once('modelos/almacenes.php');
        if($validado){
            if(nuevoalmacen($intIdalmacenes,$txtAlmacenrazon,$txtAlmacendesc,$intTipoalmacen)){
                header("location:index.php?page=nuevoalmacen&id=$intIdalmacenes");
                die();
            }
        }
         setData("page-subtitulo","Mantenimiento Almacenes");
         setData("error-msg","Error al ingresar el Libro.");
         setData("intIdalmacenes",$intIdalmacenes);
         setData("txtAlmacenrazon",$txtAlmacenrazon);
         setData("txtAlmacendesc",$txtAlmacendesc);
         setData("intTipoalmacen",$intTipoalmacen);
         echo renderizarVista("nuevoalmacen",$pageData);
    }



 if (isset($_POST["btnUpdate"])){
       
        $intIdalmacenes = intval($_POST["intIdalmacenes"]);
        $txtAlmacenrazon = $_POST["txtAlmacenrazon"];
        $txtAlmacendesc = $_POST["txtAlmacendesc"];
        $intTipoalmacen = intval($_POST["intTipoalmacen"]);
         require_once('modelos/almacenes.php');
         
        $sqlUpdate=("UPDATE almacenes SET idalmacenes='$intIdalmacenes',almacenrazon='$txtAlmacenrazon',almacendesc='$txtAlmacendesc',idtipoalmacen='$intTipoalmacen' WHERE idalmacenes='$intIdalmacenes'");
        //sprintf
        
        $result=$conn->query(sprintf($sqlUpdate));
        
        die("Registro Actualizado!!!");
    }


 if (isset($_POST["btnDelete"])){
       
        $intIdalmacenes = intval($_POST["intIdalmacenes"]);
        $txtAlmacenrazon = $_POST["txtAlmacenrazon"];
        $txtAlmacendesc = $_POST["txtAlmacendesc"];
        $intTipoalmacen = intval($_POST["intTipoalmacen"]);
        require_once('modelos/almacenes.php');
        
        $sqlDelete="Delete from almacenes where idalmacenes='$intIdalmacenes'";
        //sprintf
        
        $result=$conn->query(sprintf($sqlDelete));
        
        die("Registro Eliminado!!!");
    }
}
?>