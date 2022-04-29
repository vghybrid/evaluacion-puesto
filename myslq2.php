<?php

//Trigger para registrar un log historial de cambios

/*
delimiter //
create trigger historial_condicion after insert on series
for each row begin
    insert into historiales (accion) value ('Cambios en condición');
end//
delimiter
*/
?>