<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">
        <!-- skrypt który się wykona w tym samym pliku -->
        <label for="name">Imię: </label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"><br>

        <label for="sex">Płeć: </label>
        <input type="radio" name="sex" value="k">Kobieta
        <input type="radio" name="sex" value="m">Mężczyzna

        <br>
        <label for="game">Ulubiona seria gier: </label><br>
        <input type="checkbox" name="game1" value="Assasins Creed"> Assasins Creed <br>  
        <input type="checkbox" name="game2" value="Tomb Rider"> Tomb Rider<br>  
        <input type="checkbox" name="game3" value="METRO"> METRO <br>  
        <input type="checkbox" name="game4" value="Minecraft"> Minecraft <br>  
        <input type="checkbox" name="game5" value="Fortnite"> Fortnite <br>  
            
        <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['age']) // czy lkucz istnieje
         && !empty($_POST['name']) && !empty($_POST['age'])// czy jest wartość
         ){
        echo $_POST['name'];
        echo $_POST['age'];
    } else {
        echo "Prosze wypełnić wszystkie pola";
    }

    if(isset($_POST['sex'])){
        if($_POST['sex'] == 'm'){
            echo "<br>";
            echo "Mężczyzna";
        } else {
            echo "<br>";
            echo "Kobieta";
        }
    }

    if(isset($_POST['game1']) && $_POST['game1'] == "Assasins Creed"){
        echo "<br>";
        echo "Wybrano Assasins Creed";
    }
    
    for($i=1;$i<=5;$i++){
        if(isset($_POST['game'.$i])){
            echo "<br>";
            echo $_POST['game'.$i];
        }
    }
?>