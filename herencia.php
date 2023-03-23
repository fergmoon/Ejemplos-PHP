<?php
echo "Hello!!";

echo"<br> <h3> EJEMPLO DE HERENCIA</h3>";

class Animal{

    public $tamanio = "20 cm";

    public function correr(){
        
        echo "velocidad Promedio de un animal 10 Km/h <br>";

    }
}

class Perro extends Animal{

    public function vigilar(){

        echo "vigilar Hogar <br>";

    }
}

class Gato extends Animal{

    public function dormir(){
        echo "Dormir todo el día <br>";

    }
}

$miPerro = new Perro();  //variable con el objeto perro

$miGato  = new Gato();    // variable con el objeto gato

$miPerro -> vigilar();
$miGato -> dormir();

$miPerro -> correr();  //llama el método de la clase de la cual heredó
$miGato -> correr();   //llama el método de la clase de la cual heredó

echo $miPerro -> tamanio;




?>