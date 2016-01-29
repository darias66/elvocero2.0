
<?php include 'header.php'; ?>   
require_once("PHPPaging.lib/PHPPaging.lib.php");
<?php
$idNoticias = $_GET['idNoticias'];
$objtNoticias = new noticiasClass($idNoticias, $titulo, $mensaje, $url, $imagen, $contenido, $slider, $fecha, $publicacion, $posicion, $idSubMenus);
$rsUltimas = $objtNoticias->ultimasNoticias();
$rsDetalle = $objtNoticias->detalleNota();
$objtBanners = new bannersClass($idBanners, $titulo, $banner, $fecha, $idSubMenus);
$rsBanners = $objtBanners->listarBanner
?> 
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="assets/img/favicon.png" rel="icon">
        <title> Noticias | El Vocero</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 

        <!-- CSS -->
        <link href="assets/css/mis-estilos.css" rel="stylesheet">

        <!-- FontAwesome Icons -->
        <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lobster|Droid Sans|Patua One' rel='stylesheet' type='text/css'>
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

        <!-- Contenido -->
        <section class="wrap2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-1">
                        <table id="mitabla">

                            <tr>
                                <td>
                                    <h2 class="titulos notas">  <?php
                                        while ($rwDetalle = mysql_fetch_object($rsDetalle)) {
                                            echo $rwDetalle->titulo;
                                            
                                             
                                        
                                            ?>
                                        </h2>
                                    </td>
                                </tr>

                                <tr> 
                                    <th>
                                        <p class="fecha1"> <?php echo $rwDetalle->fecha;?></p>
                                    </th>
                                </tr>

                                <tr>
                                    <th class="imgnotas">
                                        <div>
                                            <img src="<?php echo $rwDetalle->imagen ?>" class="img-rounded">
                                        </div>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <th>
                                        <div class="noticias">
                                            <p> 
                                                <?php echo "<p> $rwDetalle->contenido </p>" ?>
                                            </p>
                                        </div>
                                    </th>    
                                </tr>

                                <?php
                            }
                            ?>  
                        </table>
                    </div> <!-- /.col-sm-6 -->
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
                </div> <!--/.row -->
            </div> <!-- /.container -->
        </section> <!-- /.wrap -->
        <!-- /Contenido -->

        <?php include 'footer.php'; ?>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
