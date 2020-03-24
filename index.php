<?php 
require "php/functions.php";


//$query = $database->prepare("SELECT * FROM `bread` ORDER BY `id` ASC;");
//$query->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
    The Bread
</title>
<link rel="stylesheet" type="text/css" href="css/breadstyle.css">
</head>
<body>
<nav>
    <img src="">
    <ul>
        <li>
            Bread
        </li>
    </ul>
</nav>
<div>
    <?php
        loopbread($breads);
    ?>
</div>
</body>
</html>