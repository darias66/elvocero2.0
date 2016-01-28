<?php /**/ ?><?php 
function Conectarse() 
{ 
if (!($link=mysql_connect("localhost","darias66","Oriente65")))
//   if (!($link=mysql_connect("mysql.elvocero.com.mx","darias66","Darias09"))) 
   { 
//    if (!($link=mysql_connect("localhost","root",""))) 
//   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("bdnews",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>
