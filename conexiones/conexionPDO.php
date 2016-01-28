<?php
function con(){




    $dsn = 'mysql:host=localhost;dbname=bdnews';
$nombre_usuario = 'elvocero';
$contraseña = 'Oriente65';
$opciones = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
   
 

$link= new PDO($dsn, $nombre_usuario, $contraseña, $opciones);

}
?>