<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author casanova
 */
class loginClass {
    function __construct($usuario, $password, $nivel) {
        $this->usuario=$usuario;
        $this->password=$password;
        $this->nivel=$nivel;
    }
    function login(){
        $this->rs_login=mysql_query("select * from users where usuario = '$this->usuario' and password = '$this->password'");
        $this->rw_usuarios = mysql_fetch_object($this->rs_login);
        return $this->rw_usuarios;
    }
}

?>