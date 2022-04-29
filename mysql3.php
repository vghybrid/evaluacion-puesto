<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Procedimiento almacenado 

/*
delimiter //
create procedure generate_serie(in varSeries int)
begin
declare last_id INT default 1
while varSeries>0 
do
last_id=MAX(series.idserie)+1
insert into series()
varSeries=varSeries-1
end while
end //
delimiter 
*/
?>