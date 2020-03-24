<?php 
require_once "php/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        The Bread
    </title>
    <link rel="stylesheet" type="text/css" href="css/breadstyle.css">
    <script src="https://kit.fontawesome.com/4b810358f2.js" crossorigin="anonymous"></script>
<body>
    <div class="heading">
        <div class="icon">
            <i class="fas fa-bread-slice"></i>
        </div>
        <div class="titlehead">
            <h1>THE BREADIST</h1>
        </div>
    </div>


<div id="bread">
    <?php
        loopbread($breads);
    ?>

</div>
    <footer>
        Just the best bread..
    </footer>
</body>
</html>