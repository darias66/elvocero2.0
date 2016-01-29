<html lang="en">

    <?php
    require_once("PHPPaging.lib/PHPPaging.lib.php");
    include 'header.php';
    ?>
    <?php
    $pagina = new PHPPaging;
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="assets/img/favicon.png" rel="icon">
        <title>Municipios | El Vocero</title>

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
        <?php include'encabezado.php' ?>
        <!-- /HEADER -->



        <!-- CONTENIDO -->
        <section class="wrap2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-7 col-sm-offset-1">



                        <!--  <fieldset style="background-color:#5cb85c;border-radius: 8px; margin: auto; width: 350px">
                                      <div align="center"><?php include 'comboMunicipios.php'; ?>
                                          
                                                 
                                      </div>
                                  </fieldset> --> 




                        <?php
                        $dato = $_POST['municipio'];
                        $pagina->agregarConsulta("SELECT * FROM `noticias` WHERE idmunicipio = '$dato' order by fecha desc ");
                        $pagina->ejecutar();
                        ?>
                        <?php
                        $sql2 = "SELECT municipio FROM municipios where idmunicipio ='$dato'";
                        $resultadoM = mysql_query($sql2);

                        while ($Muni = mysql_fetch_object($resultadoM)) {
                        $Munic = $Muni->municipio;
                        }
                        ?>    
                        <div><h2 id="color" class="titulos head" ><i class="fa fa-angle-double-right"> </i> MUNICIPIOS <?php echo htmlentities($Munic); ?> </h2></div>                   


                        <?php
                        while ($res = $pagina->fetchResultado()) {
                        ?>
                        <table class="table table-striped">

                            <tr>
                                <td><div class=""><img class="inoti" src="<?php echo $res['imagen']; ?>"> </div></td> 
                                <td> 
                                    <div class=""><a href="nota.html" class="tnoticias"> <b><?php echo htmlentities($res['titulo']); ?></b> </a> </div>  
                                    <div class="sintesis"> <?php echo htmlentities($res['sintesis']); ?>
                                </td> 
                            </tr>  

                        <?php
                        }
                        ?>

                        </table>    
                    </div> <!-- /.col-sm-7 -->

                    <div class="col-sm-4" style="float: right">
                        <table>
                            <tr><td><div class="tpubli"> <b> PUBLICIDAD </b></div></td></tr>
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
            <?php echo 'Paginas ' . $pagina->fetchNavegacion(); ?>
        </section> <!-- /.wrap -->    
        <!-- /Contenido -->

        <!-- FOOTER -->
        <?php include 'footer.php'?>
        <!-- /Footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
