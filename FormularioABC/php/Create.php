<?php
$vId              = $_POST['ido'];
$vNombre          = $_POST['nom'];
$vApellido        = $_POST['app'];
$vTelefono        = $_POST['tel'];
$vNumCaja         = $_POST['numc'];
$vDepto           = $_POST['depto'];
$vPedimento       = $_POST['ped'];
$vPate            = $_POST['pat'];
$vFolio           = $_POST['fol'];
$vFechaEntrada    = $_POST['fee'];
$vHoraEntrada     = $_POST['hee'];
$vCodigoBarras    = $_POST['cdb'];
$vTipo      = $_POST['tip'];

$hostname = 'localhost';
$database = 'Web16100220';
$username = 'root';
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch(PDOException $e) {
    $row['resultado']  = '1';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Exeption';
    $row['detalle']    = $e->getMessage();
}


try {
    if ($vTipo==1) {
        $query = "INSERT INTO operadores
                  SET NombreOperador = ?, ApellidoOperador = ?, Telefono  = ?, NumCaja= ?, Departamento=?, Pedimento = ?, Patente = ?, Folio = ?, FechaEntrada = ?, HoraEntrada = ?, CodigoBarras = ?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vNombre);
        $stmt->bindParam(2, $vApellido);
        $stmt->bindParam(3, $vTelefono);
        $stmt->bindParam(4, $vNumCaja);
        $stmt->bindParam(5, $vDepto);
        $stmt->bindParam(6, $vPedimento);
        $stmt->bindParam(7, $vPate);
        $stmt->bindParam(8, $vFolio);
        $stmt->bindParam(9, $vFechaEntrada);
        $stmt->bindParam(10, $vHoraEntrada);
        $stmt->bindParam(11, $vCodigoBarras);
        
    } else {
        $query = "UPDATE operadores
                  SET NombreOperador = ?, ApellidoOperador = ?, Telefono  = ?, NumCaja= ?, Departamento=?, Pedimento = ?, Patente = ?, Folio = ?, FechaEntrada = ?, HoraEntrada = ?, CodigoBarras = ?
                  WHERE IdOperador = ?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vNombre);
        $stmt->bindParam(2, $vApellido);
        $stmt->bindParam(3, $vTelefono);
        $stmt->bindParam(4, $vNumCaja);
        $stmt->bindParam(5, $vDepto);
        $stmt->bindParam(6, $vPedimento);
        $stmt->bindParam(7, $vPate);
        $stmt->bindParam(8, $vFolio);
        $stmt->bindParam(9, $vFechaEntrada);
        $stmt->bindParam(10, $vHoraEntrada);
        $stmt->bindParam(11, $vCodigoBarras);
        $stmt->bindParam(12, $vId);
        // $stmt->bindParam(6, $vTipo);
    }

   if ($stmt->execute()) {

        if ($vTipo==1) {
            $stmt = $dbh->prepare("select LAST_INSERT_ID() as consecutivo");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $row['resultado']  = '0';
            $row['informacion']= 'Exito';
            $row['mensaje']    = "Registro Insertado exitosamente";
            $row['detalle']    = $result['consecutivo'];
        } else {
            $row['resultado']  = '0';
            $row['informacion']= $vNombre." ".$vApellido;;
            $row['mensaje']    = "Registro Modificado exitosamente";
            $row['detalle']    = $vId;
       }
   } else {
        $row['resultado']  = '2';
        $row['informacion']= 'Error DB';
        $row['mensaje']    = 'Error Ejecucion de sentencia sql';
        $row['detalle']    = 'Error al hacer sentecia de insercion';
   }

} catch(PDOException $exception) {
    $row['resultado']  = '3';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Error de Exepcion';
    $row['detalle']    =  $exception->getMessage();
}


$encoded_row = array_map('utf8_encode',$row);
echo json_encode($encoded_row);
?>
