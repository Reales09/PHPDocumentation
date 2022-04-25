<?php

class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un mátodo estático";
    }

}

$obj= new UnaClase();
$obj -> unMetodo();

unaClase::unMetodo();

?>