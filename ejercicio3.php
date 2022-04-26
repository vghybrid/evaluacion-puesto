<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conectarse a una Base de Datos

$server = "localhost";
$user = $_POST["txtUser"];
$password = $_POST["txtPass"];
$warning = array("error1"=>"Usuario no válido", "error2"=>"Contraseña incorrecta", "error3"=>"Usuario no existe");


try{
    $connection = new PDO("mysql:host=$servidor;dbname=SITRAC", $user,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "OK";
} catch(PDOException $error) {
    if($_POST){
        if($_POST['txtUser']!='root'){
            echo json_encode($warning[0][1]);
        } else if($_POST['txtPass']!='cualquiera') {
            echo json_encode($warning[1][1]);
        } else if(!(isset($_POST['txtUser']))){
            echo json_encode($warning[2][1]);
        }
    }
}

?>