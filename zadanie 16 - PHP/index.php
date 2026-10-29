<?php
    session_start(); 

    if(!isset($_SESSION['koszyk'])){
        $_SESSION['koszyk']=[];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="./" method="GET">
        <label for="imie">Imie: </label>
        <input type="text" name="imie" id="imie">
        <button type="submit">Prześlij</button>
    </form> -->

    <!-- <form action="./" method="POST">
        <label for="wiek">Wiek: </label>
        <input type="number" name="wiek" id="wiek">
        <button type="submit">Prześlij</button>
    </form> -->

    <!-- <form action="./" method="POST">
        <label for="name">Nazwa produktu: </label>
        <input type="text" name="name" id="name"><br>

        <label for="price">Cena jednego produktu: </label>
        <input type="number" name="price" id="price"><br>

        <label for="quantity">LIczba zakupionych sztuk: </label>
        <input type="number" name="quantity" id="quantity"><br>

        <button type="submit">Oblicz</button>
    </form> -->

    <form action="./" method="POST">
        <label for="name">Nazwa produktu: </label>
        <input type="text" name="name" id="name"><br>

        <label for="price">Cena jednego produktu: </label>
        <input type="number" name="price" id="price"><br>

        <label for="quantity">LIczba zakupionych sztuk: </label>
        <input type="number" name="quantity" id="quantity"><br>

        <button type="submit" name="btn">Dodaj do koszyka</button>

        <p>Twój koszyk:</p>
    </form>

    <form method = "POST">
        <input type="submit" value="clean"><br>
    </form>
</body>
</html>

<?php
    // $imie=$_GET['imie'];
    // if(isset($imie)){
    //     echo $imie;
    // }

    // $wiek = $_POST['wiek'];
    // if(isset($wiek)){
    //     echo $wiek;
    // }

    // $name = $_POST['name'];
    // $price = $_POST['price'];
    // $quantity = $_POST['quantity'];
    // $koszt = $price * $quantity;
    // if(isset($name)&&!empty($name) && isset($price)&&!empty($price) && isset($quantity)&&!empty($quantity)){
    //     echo "Nazwa produktu: ".$name."<br>Cena jednego produktu: ".$price."<br>LIczba zakupionych sztuk: ".$quantity."<br>Całkowity koszt: ".$koszt;
    // }
    

    if(isset($_POST['clean'])){
        unset($_SESSION['koszyk']);
        echo "Wyczyszczony koszyk!";
    }

    if(isset($_POST['name'])){
        $new_product = [
            'name' => $_POST['name'],
            'price'=>$_POST['price'],
            'quantity'=>$_POST['quantity']
        ];

        $_SESSION['koszyk'][]=$new_product;

        echo "<table border=1>";
        echo "<tr><th>Nazwa</th><th>Cena</th><th>Ilość</th><th>Suma</th></tr>";
        foreach($_SESSION['koszyk'] as $product){
            echo "<tr>";
            echo "<td>".$product['name']."</td>";
            echo "<td>".$product['price']."</td>";
            echo "<td>".$product['quantity']."</td>";
            echo "<td>".($product['quantity']*$product['price'])."</td>";
            echo "</tr>";
        }
        echo "</table>";
        unset($_POST);
    }

    
?>
