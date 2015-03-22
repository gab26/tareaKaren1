<?php

if ($method == "get"){
   setData("page-subtitulo","Mantenimiento Empresas");
   setData("error-msg","");
   setData("intIdempresa","");
   setData("txtEmpresadesc","");
   setData("txtEmpresaestado","");
   setData("txtEmpresatipo","");
   setData("txtEmpresatelefono","");
   
 
   echo renderizarVista("empresas",$pageData);
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $intIdempresa = intval($_POST["intIdempresa"]);
        $txtEmpresadesc = $_POST["txtEmpresadesc"];        
        $txtEmpresaestado = $_POST["txtEmpresaestado"];
        $txtEmpresatipo = $_POST["txtEmpresatipo"];
        $txtEmpresatelefono = $_POST["txtEmpresatelefono"];  
        //Aqui debera ir validaciones de datos
        $validado = true;
        if($intIdempresa == ""){
            $validado=false;
        }
        //grabando
        require_once('modelos/almacenes.php');
        if($validado){
            if(nuevaempresa( $intIdempresa,$txtEmpresadesc,$txtEmpresaestado,$txtEmpresatipo,$txtEmpresatelefono)){
                header("location:index.php?page=empresas&id=$intIdempresa");
                die();
            }
        }
         setData("page-subtitulo","Mantenimiento Almacenes");
         setData("error-msg","Error al ingresar el Libro.");
          setData("intIdempresa","");
         setData("txtEmpresadesc","");
         setData("txtEmpresaestado","");
         setData("txtEmpresatipo","");
         setData("txtEmpresatelefono","");
         
       
         echo renderizarVista("empresas",$pageData);
    }



 if (isset($_POST["btnUpdate"])){
       
        $intIdempresa = intval($_POST["intIdempresa"]);
        $txtEmpresadesc = $_POST["txtEmpresadesc"];        
        $txtEmpresaestado = $_POST["txtEmpresaestado"];
        $txtEmpresatipo = $_POST["txtEmpresatipo"];
        $txtEmpresatelefono = $_POST["txtEmpresatelefono"];  
         require_once('modelos/almacenes.php');
         
        $sqlUpdate=("UPDATE empresa SET idempresa='$intIdempresa',empresadesc='$txtEmpresadesc',empresaestado='$txtEmpresaestado',empresatipo='$txtEmpresatipo',empresatel='$txtEmpresatelefono' WHERE idempresa='$intIdempresa'");
        //sprintf
        
        $result=$conn->query(sprintf($sqlUpdate));
        
        die("Registro Actualizado!!!");
    }


 if (isset($_POST["btnDelete"])){
       
        $intIdempresa = intval($_POST["intIdempresa"]);
        $txtEmpresadesc = $_POST["txtEmpresadesc"];        
        $txtEmpresaestado = $_POST["txtEmpresaestado"];
        $txtEmpresatipo = $_POST["txtEmpresatipo"];
        $txtEmpresatelefono = $_POST["txtEmpresatelefono"];   
         require_once('modelos/almacenes.php');
        
        $sqlDelete="Delete from empresa where idempresa='$intIdempresa'";
        //sprintf
        
        $result=$conn->query(sprintf($sqlDelete));
        
        die("Registro Eliminado!!!");
    }
}
?>