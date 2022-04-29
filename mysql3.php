<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Procedimiento almacenado 

/*
delimiter //
CREATE PROCEDURE generate_serie(in varSeries int)
BEGIN
    DECLARE count INT;
    BEGIN
        SET count= (SELECT COUNT(*)+1 FROM Series); 
        IF(count<100)THEN
            SET varSeries= CONCAT('AAA0',count);
        END IF; 
    end;
end //
delimiter 

?>