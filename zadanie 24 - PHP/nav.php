<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <a href="index.php" class="<?=$currentPage == 'index.php' ? 'active' : ''?>">Main</a>
    <a href="utworz.php" class="<?=$currentPage == 'utworz.php' ? 'active' : ''?>">Create</a>
    <a href="dodaj.php" class="<?=$currentPage == 'dodaj.php' ? 'active' : ''?>">Add</a>
    <a href="lista.php" class="<?=$currentPage == 'lista.php' ? 'active' : ''?>">Select</a>
    <a href="edytuj.php" class="<?=$currentPage == 'edytuj.php' ? 'active' : ''?>">Edit</a>
    <a href="usun.php" class="<?=$currentPage == 'usun.php' ? 'active' : ''?>">Delete</a>
    <a href="footer.php" class="<?=$currentPage == 'footer.php' ? 'active' : ''?>">Footer</a>
</nav>