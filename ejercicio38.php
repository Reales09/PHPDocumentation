<?php

//abriendo un archivo para leer el contenido
$archivo = "contenido.txt";

$archivoAbierto=fopen($archivo,"r");

$contenido=fread($archivoAbierto,filesize($archivo));

echo $contenido;

?>