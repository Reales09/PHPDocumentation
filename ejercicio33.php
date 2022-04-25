<?php

$jsonContenido='[
    {"nombre":"Oscar", "apellido":"Myles"},
    {"nombre":"Reales","apellido":"Clarence"}

 ]';

 $resultado=json_decode($jsonContenido);
 //print_r($resultado);

 foreach ($resultado as $persona) {
     echo ($persona->nombre)." ".($persona->apellido)."<br/>";
 }

?>