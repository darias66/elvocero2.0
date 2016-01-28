<?php
$objtSecciones2 = new menusClass($idMenus, $menus, $url, $clase, $orden);
$rsSecciones2 = $objtSecciones2->listaMenus();
while ($rwSecciones2 = mysql_fetch_object($rsSecciones2)) {
    $seccion = $rwSecciones2->menus;
    $idMenus = $rwSecciones2->idMenus;
    $url = $rwSecciones2->url;
    if ($idMenus <> '6' && $idMenus <> '9' && $idMenus <> '2' && $idMenus <> '3' && $idMenus <> '5') {
        ?>

        <a href="<?php echo $url ?>?id=<?php echo $idMenus ?>" style="text-decoration: none;">
            <div>
                <h2 id="red" class="titulos"><?php echo $seccion . "<br/>"; ?></h2>
            </div> 
        </a>   

        <?php
        $objtNoticiasPortada = new noticiasClass($idNoticias, $titulo, $imagen, $contenido, $slider, $fecha, $publicacion, $posicion, $sintesis, $idmunicipio, $idMenus);
        $rsNoticiasPortada = $objtNoticiasPortada->notasPortada();
        ?>
        <div class="container margen">
            <div class="row">

                <?php while ($rwNoticiasPortada = mysql_fetch_object($rsNoticiasPortada)) { ?>
                    <div class="col-sm-4"> 
                        <div class=" margen">
                            <img  src="<?php echo $rwNoticiasPortada->imagen ?>"  class="img"  >
                            <h6 class="titulonvanotas"><b> <?php echo $rwNoticiasPortada->titulo . "<br/>"; ?> </b> </h6>
                            <b><p class="fecha"><?php echo $rwNoticiasPortada->fecha ?>. </p></b>
                            <p class="txtnvanota"> <?php echo $rwNoticiasPortada->sintesis; ?> <br/> </p>     

                            <a href="nota.php?idNoticias=<?php echo $rwNoticiasPortada->idNoticias ?>"> <div class="btn" role="button"><p class="leer"><b> Leer más</b> </p></div></a>
                        </div> <!-- /.margen -->
                    </div> <!-- /.col-sm-4 -->
                <?php }
                ?>
                <?php
            }
        }
        ?>      


    </div> <!-- /.row -->  
</div> <!-- /.container margen -->
