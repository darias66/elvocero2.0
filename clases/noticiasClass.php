<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of slider
 *
 * @author casanova
 */
class noticiasClass{

    function __construct($idNoticias,$titulo,$imagen,$contenido,$slider,$fecha,$publicacion,$posicion,$sintesis,$idmunicipio,$idMenus) {
        $this->idNoticias = $idNoticias;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->contenido = $contenido;
        $this->slider = $slider;
        $this->fecha = $fecha;
        $this->publicacion = $publicacion;
        $this->posicion = $posicion;
        $this->sintesis = $sintesis;
        $this->idMunicipio = $idmunicipio;
        $this->idMenus = $idMenus;
    }
    function verSlider(){
        $this->rsVerSlider = mysql_query("select * from noticias where slider = '1' and publicacion = '1' order by idNoticias desc limit 0,5");
        return $this->rsVerSlider;
    }
    function notaPrincipal(){
        $this->rsNotaPrincipal = mysql_query("SELECT * FROM noticias where publicacion = '1' and slider = '0' and posicion = '1' order by idNoticias desc");
        $this->rwNotaPrincipal = mysql_fetch_object($this->rsNotaPrincipal);
        return $this->rwNotaPrincipal;
    }
    function ultimasNoticias(){
        $this->rsUltimasNoticias = mysql_query("select * from noticias where idMenus = '$this->idMenus' and publicacion = '1' and slider = '0'  order by idNoticias desc");
        $this->rwUltimasNoticias = mysql_fetch_object($this->rsUltimasNoticias);
        return $this->rwUltimasNoticias;
    }
    function notasPortada(){
        $this->rsNotasPortada = mysql_query("SELECT * FROM noticias where  idMenus = '$this->idMenus' and publicacion = '1' and slider = '0' order by fecha desc limit 0,3");
        return $this->rsNotasPortada;

    }
    function detalleNota(){
        $this->rsDetalleNota = mysql_query("select * from noticias where idNoticias ='$this->idNoticias'");
        return $this->rsDetalleNota;
    }
    
    function altaNota(){
    	return mysql_query("insert into noticias(titulo, imagen, contenido, slider, publicacion, posicion, sintesis, fecha, idmunicipio, idMenus) values ('$this->titulo','$this->imagen', '$this->contenido', '$this->slider', '$this->publicacion', '$this->posicion', '$this->sintesis', '$this->fecha', '$this->idMunicipio', '$this->idMenus')"); 
   }
   
   function listaNoticias(){
   		$this->rsListaNoticias = mysql_query("select * from noticias ORDER BY noticias.fecha desc");
   		return $this->rsListaNoticias;
   	}
        
    function listaNoticiasOriginal(){
   		$this->rsListaNoticias = mysql_query("select * from noticias, menus, subMenus where noticias.idSubMenus = subMenus.idSubMenus and subMenus.idMenus = menus.idMenus and noticias.publicacion = '1' ORDER BY noticias.fecha ASC");
   		return $this->rsListaNoticias;
   	}
   	
   	function eliminarNoticias(){
   		return mysql_query("delete from noticias where idNoticias = '$this->idNoticias'");
   	}
   	
   	function notasSecciones(){
        global $idMenus;
        $this->rsNotasSecciones = mysql_query("SELECT * FROM noticias where idMenus = '$idMenus' and noticias.publicacion = '1' order by fecha desc limit 0,10");
        return $this->rsNotasSecciones;

    }
    function notasXMunicipio(){
        global $fecha;
        global $limiteMunicipios;
        $this->rsNotasxMunicipio = mysql_query("SELECT * FROM noticias, menusMunicipios where noticias.idMenus = menusMunicipios.idMenus and idmunicipio = '$this->idMunicipio' and fecha between '$limiteMunicipios' and '$fecha' and publicacion = '1' order by fecha desc");
        return $this->rsNotasxMunicipio;
    }
    
    function modificarNoticias(){
        return mysql_query("update noticias set titulo = '$this->titulo',contenido = '$this->contenido',slider = '$this->slider',fecha = '$this->fecha',publicacion = '$this->publicacion',posicion = '$this->posicion',sintesis = '$this->sintesis',idmunicipio = '$this->idMunicipio',idMenus = '$this->idMenus' where idNoticias = '$this->idNoticias'");
    }
    
    function modificarSlider(){
        global $slider;
        return mysql_query("update noticias set slider = '$slider' where idNoticias = '$this->idNoticias'");
    }
    
    function modificarPublicacion(){
        global $publicacion;
        return mysql_query("update noticias set publicacion = '$publicacion' where idNoticias = '$this->idNoticias'");
    }
    
    function  municipios(){
        
       $this->todosmunicipios =  mysql_query("select * from noticias order by fecha limit 0,5" ); 
   return $this->todosmunicipios;
       } 
       function menuMunicipio(){
       $this->rsmenu = mysql_query("SELECT * from noticias order by fecha desc limit 0,3");
        return $this->rsmenu; 
        
        
    }
}

?>
