<?php
    $array = [1,2,3,4,5];
    $array2 = [6,7,8,9,10];

    printArray($array);
    printArray($array2);
    echo sumNumbers(6,7,6,7,6,7);
    echo "<br>";
    echo multiplyNumbers(9,10);
    echo "<br>";
    echo multiplyNumbers(9);
    echo "<br>";
    echo zamienNaWielkie("Schwajne");
    echo "<br>";
    echo czyPierwsza(7);
    echo "<br>";
    echo wypiszLiczbyPierwszeZZakresu(10,20);

    function printArray($array){
        for($i=0;$i<count($array);$i++){
            echo $array[$i];
        }
        echo "<br>";
    }

    function sumNumbers(...$x){
        $sum = 0;
        for($i=0;$i<count($x);$i++){
            $sum+=$x[$i];
        }
        return $sum;
    }

    function multiplyNumbers(int $a,int $b = 9): int{
        return $a*$b;
    }

    function zamienNaWielkie(string $tekst): string{
       return strtoupper($tekst);
    }

    function czyPierwsza(int $n): bool{
        if($n < 2){
            return false;
        }

        for($i = 2; $i <= sqrt($n); $i++){
            echo $i;
            if(($n % $i) == 0){
                return false;
            }
        }
        return true;
    }

    function wypiszLiczbyPierwszeZZakresu($początek, $koniec){
        for($i = $początek; $i <= $koniec;$i++){
            if(czyPierwsza($i)){
                echo $i;
                echo "<br>";
            }
        }
    }
?>