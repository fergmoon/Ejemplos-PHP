<?php


//require                          //Detiene la ejecición al ocurrir un error

include("encapsulamiento.php");  // Llamado a archivo encapsulamiento 
                                // allá aparece comentado (genera error)
                                // al encontrar un error puede correr (s/g sea el error)
$ferrari = new carro();

echo $ferrari -> llave."<br>";

$ferrari -> encender();
//$ferrari -> emitirGases();   //marca error por llamarlo por fuera. Es privado

$ferrari -> nombrePropietario = "Carlos Pérez";   //También podemos dar valor o definir la variable aca afuera

$ferrari -> emitirMulta("$530.000");

$ferrari ->mostrarMulta();   //Un atributo privado mostradoa atreves de un método o atributo público





?>