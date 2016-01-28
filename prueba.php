
 <?php include './header.php';?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="assets/img/favicon.png" rel="icon">
        <title>Portada | El Vocero</title>

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
                        <a href="index.html"> 
                            <img id="logo" src="assets/img/logo-1.png" alt="logo" title="La Voz Oficial de la Noticia">
                        </a>
                    </div> <!-- /.navbarheader -->   
                    <p class="navbar-text" id="slogan1" ><b> La voz oficial de la noticia </b></p>

                    <div class="navbar-right">

                        <table class="table-condensed tb">
                            <tr>
                                <th> <a href="#m"> <div class="btn" role="button" id="mun1">
                                            <i class="fa fa-fort-awesome "></i>
                                            <p> <b>MUNICIPIOS </b></p>
                                        </div></a></th>
                                <th><a href="#pg"> <div id="pyg1" class="btn" role="button">
                                            <i class="fa fa-users"></i>
                                            <p><b> POLITICA <br>Y GOBIERNO</b> </p>
                                        </div> </a></th>
                                <th><a href="#p"> <div id="pol1" class="btn" role="button">
                                            <i class="fa fa-cab"></i>
                                            <p><b> POLICIACA</b> </p>
                                        </div></a></th>  
                                <th><a href="#d"> <div id="dep1" class="btn" role="button">
                                            <i class="fa fa-futbol-o"></i>
                                            <p><b> DEPORTES</b> </p>
                                        </div></a></th>
                                <th><a href="#e"> <div id="esp1" class="btn" role="button">
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

        <!-- CONTENIDO -->

        <!-- Municipios -->
        <section id="m" class="wrap">
            <?php $objtSecciones = new menusClass($idMenus, $menus, $url, $clase, $orden);
        $rsSecciones1 = $objtSecciones->listaMenus();
        while ($rwSecciones1 =  mysql_fetch_object($rsSecciones1)){
            $seccion = $rwSecciones1->menus;
            $idMenus = $rwSecciones1->idMenus;
            $url = $rwSecciones1->url;
            if ($idMenus <> '6' && $idMenus <> '9' && $idMenus <> '3' && $idMenus <> '4' && $idMenus <> '5' ){
            ?>
            <a href="<?php echo $url?>?id=<?php echo $idMenus?>" style="text-decoration: none" > <div>  
                    <h2 id="color" class="titulos" ><?php echo $seccion;?></h2>
                </div></a>
                <?php 
		$objtNoticiasPortada = new noticiasClass($idNoticias, $titulo, $imagen, $contenido, $slider, $fecha, $publicacion, $posicion, $sintesis, $idmunicipio, $idMenus);
		$rsNoticiasPortada = $objtNoticiasPortada->menuMunicipio();?>
           
                <?php while($rwNoticiasPortada =  mysql_fetch_object($rsNoticiasPortada)){?>
            <div class="container margen">
                <div class="row">
                    <div class="col-sm-4">
                        <div>Menú</div>
<hr/>
<ul>
<li>  <img class="img" src="<?php echo $rwNoticiasPortada->imagen?>" alt="imagen"></li>
<li> <h6 class="titulonvanotas"><b><?php echo $rwNoticiasPortada->titulo;?></b> </h6></li>
<li> <p class="fecha"> <?php echo $rwNoticiasPortada->fecha?></p></li>
<li>  <p class="txtnvanota"> <?php echo $rwNoticiasPortada->sintesis;?></p></li>

<li> <a href="ota.php?idNoticias=<?php echo $rwNoticiasPortada->idNoticias; ?>"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a></li></ul>
</div>
                      
                        
                       
                       
                        

                        
                     <?php }
         ?>
                        <?php }
        }   ?>      
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Nuevas atracciones en el paseo verde.</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </b></h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>
                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->    
        </section> <!-- /Municipios -->

        <!-- Política y Gobierno -->
        <section id="pg" class="wrap">
            <a href="politica y gobierno.html" style="text-decoration: none"> <div>
                    <h2 id="verde" class="titulos">POLITICA Y GOBIERNO</h2>
                </div> </a>   
            <div class="container margen">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota"> Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div><div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->    
        </section> <!-- /Politica -->

        <!-- POLICIAS -->
        <section id="p" class="wrap">
            <a href="policiaca.html" style="text-decoration: none"><div>
                    <h2 id="red" class="titulos">POLICIACAS</h2>
                </div></a> <!-- /.container -->   
            <div class="container margen">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container margen -->    
        </section> <!-- /Deportes -->

        <!-- ESPECTACULOS -->
        <section id="d" class="wrap">
            <a href="deportes.html" style="text-decoration: none"><div>
                    <h2 id="blue" class="titulos">DEPORTES</h2>
                </div></a> <!-- /.container -->
            <div class="container margen">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"> <b>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </b></h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container margen -->    
        </section> <!-- /deportes -->


        <!-- ESPECTACULOS -->
        <section id="e" class="wrap">
            <a href="espectaculos.html" style="text-decoration: none"><div>
                    <h2 id="naranja" class="titulos">ESPECTACULOS</h2>
                </div></a> <!-- /.container -->
            <div class="container margen">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"><b> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</b> </h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                    <div class="col-sm-4">
                        <img class="img" src="assets/img/policias/poli.jpg" alt="imagen">
                        <h6 class="titulonvanotas"> <b>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </b></h6>
                        <p class="fecha"> 22 de Enero 2016. </p>
                        <p class="txtnvanota">Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                            Lorem ipsum ad his scripta blandit partiendo,
                            eum fastidii accumsan euripidis in, eum liber hendrer an.
                        </p>

                        <a href="nota.html"><div class="btn" role="button"><p><b> Leer más</b> </p></div></a>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container margen -->    
        </section> <!-- /espectáculos -->

        <!-- /CONTENIDO -->

        <!-- FOOTER -->
        <footer id="footer">
            <div class="row">
                <div class="col-sm-4">
                    <div><img src="assets/img/abajo.png" alt="El Vocero"></div>
                    <p id="d2"><i class="fa fa-copyright"></i>
                        2016 | 10D2. Desarrollos Orientados para TI</p>
                </div><!-- /.col-sm-4 --> 

                <div class="col-sm-4 col-sm-offset-4">
                    <p><a href="http://twitter.com/Yoelvocero" target="_blank"> <i class="red1 red tw fa fa-twitter fa-2x"></i></a>
                        <a href="https://www.youtube.com/channel/UCg_nt_RYqggXBLjG-JiDQog" target="_blank"><i class="red1 red yt fa fa-youtube fa-2x "></i> </a>
                        <a href="https://www.facebook.com/Elvocero-Acanceh-758210434298067/" target="_blank"><i class="red1 red fb fa fa-facebook fa-2x"></i> </a></p>
                </div>
            </div> <!-- /.row -->  
        </footer>
        <!-- /Footer -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
