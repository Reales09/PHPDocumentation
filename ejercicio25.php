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

class trabajador extends persona{
    public $puesto; //propiedad nueva

    public function presentarseComoTrabajador(){
        echo "Hola soy".$this ->nombre." y soy un ".$this ->puesto;
    }
}

$objTrabajdor= new trabajador();//instancia o creación de un objeto
$objTrabajdor -> asignarNombre("Reales M"); //llamando un metodo
$objTrabajdor -> puesto="Profesor";

$objTrabajdor -> presentarseComoTrabajador();

?>