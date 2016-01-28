<?php /**/ ?><?php 
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","root",""))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("bdnews")) 
   { 
      echo "Error seleccionando la base de datos."; 
      
   }
   
   if (!mysql_set_charset('utf8',$link)){
       
     exit();   
       
   }


 
      
    
   
   return $link;
} 
?>
