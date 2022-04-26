<?php

$cmd = “SELECT serie FROM series WHERE series.serie != NULL AND condición = 'aceptado' 
OR condición = 'aprobado' AND certificado = 'ABC123'”;

cmd = “SELECT serie FROM series WHERE serie.series ¡= NULL AND condición = ‘aceptado’
OR condición = ‘aprobado’ AND certificado = ABC123;”

/*
1) El punto y coma debería estar dentro de las comillas dobles - 
2) En la segunda linea en la parte de certificado - 
3) El operador de comparación debería ser != en vez de ¡= - 
4) En la cláusula WHERE esta al revez debería ser series.serie en vez de serie.series 
5) ABC123 debería llevar comillas simples porque es un string de la tabla certificado(VARCHAR[6]).
6) Si se esta consultando por PHP el cmd debería ser una variable.
*/
?>