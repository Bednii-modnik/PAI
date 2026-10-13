<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="GET">
        <label for="name">Imie: </label>
        <input type="text" id="name" name="name">

        <br>
        <label>Wiek: </label>
        <input type="number" id="age" name="age">

        <br>
        <label>Bilet: </label>
        <select id="ticket" name="ticket">
            <option value="normal">Normalny</option>
            <option value="ulgowy">Ulgowy</option>
        </select>

        <br>
        <input type="submit" value="Oblicz cenę">

    </form>
</body>
</html>

<?php
    $ticket=$_GET['ticket'];
    $age = $_GET['age'];
    $ticketPrice;

    if($ticket == "normal" && $age > 7){
        $ticketPrice=30;
    }else if($ticket == "ulgowy" && $age > 7){
        $ticketPrice=15;
    }else if($age <=7){
        $ticketPrice=0;
    }

    echo $ticketPrice;
    echo "<br>";
    echo "Cześć, ".$_GET['name']."!<br>";
    echo "Twój wiek: ".$age."<br>";
    echo "Rodzaj biletu: ".$ticket."<br>";
    echo "Cena Biletu: ".$ticketPrice."<br>";
?>