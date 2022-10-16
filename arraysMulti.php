<?php
    $grupo1 = array(
        array("edison", "15", "sistemas"),
        array("fernando", "18", "contabilidad")
    );

    echo sizeof($grupo1);
    for($i = 0; $i < sizeof($grupo1); $i++){
        echo "<ul> Fila: ".$i."</ul>";
        for ($j=0; $j <= sizeof($grupo1); $j++) { 
            # code...
            echo $grupo1[$i][$j].",";
        }
    }
?>