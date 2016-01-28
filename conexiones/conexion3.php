<?php 

try {

$BasedeDatos = new PDO("mysql:host=elvocero.com.mx;dbname=bdnews","pcoriente", "Oriente65");
$BasedeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$BasedeDatos->exec("SET NAMES 'utf8'");

echo 'Conection Sucefull';
    
} catch (Exception $ex) {
    
    echo 'Conection Fallida';
    exit;
}
?>

