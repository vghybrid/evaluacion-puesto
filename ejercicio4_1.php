<?php
session_start();
if(isset($_SESSION["user"])){
    echo "User: ".$_SESSION["user"];
} else {
    echo "No existe una sesión iniciada";
}


?>