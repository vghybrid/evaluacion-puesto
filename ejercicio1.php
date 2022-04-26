<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Generar un serial con números consecutivos

function generateSerialId() {
    for($i=101; $i < 999; $i++){
        echo sprintf("ABC".$i."<br/>");
    }
}
echo generateSerialId();

?>