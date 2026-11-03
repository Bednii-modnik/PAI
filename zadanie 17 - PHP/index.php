<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    $conn = new mysqli($host,$username,$password,$database);

    if($conn ->connect_error){
        die("Połączenie  nie powidło się: " . $conn -> connect_error);
    }
    echo "Połączenie powidło się";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="name">Nazwa: </label>
        <input type="text" name="name" id="name"><br>

        <label for="price">Cena: </label>
        <input type="number" name="price" id="price"><br>

        <label for="quantity">Ilość: </label>
        <input type="number" name="quantity" id="quantity"><br>

        <button type="submit" name="btn">Wyslij</button>
    </form>
</body>
</html>

<?php
    // $conn; //ustanowienie połączenia, DO UZUPEŁNIENIA
    if(isset($_POST['name'])&& isset($_POST['price'])&& isset($_POST['quantity'])){
        echo "Nazwa: ".$_POST['name']."<br>";
        echo "Cena: ".$_POST['price']."<br>";
        echo "Ilość: ".$_POST['quantity']."<br>";

        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO products (name,quantity,price) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql); // przygotowuje na połączeniu zapytanie SQL
        $stmt -> bind_param("sid",$name,$quantity,$price);
        $stmt -> execute();
        $stmt ->close();
        $conn ->close();
    }
?>
