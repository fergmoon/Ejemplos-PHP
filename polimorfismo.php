<?php

echo "Hello!!";

echo"<br> <h3> EJEMPLO DE POLIMORFISMO Y ABSTRACCION</h3>";

abstract class Animal {     //No hay necesidad de ser definido de una vez. Se define despues

    abstract public function hablar(); //Método
    
}

class Perro extends Animal{  //Hereda de la clase Animal. HERENCIA
     
    public function Hablar() {    //Método Hablar
        echo "Ladrar.......";

    }
    
}

class Gato extends Animal{  //Hereda de la clase Animal
     
    public function Hablar() {  //Mismo método Hablar que en perro
        echo "Maullar.......";

    }
}
 function hacerHablar(Animal $animal){   //Hace referencia a un objeto de tipo animal
                                         //Hacer ref a la clase animal-> va a recibir un objeto
                                         // de tipo animal y se guarda en la variable $animal
    echo "<br>";                         
    $animal ->Hablar();                  //dentro del objeto estamos ejecutando el método hablar

 }

$miPerro = new Perro();
$miGato = new Gato();

hacerHablar($miPerro);  //Tenemos q mandarle a esta función un objeto de tipo animal para q ejecute
hacerHablar($miGato);



?>