<?php
$IdOper = $_POST['IdOperador'];
// $IdUsuario = '3';

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

$sql = "SELECT * FROM operadores WHERE IdOperador = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $IdOper);

 if($stmt->execute()){
       $result = $stmt->fetch(PDO::FETCH_ASSOC);

       $row['resultado']  = '0';
       $row['informacion']= 'Consulta Exitosa';
       $row['mensaje']    = 'Registro Encontrado';
       $row['detalle']    = $result;
} else {
       $row['resultado']  = '2';
       $row['informacion']= 'Error Consulta';
       $row['mensaje']    = 'Error';
       $row['detalle']    = "Error al ejectar la consulta";
}

// $encoded_row = array_map('utf8_encode',$row);

echo json_encode($row);
?>