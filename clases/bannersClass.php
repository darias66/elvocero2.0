<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bannersClass
 *
 * @author casanova
 */
class bannersClass {

    function __construct($idBanners, $titulo, $banner, $fecha, $idMenus, $contenido) {
        $this->idBanners = $idBanners;
        $this->titulo = $titulo;
        $this->banner = $banner;
        $this->fecha = $fecha;
        $this->idMenus = $idMenus;
        $this->contenido = $contenido;
    }

    function mostrarTodosBanners() {
        $this->rsBanners = mysql_query("Select banners.idBanners, banners.titulo, banners.banner, banners.fecha, banners.idMenus, banners.contenido, menus.idMenus, menus.menus from banners, menus where banners.idMenus = menus.idMenus order by banners.idBanners desc");
        return $this->rsBanners;
    }

    function listarBanners() {
        $this->rsListarBanners = mysql_query("select * from banners where idMenus = '$this->idMenus' order by idBanners desc limit 0,3");
        return $this->rsListarBanners;
    }

    function altaPublicidad() {
        return mysql_query("insert into banners(titulo, banner, fecha, idMenus, contenido) values ('$this->titulo','$this->banner', '$this->fecha', '$this->idMenus', '$this->contenido')");
    }

    function eliminarPublicidad() {
        return mysql_query("delete from banners where idBanners = '$this->idBanners'");
    }

    function bannerDetalle() {
        $this->rsBannerDetalle = mysql_query("Select * from banners where idBanners = '$this->idBanners'");
        return $this->rsBannerDetalle;
    }

    //DAAP
    function consultarSlider(){
        
        $this->rsConsultarSlider=mysql_query("SELECT  banner FROM banners order by idBanners DESC LIMIT 1"); 
        return $this->rsConsultarSlider;
    }
    
     function consultarNoticia(){
        
        $this->rsConsultarSlider=mysql_query("SELECT imagen FROM noticias order by idNoticias DESC LIMIT 5"); 
        return $this->rsConsultarSlider;
    }
}

?>
