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

        <button type="submit" name="btn">Wyslij</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $sql = "DELETE FROM `products` WHERE `id` = '$id'";
            
        $result = mysqli_query($conn,$sql);

        if($result){
            echo"Zaktualizowano rekord o id: ".$id;
        } else {
            
            echo "Błąd aktualizacji:  ".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
   
?>
