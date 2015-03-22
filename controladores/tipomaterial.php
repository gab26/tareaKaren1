<?php

if ($method == "get"){
   setData("page-subtitulo","Mantenimiento Tipo Material");
   setData("error-msg","");
   setData("intIdtipoalmacen","");
   setData("txtTipoalmacendesc","");
   setData("intTipoalmacencantidad","");
   echo renderizarVista("tipomaterial",$pageData);
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $intIdtipoalmacen = intval($_POST["intIdtipoalmacen"]);
        $txtTipoalmacendesc = $_POST["txtTipoalmacendesc"];        
        $intTipoalmacencantidad = intval($_POST["intTipoalmacencantidad"]);
        //Aqui debera ir validaciones de datos
        $validado = true;
        if($intIdtipoalmacen == ""){
            $validado=false;
        }
        //grabando
        require_once('modelos/almacenes.php');
        if($validado){
            if(tipoalmacen($intIdtipoalmacen,$txtTipoalmacendesc,$intTipoalmacencantidad)){
                header("location:index.php?page=tipomaterial&id=$intIdtipoalmacen");
                die();
            }
        }
         setData("page-subtitulo","Mantenimiento Almacenes");
         setData("error-msg","Error al ingresar el Libro.");
         setData("intIdtipoalmacen","");
         setData("txtTipoalmacendesc","");
         setData("intTipoalmacencantidad","");
         echo renderizarVista("tipomaterial",$pageData);
    }



 if (isset($_POST["btnUpdate"])){
       
         $intIdtipoalmacen = intval($_POST["intIdtipoalmacen"]);
        $txtTipoalmacendesc = $_POST["txtTipoalmacendesc"];        
        $intTipoalmacencantidad = intval($_POST["intTipoalmacencantidad"]);
         require_once('modelos/almacenes.php');
         
        $sqlUpdate=("UPDATE tipomaterial SET idtipomaterial='$intIdtipoalmacen',tipomaterialdesc='$txtTipoalmacendesc',tipomaterialcantidad='$intTipoalmacencantidad' WHERE idtipomaterial='$intIdtipoalmacen'");
        //sprintf
        
        $result=$conn->query(sprintf($sqlUpdate));
        
        die("Registro Actualizado!!!");
    }


 if (isset($_POST["btnDelete"])){
       
        $intIdtipoalmacen = intval($_POST["intIdtipoalmacen"]);
        $txtTipoalmacendesc = $_POST["txtTipoalmacendesc"];        
        $intTipoalmacencantidad = intval($_POST["intTipoalmacencantidad"]);
         require_once('modelos/almacenes.php');
        require_once('modelos/almacenes.php');
        
        $sqlDelete="Delete from tipomaterial where idtipomaterial='$intIdtipoalmacen'";
        //sprintf
        
        $result=$conn->query(sprintf($sqlDelete));
        
        die("Registro Eliminado!!!");
    }
}
?>