<?php include '../header.php'; ?>

<?php
$objtSecciones4 = new menusClass($idMenus, $menus, $url, $clase, $orden);
$rsSecciones4 = $objtSecciones4->listaMenus();
while ($rwSecciones4 = mysql_fetch_object($rsSecciones4)) {
    $seccion = $rwSecciones4->menus;
    $idMenus = $rwSecciones4->idMenus;
    $url = $rwSecciones4->url;
    $color= $rwSecciones4->color;
    if ($idMenus <> '4' && $idMenus <> '9' && $idMenus <> '2' && $idMenus <> '3' && $idMenus <> '5') {
        ?>


        <a href="<?php echo $url ?>?id=<?php echo $idMenus ?>" style="text-decoration: none;">
            <div class="container">
                <h2 id="naranja" class="titulos"><?php echo $seccion . "<br/>"; ?></h2>
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
