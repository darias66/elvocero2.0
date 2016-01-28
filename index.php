<html lang="en">
     <?php include './header.php';?>
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
        <link href='https://fonts.googleapis.com/css?family=Lobster||Patua One' rel='stylesheet' type='text/css'>
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

        <!-- Municipios -->
        
        <br/>
         <section id="m" class="wrap">
            <?php include './seccMunicpios.php';?>
        </section> <!-- /Municipios -->

        <!-- Política y Gobierno -->
        <section id="pg" class="wrap">
           <?php include './politicaYgobiernosecc.php';?>
        </section> <!-- /Politica -->

        <!-- POLICIAS -->
        <section id="p" class="wrap">
            <?php include './Policiasecc.php';?> 
            
        </section> <!-- /Deportes -->

        <section id="d" class="wrap">
            <?php include './Deportessecc.php';?> 
        </section> <!-- /Deportes -->
         <section id="e" class="wrap">
        <!-- ESPECTACULOS -->
         <?php include './Espectaculosecc.php';?>    
        </section> <!-- /espectáculos -->

        <!-- /CONTENIDO -->

        
        <!-- FOOTER -->  
             <?php include 'footer.php'; ?>     
        <!-- /Footer -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
