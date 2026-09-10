<?php
    // echo "aaaaaaaa";
    // $zmienna =5;
    // if($zmienna > 4){
    //     echo "Większe od 4";
    // } else {
    //     echo "Mniejsza bądź równa 4"
    // }
    //zadanie 
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = ($b**2) - (4*$a*$c);
    
    if($delta > 0){
        echo "dwa miejsca zerowe  ";
        $x1 = (-$b-sqrt($delta))/2*$a;
        echo "X1: $x1  ";
        $x2 = (-$b+sqrt($delta))/2*$a;
        echo "X2: $x2";
    } else if($delta == 0){
        echo "jedno miejsce zerowe";
        $x0= -$b/(2*$a);
        echo "X0: $x0";
    } else if($delta <0){
        echo "brak miejsc zerowych";
    }
?>