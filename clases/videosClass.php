<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of videosClass
 *
 * @author casanova
 */
class videosClass {
    //put your code here
    function __construct($idVideos, $url, $id, $comentario) {
        $this->idVideos = $idVideos;
        $this->url = $url;
        $this->id = $id;
        $this->comentario = $comentario;
    }
    
    function listaVideos(){
        $this->rsListaVideos = mysql_query("select * from videos order by idVideos desc limit 0,3");
        return $this->rsListaVideos;
    }
    function listaVideosFull(){
        $this->rsListaVideos = mysql_query("select * from videos order by idVideos desc");
        return $this->rsListaVideos;
    }
    
    function altaVideos(){
        return mysql_query("insert into videos(url, id, comentario) values ('$this->url','$this->id','$this->comentario')");
    }
    function eliminarVideos(){
   		return mysql_query("delete from videos where idVideos = '$this->idVideos'");
    }
}

?>
