 

<?php
$objtSecciones = new menusClass($idMenus, $menus, $url, $clase, $orden);
$rsSecciones1 = $objtSecciones->listaMenus();
while ($rwSecciones1 = mysql_fetch_object($rsSecciones1)) {
    $seccion = $rwSecciones1->menus;
    $idMenus = $rwSecciones1->idMenus;
    $url = $rwSecciones1->url;
    if ($idMenus <> '6' && $idMenus <> '9' && $idMenus <> '2' && $idMenus <> '4' && $idMenus <> '5') {
        ?>

        <a href="<?php echo $url ?>?id=<?php echo $idMenus ?>" style="text-decoration: none;">
            <div>
                <h2 id="verde" class="titulos" ><?php echo $seccion . "<br/>"; ?></h2>
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
                        <div class="margen">

                            <img  src="<?php echo $rwNoticiasPortada->imagen ?>"  class="img">
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
