<?php
function getDb(): PDO
{
    $db = new PDO ('mysql:host=DB;dbname=collectionapp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getBreads(PDO $db): array
{
    $query = $db->query("SELECT `name`, `type`, `rating`, `desc`, `imgurl` FROM `bread`;");
    $breads = $query->fetchall();
    return $breads;
}

function displayBread(array $breads): string {
    $echo = '';
    foreach ($breads as $bread) {
        if (
            !empty($bread['imgurl']) &&
            !empty($bread['name']) &&
            !empty($bread['type']) &&
            !empty($bread['rating']) &&
            !empty($bread['desc'])
        ) {
            $echo .= "<div class='listitem'>".
                "<img src=".$bread['imgurl'].">".
                "<h1>".$bread['name']."</h1><br>".
                " type: ".$bread['type']." | ".
                " Rating: ".$bread['rating']."<br>".
                "<br>"."Description:<br>".
                "<br>".$bread['desc']."<br>".
               "</div>";

        }
    }
    return $echo;
}


