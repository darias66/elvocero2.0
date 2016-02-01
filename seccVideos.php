
<?php
include ("PHPPaging.lib/PHPPaging.lib.php");
include 'header.php';
$pagina = new PHPPaging;

$pagina->agregarConsulta("select * from videos order by idVideos desc");
$pagina->ejecutar();
?>


<?php
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="assets/img/favicon.png" rel="icon">
        <title>Videos | El Vocero</title>

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

        <!-- HEADER -->
        <?php include 'encabezado.php'; ?>
        <!-- /HEADER -->

        <!-- Contenido -->

        <section class="wrap">
            <div class="container">

                <div><h2 id="amarillo" class="titulos head" ><i class="fa fa-angle-double-right"></i>VIDEOS</h2></div>
                <br>
                <div class="row">

                    <?php
                    while ($res = $pagina->fetchResultado()) {
                        ?>
                        <div class="col-sm-4">
                            <a href="VideoFull.php?idVideo=<?php echo $res['idVideos']; ?>" style="text-decoration: none"><img class="img" src="http://img.youtube.com/vi/<?php echo $res['id']; ?>/default.jpg" >
                                <h4>  <?php echo htmlentities($res['comentario']); ?> </h4> </a>

                        </div>
                        <?php
                    }
                    ?>

                </div> <!-- /.row -->
                <hr>
            </div>       
        </section> <!-- /Municipios -->
        <!-- /Contenido -->
        <div class="pagi">
            <?php echo 'Paginas ' . $pagina->fetchNavegacion(); ?>

        </div>

        <!-- FOOTER -->
        <?php include 'footer.' ?>
        <!-- /Footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>

