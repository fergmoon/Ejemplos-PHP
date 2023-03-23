<?php

echo "Hello!!";

echo"<br> <h3> EJEMPLO DE ENCAPSULAMIENTO</h3>";

class carro{

    public $llave = "Llave Seguridad";
    public $nombrePropietario;   //variable definida abajo afuera
    private $multas;
    protected $aceite;  //se supone protected lo protege en atributos y métodos (acceso?)

    public function encender(){
        echo"Encendiendo carro!!!!<br>";

        $this ->emitirGases();
    }
    public function acelerar(){
        echo"Acelerando el carro a 80 K/h !!!!<br>";
    }
    private function emitirGases(){
        echo "Emitir Gases de CO2!!!!<br>";
    }

    public function emitirMulta($valorMulta,$tipoAceite="Primax"){  // también se puede dar un valor acá
        $this ->multas = $valorMulta;
        $this ->aceite = $tipoAceite;   //pendiente
    }

    public function mostrarMulta(){
        echo "Nombre Propietario: " .$this ->nombrePropietario."<br>";
        echo "Valor Multa: ".$this ->multas."<br>";

    }

}

// $ferrari = new carro();   //descomentar para correr el código

// echo $ferrari -> llave."<br>";

// $ferrari -> encender();
// //$ferrari -> emitirGases();   //marca error por llamarlo por fuera. Es privado

// $ferrari -> nombrePropietario = "Carlos Pérez";   //También podemos dar valor o definir la variable aca afuera

// $ferrari -> emitirMulta("$530.000");

// $ferrari ->mostrarMulta();   //Un atributo privado mostradoa atreves de un método o atributo público












?>