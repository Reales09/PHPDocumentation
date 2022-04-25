<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ // acciones o metodos...

        $this ->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this -> nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }

}

$objAlumno = new persona();//instancia o creación de un objeto

$objAlumno -> asignarNombre("Reales"); //llamando un metodo

$objAlumno2 = new persona();
$objAlumno2 -> asignarNombre("Pedro");
$objAlumno2 -> imprimirNombre();


echo $objAlumno -> nombre; // imprimir una propiedad
echo $objAlumno2 -> nombre;
echo $objAlumno2 -> mostrarEdad()
;
?>