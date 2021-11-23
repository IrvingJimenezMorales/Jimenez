<?php

$pdo = new PDO('mysql:host=localhost;dbname=Web16100220','root','');

$comando = $pdo-> prepare("select * from usuarios");
$comando2 = $pdo-> prepare("select * from Operadores");

$comando->execute();
$comando2->execute();


$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
$resultado2 = $comando2->fetchAll(PDO::FETCH_ASSOC);

// IMPRESION TABLA USUARIOS
    print "<h3>Tabla Usuarios</h3>";
    for ($i=0; $i<=count($resultado)-1; $i++) {
        foreach( $resultado[$i] as $index => $value) {
            print "<b>$index = </b> $value <br>";
        }
    }


// IMPRESION TABLA OPERADORES   
    print "<h3>Tabla Operadores</h3>";
    for ($i=0; $i<=count($resultado2)-1; $i++) {
        foreach( $resultado2[$i] as $index => $value) {
            print "<b>$index = </b> $value <br>";
        }
    }

    $comando->closeCursor();
    $comando2->closeCursor();



?>