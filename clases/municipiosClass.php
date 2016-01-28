<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of municipiosClass
 *
 * @author casanova
 */
class municipiosClass {
    //put your code here
    function __construct($idmunicipio, $municipio) {
        $this->idmunicipio = $idmunicipio;
        $this->municipio = $municipio;
    }
    
    function listarMunicipios(){
        $this->rsListar = mysql_query ("select * from municipios order by municipio");
        return $this->rsListar;   
    }
    
    function altaMunicipio(){
    	return mysql_query("insert into municipios (idmunicipio, municipio) values ('$this->titulo','$this->mensaje', '$this->url', '$this->imagen', '$this->contenido', '$this->slider', '$this->fecha', '$this->publicacion', '$this->posicion', '$this->idSubMenus', '$this->sintesis')"); 
    }
    function municipioConNota(){
        global $fecha;
        global $limiteMunicipios;
        $this->rsConNota = mysql_query("SELECT municipios.idmunicipio, municipios.municipio FROM noticias, municipios where noticias.idmunicipio = municipios.idmunicipio and noticias.fecha between '$limiteMunicipios' and '$fecha' group by municipios.municipio order by municipios.municipio asc");
        return $this->rsConNota;
    }
    
    function buscaMunicipio(){
        $this->rsBuscaMunicipio = mysql_query("select * from municipios where idmunicipio = '$this->idmunicipio'");
        $this->rwBuscaMunicipio = mysql_fetch_object($this->rsBuscaMunicipio);
        return $this->rwBuscaMunicipio;
    }
    
    function menuMunicipio (){
       $this->rsConNota = mysql_query("SELECT * from noticias order by fecha desc limit 0,3");
        return $this->rsConNota; 
        
        
    }
    
       }

?>
