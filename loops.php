<?php
    #loops
    for ($i=0; $i < 5; $i++) { 
        # code...
        echo $i;
    }

    foreach ($variable as $key => $value) {
        # code...
    }

    $arraye = array(0 => "edison", 1 => "fernando" );

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    $cars = array("Volvo", "BMW", "Toyota");
    
    #Agregando datos hacia otro arreglo (asociativos)

    for ($i=0; $i < sizeof($cars); $i++) { 
        # code...
        $arraye[] = $cars[$i];
    }

    foreach($arraye as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

?>