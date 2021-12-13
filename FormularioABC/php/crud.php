<?php
include_once 'ConexionCrud.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

/*
$hoy =  Date('Y/m/d H:i:s');*/
$Nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : '';
$Apellido = (isset($_POST['Apellido'])) ? $_POST['Apellido'] : '';
$Telefono = (isset($_POST['Telefono'])) ? $_POST['Telefono'] : '';
$NumCaja = (isset($_POST['NumCaja'])) ? $_POST['NumCaja'] : '';
$Depto = (isset($_POST['Departamento'])) ? $_POST['Departamento'] : '';
$Pedimento = (isset($_POST['Pedimento'])) ? $_POST['Pedimento'] : '';
$Patente = (isset($_POST['Patente'])) ? $_POST['Patente'] : '';
$Folio = (isset($_POST['Folio'])) ? $_POST['Folio'] : '';
$FechaEntrada = (isset($_POST['FechaEntrada'])) ? $_POST['FechaEntrada'] : '';
$HoraEntrada = (isset($_POST['HoraEntrada'])) ? $_POST['HoraEntrada'] : '';
/*$FechaEntrada = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();
$HoraEntrada = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();*/
$CodBarras = (isset($_POST['CodigoBarras'])) ? $_POST['CodigoBarras'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$Id_Oper = (isset($_POST['Id_Oper'])) ? $_POST['Id_Oper'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO operadores (NombreOperador, ApellidoOperador, Telefono, NumCaja, Departamento, Pedimento, Patente, Folio, FechaEntrada, HoraEntrada, CodigoBrras) VALUES('$Nombre', '$Apellido', '$Telefono', '$NumCaja', '$Depto', '$Pedimento', '$Patente', '$Folio', '$FechaEntrada', '$HoraEntrada', '$CodBarras') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM operadores ORDER BY IdOperador DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE operadores SET NombreOperador='$Nombre', ApellidoOperador='$Apellido', Telefono='$Telefono', NumCaja='$NumCaja', Departamento='$Depto', Pedimento='$Pedimento', Patente='$Patente', Folio='$Folio', FechaEntrada='$FechaEntrada', HoraEntrada='$HoraEntrada', CodigoBarras='$CodBarras' WHERE IdOperador='$Id_Oper' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM operadores WHERE IdOperador ='$Id_Oper' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM operadores WHERE IdOperador = $Id_Oper ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM operadores";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;