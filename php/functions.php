<?php
function getdb(): PDO
{
    $db = new PDO ('mysql:host=DB;dbname=collectionapp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
function getbreads(PDO $db): array
{
    $query = $db->query("SELECT `name`, `type`, `rating`, `desc`, `imgurl` FROM `bread`;");
    $breads = $query->fetchall();
    return $breads;
}

function loopbread(array $breads): string {
    $echo = '';
    foreach ($breads as $bread) {
        $echo .= "<div class='listitem'>".
                "<img src=".$bread['imgurl'].">".
                "<h1>".$bread['name']."</h1><br>".
                " Rating: ".$bread['rating']."<br>".
                "<br>"."Description:<br>".
                "<br>".$bread['desc']."<br>".
               "</div>";
    }
    return $echo;
}


