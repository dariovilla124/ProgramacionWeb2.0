<?php

class Conexion{

    static public function conectar(){
        #PDO("nombre servidor;nombre base de datos"; "usuario", "contraseña")

        $link = new PDO("mysql:host=localhost;dbname=bdoproyect",
                        "root" ,
                        "");

        $link->exec("set names utf8");

        return $link;
    }
}

?>