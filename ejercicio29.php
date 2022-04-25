<?php

$servidor="localhost";//127.0.0.1
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //leer datos

    $sql="SELECT * FROM `fotos`";
    $setencia=$conexion ->prepare($sql);
    $setencia->execute();

    $resultado=$setencia->fetchAll();

    //print_r($resultado);

    foreach ($resultado as $foto) {
        echo $foto['nombre']."<br/>";
    }

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea".$error;
}


?>