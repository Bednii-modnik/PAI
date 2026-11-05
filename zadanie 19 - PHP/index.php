<?php
    require_once "db_connect.php"; // Jeśli już załączono plik, nie będzie ponownie załączać
    // require "db_connect.php"; // w przypadku gdy dany plik np nie istnieje require wyświetli error
    // include "db_connect.php"; // w przypadku gdy dany plik np nie istnieje include wyświetli warning
    // include_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista produktów</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

    <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['quantity']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
    ?>
    </table>
</body>
</html>

