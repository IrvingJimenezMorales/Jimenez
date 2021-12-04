<?php
    include('conexion.php');

    session_start();

    $Usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    
    $sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND pass = '$pass'";
    $resultado = $conexion->query($sql);
   
    $row = $resultado->fetch_assoc();

    if($row['Usuario'] == $Usuario && $row['pass'] == $pass){
        $_SESSION['Usuario'] = $Usuario;
        header("Location: /Jimenez/parcial3/loginBD/index.php");
    }else{
        header("Location: /Jimenez/parcial3/loginBD/login.html");
    }


?>