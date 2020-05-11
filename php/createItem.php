<?php
require "functions.php";
$db = getDb();

if (validateUsrInput($_POST)) {
    if  (insertIntoDB($_POST, $db)) {
        header("location: ../index.php?success=1");
        die();
    }
} else {
    header("location: ../addBread.php?error=1");
    die();
}


