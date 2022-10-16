<?php
    function funcionSumar(){
        echo "hola mundo";
    }

    funcionSumar();

    function addNumbers(int $a, int $b) {
        return $a + $b;
      }
      echo addNumbers(5, "5 days"); 
      // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

    
      #Restricciones
    /*<?php declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?>*/

    /*
    Declarando el tipo de Dato de la salida del resultado de la funcion

    ?php declare(strict_types=1); // strict requirement
    function addNumbers(float $a, float $b) : float {
    return $a + $b;
    }
    echo addNumbers(1.2, 5.2);
    ?>

    Resultado: 6.4
    */

?>