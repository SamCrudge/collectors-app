<?php 
require_once "php/functions.php";
$db = getDb();
$breads = getBreads($db);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            The Bread
        </title>
        <link rel="stylesheet" type="text/css" href="css/breadstyle.css">
        <script src="https://kit.fontawesome.com/4b810358f2.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="heading">
            <div class="icon">
                <i class="fas fa-bread-slice"></i>
            </div>
            <div class="titlehead">
                <h1>THE BREADIST</h1>
            </div>
        </div>
        <div class="subtitle">
            <h3>i know you knead me..</h3>
        </div>
        <nav>
        <a class="page2" href="addBread.php">
            <i class="far fa-plus-square"></i> <p>Add More Bread..</p>
        </a>
        </nav>
        <div id="bread">
            <?php
                if (isset($_GET['success'])){
                    echo "<div class='success'><p>New Bread Baked! Thank You for your addiction!</p></div>";
                }
                echo displayBread($breads);
            ?>
        </div>
            <footer>
                Just the best bread..
            </footer>
    </body>
</html>
