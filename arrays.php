<?php
    #Arrays Asociativos
    $arraye = array(0 => "edison", 1 => "fernando" );

    #Array Merge
    $a1=array("red","green");
    $a2=array("blue","yellow");
    print_r(array_merge($a1,$a2));

    #Array Merge Recursive
    $a3=array("a"=>"red","b"=>"green");
    $a4=array("b"=>"blue","c"=>"yellow");
    print_r(array_merge_recursive($a3,$a4));

    foreach($arraye as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

 ?>