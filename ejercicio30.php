<?php
session_start();

$_SESSION["usuario"]="yofo";
$_SESSION["estatus"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];


?>