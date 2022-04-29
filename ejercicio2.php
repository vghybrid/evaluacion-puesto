<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//

for($i = 0; $i < count($recorset); $i++) {
    $Concat_Orders .= array_merge($recordset[$i]['Orders']);
}

For($i=0; $i<$count(recordset), i++) {
    Concat_Orders += $recordset[i][‘Orders’];
}

/* 
1) La F mayuscula del bucle for debe ser minúscula - es un error de sintaxis.
2) En la segunda expresión del bucle for la función count no debe llevar el símbolo peso - es una funcion interna de PHP y no una variable
3) En la segunda expresión del bucle for el argumento de la funcion count debería llevar un símbolo peso - error de sintaxis.
4) Después de declarar una expresión del bucle for debe ir un punto y coma - error de sintaxis no lo va a detectar como un bucle for.
5) En la tercera declaración del bucle for debería tener el símbolo peso por ser una variable acumulativa.
6) La variable i dentro del corchete debería tener un símbolo peso - error de sintaxis.
7) Dentro de los corchetes la palabra Orders debería tener comillas simples o comillas dobles - error de sintaxis.
8) Concat_Orders debería llevar un símbolo peso - es donde se va a almacenar el nuevo array concatenado.
9) En PHP hay una función llamada array_merge que hace la función de unir una o varias arrays.
10) El operador de asignación debería ser .= porque se busca concatenar combinada y no solo una asignación. 
*/
?>