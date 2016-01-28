<?php

include '../header.php';
$sql = "SELECT * FROM municipios";
$resultadoy = mysql_query($sql);
?>

<div align="center">
    <form method="post" action="Municipios.php">
    <select name="municipio"style="padding: 4px;" method="POST"  >
        <option value="" >Seleccione un Municipio</option>
        <?php
        while ($fila = mysql_fetch_row($resultadoy)) {
            echo "<option value='" . htmlentities($fila['0']) . "'>" .  htmlentities($fila['1']) . "</option>";
        }
        ?>
         </select>
        <div class="modal-footer">
       <input type="submit" class="btn-info" value="Buscar" style=" padding: 4px; width: 90px" 
              /></div>
      
       
          </form>
     
</div>
   