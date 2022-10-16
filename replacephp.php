<!-- reemplaza string con otro string 
variable  -->
<?php
    $variable = "Hola mundo";
    echo $variable;
    echo "<br>";
    $variable2 = str_replace("mundo", "edison", $variable);
    echo $variable2;
?>