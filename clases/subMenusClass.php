<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subMenusClass
 *
 * @author casanova
 */
class subMenusClass {
    function __construct($idSubMenus, $subMenus, $url, $idMenus) {
        $this->idSubMenus = $idSubMenus;
        $this->subMenus = $subMenus;
        $this->url = $url;
        $this->idMenus = $idMenus;
    }
    function listaSubMenus(){
        $this->rsListaSubMenus = mysql_query("select * from subMenus where idMenus = '$this->idMenus'");
        return $this->rsListaSubMenus;
    }
    
    function selectSubMenus(){
        $this->rsSelectSubMenus = mysql_query("select * from subMenus order by idSubMenus");
        return $this->rsSelectSubMenus;
    }
}

?>
