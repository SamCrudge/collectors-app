<?php

$db = new PDO ('mysql:host=DB;dbname=collectionapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query("SELECT `name`, `type`, `rating`, `desc` FROM `bread`;");
$breads = $query->fetchall();

function loopbread($breads) {
    foreach ($breads as $bread){
        echo $bread['name'];

        echo "<div>";
            echo "<h1>".$bread['name']."</h1><br>";
            echo $bread['type']."<br>";
            echo $bread['rating']."<br>";
            echo $bread['desc']."<br>";
         echo "</div>";
    }
}

