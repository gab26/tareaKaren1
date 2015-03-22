<?php
    require_once("dao/dao.php");
    function obtenerLibrosIndex(){
        global $conn; //esto hace disponible la conexion dentro de esta funcíon
        $almacenes = array();
        $sqlstr = "SELECT * FROM almacenes limit 10;";
        $almacenes = obtenerRegistros($conn, $sqlstr);
        return $almacenes;
    }
    function obtenerLibroPorISBN($idalmacenes){
        global $conn;
        $sqlstr = "SELECT * from almacenes where isbn='%s';";
        $almacenes = obtenerRegistro($conn, sprintf($sqlstr, $idalmacen));
        return $almacenes;
    }
    function nuevoalmacen($idalmacenes, $almacenrazon, $almacendesc, $idtipoalmacen){
        global $conn;
        $sqlInsert = "INSERT INTO almacenes(idalmacenes, almacenrazon, almacendesc , idtipoalmacen) VALUES (%d,'%s','%s',%d);";
        if(!ejecutarNoQuery($conn, sprintf($sqlInsert,$idalmacenes,$almacenrazon,$almacendesc ,$idtipoalmacen))){
            return false;
        }else{
            return true;
        }
    }
    
    function tipoalmacen($idtipoalmacen, $tipoalmacendesc, $tipoalmacencantidad){
        global $conn;
        $sqlInsert = "INSERT INTO tipomaterial(idtipomaterial, tipomaterialdesc, tipomaterialcantidad) VALUES (%d,'%s',%d);";
        if(!ejecutarNoQuery($conn, sprintf($sqlInsert,$idtipoalmacen,$tipoalmacendesc,$tipoalmacencantidad))){
            return false;
        }else{
            return true;
        }
    }
    
     function tipoalmacen1($idtipoalmacen,$tipoalmacendesc){
        global $conn;
        $sqlInsert = "INSERT INTO tipoalmacen(idtipoalmacen, tipoalmacendesc) VALUES (%d,'%s');";
        if(!ejecutarNoQuery($conn, sprintf($sqlInsert,$idtipoalmacen,$tipoalmacendesc))){
            return false;
        }else{
            return true;
        }
    }
    
     function nuevaempresa($idempresa,$empresadesc,$empresaestado,$empresatipo,$empresatel){
        global $conn;
        $sqlInsert = "INSERT INTO empresa(idempresa,empresadesc,empresaestado,empresatipo,empresatel) VALUES (%d,'%s','%s','%s','%s');";
        if(!ejecutarNoQuery($conn, sprintf($sqlInsert,$idempresa,$empresadesc,$empresaestado,$empresatipo,$empresatel))){
            return false;
        }else{
            return true;
        }
    }
?>