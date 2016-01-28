<?php



class menusClass {
    function __construct($idMenus, $menus, $url, $clase, $orden, $color) {
        $this->idMenus = $idMenus;
        $this->menus = $menus;
        $this->url = $url;
        $this->clase = $clase;
        $this->orden = $orden;
        $this->color = $color;
    }
     function listaMenus(){
        $this->rsListaMenus = mysql_query("select * from menus order by orden asc");
        return $this->rsListaMenus;
    }
    
    function listaMenus1(){
        $this->rsListaMenus = mysql_query("select * from menus where idMenus ='9'");
        return $this->rsListaMenus;
    }
    
     function listaMenus2(){
        $this->rsListaMenus2 = mysql_query("select * from menus where idMenus ='2'");
        return $this->rsListaMenus2;
    }
     function listaMenus3(){
        $this->rsListaMenus3 = mysql_query("select * from menus where idMenus ='3'");
        return $this->rsListaMenus3;
    }
     function listaMenus4(){
         
         $this->rsListaMenus4 = mysql_query("select * from menus where idMenus ='4'");
        return $this->rsListaMenus4;
    }
     function listaMenus5(){
        $this->rsListaMenus5 = mysql_query("select * from menus where idMenus ='5'");
        return $this->rsListaMenus5;
    }
     function listaMenus6(){
        $this->rsListaMenus6 = mysql_query("select * from menus where idMenus ='6'");
        return $this->rsListaMenus6;
    }
     
    /*------------------------------------------------------------------------------------------*/
   
    function modificarMenus(){
    	return mysql_query("update menus set menus = '$this->menus', clase = '$this->clase' where idMenus = '$this->idMenus'");
    }
    
    function selectMenus(){
        $this->rsSelectMenus = mysql_query("select * from menus order by idMenus");
        return $this->rsSelectMenus;
    }
    
    function menusMunicipios(){
        $this->rsSelectMenus = mysql_query("select * from menusMunicipios order by orden asc");
        return $this->rsSelectMenus;
    }
    
    function menusSecciones(){
        $this->rsMenusSecciones = mysql_query("Select * from menus where idMenus = '$this->idMenus' order by orden");
        $this->rwMenusSecciones = mysql_fetch_object($this->rsMenusSecciones);
        return $this->rwMenusSecciones;
    }
}

?>
