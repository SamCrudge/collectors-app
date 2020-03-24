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
    <h1 class="icon">
        <i class="fas fa-bread-slice"></i><br>
        THE BREADIST
    </h1>
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