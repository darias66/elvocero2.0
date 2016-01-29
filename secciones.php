<html lang="en">
    <?php
    include './header.php';
    require_once("PHPPaging.lib/PHPPaging.lib.php");
    ?>
    <?php
    $idMenus = $_GET['id'];
    $fecha = date("Y-m-d");
    $day = date("Y-m-d");
    $limite = strtotime("-7 days");
    $limiteNoticias = date("Y-m-d", $limite);
    $objtSeccion = new menusClass($idMenus, $menus, $url, $clase, $orden, $color);
    $rwSeccion = $objtSeccion->menusSecciones();
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="assets/img/favicon.png" rel="icon">
        <title>Secciones | El Vocero</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 

        <!-- CSS -->
        <link href="assets/css/mis-estilos.css" rel="stylesheet">

        <!-- FontAwesome Icons -->
        <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lobster|Patua One' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- HEADER -->
             <?php include 'encabezado.php'; ?>
        <!-- /Header -->

        <!-- CONTENIDO -->
        <section class="wrap2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-1">
                        <div><h2 id="<?php echo $rwSeccion->color; ?>" class="titulos head" ><i class="fa fa-angle-double-right"></i><?php echo $rwSeccion->menus; ?></h2> </div>
                        <?php
                        $pagina = new PHPPaging;
                        ?>
                        <?php
                        $pagina->agregarConsulta("SELECT idNoticias, titulo, imagen, sintesis FROM noticias where idMenus = '$idMenus' and noticias.publicacion = '1' order by fecha desc");
                        $pagina->ejecutar();

                        while ($res = $pagina->fetchResultado()) {
                            ?>

                            <table class="table table-striped">
                                <tr>
                                    <td> <div class=""> <img class="inoti" src="<?php echo $res['imagen']; ?>" alt=""> </div> </td>
                                    <td> <div class="tnoticias"><a href="nota.php?idNoticias=<?php echo $res['idNoticias'] ?>" class="tnoticias"><b> <?php echo $res['titulo']; ?></b> </a> </div>
                                        <div> </div>
                                        <div class="sintesis"> <?php echo $res['sintesis']; ?></div>
                                        
                                    </td>    
                                </tr>
                            <?php }
                            ?>
                        </table>    
                    </div> <!-- /.col-sm-7 -->

                    <div class="col-sm-4" style="float: right">
                        <table>
                            <tr><td><a href="publicidad.html" style="text-decoration: none;"><div class="notpubli"> <b> PUBLICIDAD </b></div></a></td></tr>
                            <tr class="esp">
                                <td> <img class="publi" src="assets/img/quecara.jpg" alt=""> </td>
                            </tr>
                            <tr class="esp">
                                <td> <img class="publi" src="assets/img/cumplimos.jpg" alt=""> </td>
                            </tr>
                            <tr class="esp">
                                <td> <img class="publi" src="assets/img/reyes.jpg" alt=""> </td>
                            </tr>
                        </table>
                    </div>
                </div> <!-- /.row -->    
            </div> <!-- /.container -->    
        </section> <!-- /.wrap -->    
        <!-- /Contenido -->

        <div class="pagi">
            <?php echo 'Paginas ' . $pagina->fetchNavegacion(); ?>
        </div>
        <!-- footer -->
        <?php include 'footer.php'; ?>
        <!-- /Footer -->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>

