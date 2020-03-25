<?php
require "functions.php";
$db = getDb();


if (validateUsrInput($_GET)) {
    insertIntoDB($_GET, $db);
    header("location: ../index.php?success=1");
} else {
    header("location: ../addBread.php?error=1");
}
