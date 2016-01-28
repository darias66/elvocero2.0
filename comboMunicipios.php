<?php

include 'header.php';
$sql = "SELECT * FROM municipios";
$resultadoy = mysql_query($sql);
?>

 <!-- ENTRADA MODAL -->
       
                            <form method="post" action="Municipios.php">
                            
                            <select class="form-control" name="municipio" method="POST">
                                <option value="">Municipio</option>
                               <?php
        while ($fila = mysql_fetch_row($resultadoy)) {
            echo "<option value='" . htmlentities($fila['0']) . "'>" .  htmlentities($fila['1']) . "</option>";
        }
        ?>
                            </select>
                            </form>
                        