<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Insertar datos en MySQL lo más optimizado posible

$notes="DO RE MI FA SOL LA SI";
$noteSeparator=explode(" ",$notes);

for ($i = 0; $i < 100000; $i++){
   if(($i+1) == 100000){
    $sql.="('".$noteSeparator[$i]."');";
    $sql="INSERT INTO notas_musicales  VALUES('$notes')";
   }
}

?>