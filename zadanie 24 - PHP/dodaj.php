<?php
    require_once "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <?php include "nav.php"?>

    <form action="<?=basename($_SERVER['PHP_SELF']) ?>" method="POST">
        <br><label for="tytul">Tytuł: </label>
        <input type="text" name="tytul"><br>

        <label for="gatunek">Gatunek: </label>
        <input type="text" name="gatunek" ><br>

        <label for="platforma">Platforma: </label>
        <input type="text" name="platforma"><br>

        <label for="rok_wydania">Rok wydania: </label>
        <input type="number" name="rok_wydania"><br>

        <label for="ocena">Ocena: </label>
        <input type="number" step="any" name="ocena"><br>

        <button type="submit">Dodaj</button>
    </form>

</body>
</html>

<?php
    if(isset($_POST['tytul'])&& isset($_POST['gatunek'])&& isset($_POST['platforma'])&& isset($_POST['rok_wydania'])&& isset($_POST['ocena'])){
        $tytul = $_POST['tytul'];
        $gatunek = $_POST['gatunek'];
        $platforma = $_POST['platforma'];
        $rok_wydania = $_POST['rok_wydania'];
        $ocena = $_POST['ocena'];

        $sql = "INSERT INTO gry (`tytul`, `gatunek`, `platforma`,`rok_wydania`,`ocena`) VALUES ('$tytul', '$gatunek', '$platforma','$rok_wydania','$ocena')";
    }
?>