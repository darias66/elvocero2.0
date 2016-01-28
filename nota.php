
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
        <link href='https://fonts.googleapis.com/css?family=Lobster|Josefin+Sans|Patua One' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <header>
            <nav class="nav navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="dropdown">
                            <button id="menu" class="fa fa-navicon fa-2x"></button>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="dropdown-contenido">     
                                        <a href="municipios.html" id="mu" > Municipios <i id="fa" class="fa fa-fort-awesome" style="float: right"> </i> </a>  
                                        <a href="politica y gobierno.html" id="poygo"> Política y Gobierno <i class="fa fa-users" style="float: right"></i> </a>
                                        <a href="policiaca.html" id="poli"> Policíacas <i class="fa fa-cab" style="float: right"></i> </a>
                                        <a href="deportes.html" id="de"> Deportes <i class="fa fa-futbol-o" style="float: right"></i> </a>
                                        <a href="espectaculos.html" id="espe"> Espectáculos <i class="fa fa-camera" style="float: right"></i> </a>
                                        <a href="publicidad.html" id="pu"> Publicidad<i class="fa fa-bullhorn" style="float: right"></i> </a>
                                        <a href="videos.html" id="vid"> Videos <i class="fa fa-video-camera" style="float: right"></i> </a>
                                    </div> <!-- /.drop-contenido -->
                                </div>
                            </div>
                        </div> <!-- /.dropdown -->
                    </div> <!-- /.navbar header -->

                    <div class="navbar-header">
                        <a href="index.php"> 
                            <img id="logo" src="assets/img/logo-1.png" alt="logo" title="La Voz Oficial de la Noticia">
                        </a>
                    </div> <!-- /.navbarheader -->   
                    <p class="navbar-text" id="slogan1" ><b> La voz oficial de la noticia </b></p>

                    <div class="navbar-right">

                        <table class="table-condensed tb">
                            <tr>
                              <th> <a href="Municipios.php?id=2"> <div class="btn" role="button" id="mun1">
                                            <i class="fa fa-fort-awesome "></i>
                                            <p> <b>MUNICIPIOS </b></p>
                                        </div></a></th>
                                <th><a href="secciones.php?id=3"> <div id="pyg1" class="btn" role="button">
                                            <i class="fa fa-users"></i>
                                            <p><b> POLITICA <br>Y GOBIERNO</b> </p>
                                        </div> </a></th>
                                <th><a href="secciones.php?id=4"> <div id="pol1" class="btn" role="button">
                                            <i class="fa fa-cab"></i>
                                            <p><b> POLICIACA</b> </p>
                                        </div></a></th>  
                                <th><a href="secciones.php?id=5"> <div id="dep1" class="btn" role="button">
                                            <i class="fa fa-futbol-o"></i>
                                            <p><b> DEPORTES</b> </p>
                                        </div></a></th>
                                <th><a href="secciones.php?id=6"> <div id="esp1" class="btn" role="button">
                                            <i class="fa fa-camera"></i>
                                            <p><b> ESPECTACULOS</b></p>
                                        </div></a></th>
                                <th><a href="publicidad.html"> <div id="publi1" class="btn" role="button">
                                            <i class="fa fa-bullhorn"></i>
                                            <p><b> PUBLICIDAD </b></p>
                                        </div></a></th>
                                <th><a href="videos.html"> <div id="video1" class="btn" role="button">
                                            <i class="fa fa-video-camera"></i>
                                            <p><b> VIDEOS </b></p>
                                        </div></a></th>
                            </tr>
                        </table> <!-- /table -->
                    </div> <!-- /.navbar header -->

                </div> <!-- /.container fluid -->
            </nav> <!-- /nav.fixed top -->
        </header>

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
                                    <th class="desc">
                                        <div>
                                            <p><?php echo $rwDetalle->sintasis ?> jkdsjfd </p>
                                        </div>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <th>
                                        <div class="txtnotas">
                                            <p> 
                                                <?php echo $rwDetalle->contenido; ?>
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
