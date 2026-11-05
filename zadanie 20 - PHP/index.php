<?php
    require_once "db_connect.php";
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

        <label for="id">ID: </label>
        <input type="number" name="id" ><br>

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
    if(isset($_POST['name'])&& isset($_POST['price'])&& isset($_POST['quantity']) && isset($_POST['id'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        // $sql = "UPDATE products SET
        //         name = ".$name.",
        //         quantity = ".$quantity.",
        //         price = ".$price."
        //         WHERE id = ".$id;

        $sql = "UPDATE `products` SET `name`='$name',`quantity`='$quantity',`price`='$price' WHERE `id`='$id'";
            
        $result = mysqli_query($conn,$sql);

        if($result){
            echo"Zaktualizowano rekord o id: ".$id;
        } else {
            
            echo "Błąd aktualizacji:  ".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
   
?>
