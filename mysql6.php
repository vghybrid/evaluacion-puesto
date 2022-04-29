<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Escriba una consulta que dando como parámetro la orden de trabajo, el parte y la operación, me devuelva el valor de la operación previa.

/*
SELECT operaciones_fabricacion.operacion, operaciones_fabricacion.parte, operaciones_fabricacion.orden_trabajo , links.prevorderid 
FROM operaciones_fabricacion,links 
WHERE operaciones_fabricacion.ordersid = links.orderid;
*/

?>