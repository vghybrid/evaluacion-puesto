<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Modificar los datos en MySQL lo más optimizado posible.

$notes="SI LA SOL FA MI RE DO";
$noteSeparator=explode(" ",$notes);

for ($i=0; $i < 100000; $i++) { 
    if(($i+1) == 100000) {
        $sql.="('".$noteSeparator[$i]."');";
        $sql="UPDATE 'nota_musical'.'notas_musicales' SET 'nota'='$notaSepator[$i]' WHERE  'idnota'=$idnota";
    }
}

?>