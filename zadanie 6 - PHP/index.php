<?php
    $array =[1,2,3,4,5];
    $index_to_remove = 2;
    unset($array[$index_to_remove]);
    var_dump($array);

    for($i=0;$i<count($array);$i++){
        $array[$i]=0;
    }
    echo "<br>";
    var_dump($array);

    echo "<h1>Tablice dwuwymiarowe</h1>";

    $array2D=[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    echo $array2D[0][0];
    echo "<br>";
    for($i=0;$i<count($array2D);$i++){
        for($j=0;$j<count($array2D[$i]);$j++){
            echo $array2D[$i][$j];
            echo " ";
        }
        echo"<br>";
    }

    $osoby=[
        ["imie"=>"jan","wiek"=>20],
        ["imie"=>"anna","wiek"=>25],
        ["imie"=>"piotr","wiek"=>30]
    ];
    
    foreach($osoby as $wiersz){
        foreach($wiersz as $element){
            echo $element . " ";
        }
        echo "<br>";
    }

    for($i=0;$i<count($osoby);$i++){
        foreach($osoby[$i] as $element){
            echo $element . " ";
        }
        echo"<br>";
    }

    $array4x4 = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];

    // for($i=0;$i<count($array4x4);$i++){
    //     for($j=0;$j<count($array4x4[$i]);$j++){
    //         if($i==$j){
    //             $array4x4[$i][$j]=0;
    //         }
    //         echo " ";
    //     }
    //     echo "<br>";
    // }

    // printArray($array4x4);

    // function printArray($array2D){
    //     for($i=0;$i<count($array2D);$i++){
    //         for($j=0;$j<count($array2D[$i]);$j++){
    //             echo $array2D[$i][$j];
    //             echo " ";
    //         }
    //         echo"<br>";
    //     }
    // }

    // $suma = 0;
    // for($i=0;$i<count($array4x4);$i++){
    //     for($j=0;$j<count($array4x4[$i]);$j++){
    //         $suma+=$array4x4[$i][$j];
    //         echo " ";
    //     }
    //     echo "<br>";
    // }
    // echo "Suma: ".$suma;

    $suma=[0,0,0,0];
    for($i=0;$i<count($array4x4);$i++){
        for($j=0;$j<count($array4x4[$i]);$j++){
            if($j==0){
                $suma[0]+=$array4x4[$i][$j];
            }
            else if($j==1){
                $suma[1]+=$array4x4[$i][$j];
            }
            else if($j==2){
                $suma[2]+=$array4x4[$i][$j];
            }
            else if($j==3){
                $suma[3]+=$array4x4[$i][$j];
            }
        }
    }
    var_dump($suma);
?>