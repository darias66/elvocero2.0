<?php
$sql = "SELECT * FROM municipios";
$resultadoy = mysql_query($sql);
?>
    <select name="municipio"style="padding: 4px;" method="POST" >
        <option value="" >Seleccione un Municipio</option>
        <?php
        while ($fila = mysql_fetch_row($resultadoy)) {
            echo "<option value='" . $fila['0'] . "'>" . $fila['1'] . "</option>";
        }
        ?>
    </select>