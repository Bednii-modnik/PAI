<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">
        <label for="login">Login: </label>
        <input type="text" id="login" name="login">

        <br>
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email">

        <br>
        <label for="password">Hasło: </label>
        <input type="password" id="password" name="password">

        <br>
        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age">

        <br>
        <label for="regulamin">Akceptuję Regulamin: </label>
        <input type="checkbox" id="regulamin" name="regulamin">

        <br>
        <input type="submit" value="Zarejestruj się">
    </form>
</body>
</html>

<?php
    $login = $_POST['login'];
    if(strlen($login)<=3){
        echo "Login musi mieć minimum 3 znaki <br>";
    }

    if(str_contains($_POST['email'],"@")){

    }else{
        echo "Podaj poprawny adres E-mail<br>";
    }

    if(strlen($_POST['password'])>=8){

    }else{
        echo "Hasło musi mieć min 8 znaków<br>";
    }

    if($_POST['age']>=18 && $_POST['age']<=100){

    }else {
        echo "Musisz mieć od 18 do 100 lat <br>";
    }

    if(isset($_POST['regulamin'])){

    }else{
        echo "Musisz zaakceptować reglamin <br>";
    }

?>