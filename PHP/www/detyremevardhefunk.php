<?php

$x = 8;
$y = 5;

if($x > $y){
    echo "X mblidhet me Y". mbledhja($x,$y);
}

if($x < $y){
    echo "X zbritet me Y". zbritet($x,$y);
}


    function mbledhja($x,$y){
    $mbledhja = $x+$y;    
    return $x+$y;
        echo "Vlera eshte ".mbledhja(8,5);
    }
        function zbritja($x,$y){
        $mbledhja = $x-$y;    
        return $x-$y;
            echo "Vlera eshte ".zbritja(8,5);
        }
?>