    <?php
ini_set('error_reporting', 0);
include ("conexiones/conexion.php");
$link = Conectarse();

function __autoload($classname) {//con esta funcion llamamos a las clases  isinusar nclude por cada una, el archivo de las clases debe llamarse igual a la clase.
    include("clases/$classname.php");
    date_default_timezone_set("America/Mexico_City");
}

$objtMenus = new menusClass($idMenus, $menus, $url, $clase, $orden);
$rsMenus = $objtMenus->listaMenus();

?>

<?php
    $idMenus = $_GET['id'];
    if(empty($idMenus)){
    
		} 
    $objtNoticias = new noticiasClass($idNoticias, $titulo, $imagen, $contenido, $slider, $fecha, $publicacion, $posicion, $sintesis, $idmunicipio, $idMenus);
    
    $rsUltimas = $objtNoticias->ultimasNoticias();
    $objSecciones = new menusClass($idMenus, $menus, $url, $clase, $orden);
    $rsSecciones = $objSecciones->selectMenus();
    $objtUltimasNews = new noticiasClass($idNoticias, $titulo, $imagen, $contenido, $slider, $fecha, $publicacion, $posicion, $sintesis, $idmunicipio, $idMenus);
      $rwnews= $objtUltimasNews->ultimasNoticias();  
    //echo "SUBMENUS = ".$idSubMenus;?>


   
