<?php

if ($method == "get"){
   setData("page-subtitulo","Mantenimiento Tipo Almacen");
   setData("error-msg","");
   setData("intIdtipoalmacen1","");
   setData("txtTipoalmacendesc1","");
 
   echo renderizarVista("tipoalmacen",$pageData);
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $intIdtipoalmacen1 = intval($_POST["intIdtipoalmacen1"]);
        $txtTipoalmacendesc1 = $_POST["txtTipoalmacendesc1"];        
        
        //Aqui debera ir validaciones de datos
        $validado = true;
        if($intIdtipoalmacen1 == ""){
            $validado=false;
        }
        //grabando
        require_once('modelos/almacenes.php');
        if($validado){
            if(tipoalmacen1( $intIdtipoalmacen1,$txtTipoalmacendesc1)){
                header("location:index.php?page=tipoalmacen&id=$intIdtipoalmacen1");
                die();
            }
        }
         setData("page-subtitulo","Mantenimiento Almacenes");
         setData("error-msg","Error al ingresar el Libro.");
         setData("intIdtipoalmacen1","");
         setData("txtTipoalmacendesc1","");
         echo renderizarVista("tipoalmacen",$pageData);
    }



 if (isset($_POST["btnUpdate"])){
       
         $intIdtipoalmacen1 = intval($_POST["intIdtipoalmacen1"]);
        $txtTipoalmacendesc1 = $_POST["txtTipoalmacendesc1"];    
         require_once('modelos/almacenes.php');
         
        $sqlUpdate=("UPDATE tipoalmacen SET idtipoalmacen='$intIdtipoalmacen1',tipoalmacendesc='$txtTipoalmacendesc1' WHERE idtipoalmacen='$intIdtipoalmacen1'");
        //sprintf
        
        $result=$conn->query(sprintf($sqlUpdate));
        
        die("Registro Actualizado!!!");
    }


 if (isset($_POST["btnDelete"])){
       
         $intIdtipoalmacen1 = intval($_POST["intIdtipoalmacen1"]);
        $txtTipoalmacendesc1 = $_POST["txtTipoalmacendesc1"];    
         require_once('modelos/almacenes.php');
        
        $sqlDelete="Delete from tipoalmacen where idtipoalmacen='$intIdtipoalmacen1'";
        //sprintf
        
        $result=$conn->query(sprintf($sqlDelete));
        
        die("Registro Eliminado!!!");
    }
}
?>