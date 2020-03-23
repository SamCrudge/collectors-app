<?php

$db = new PDO ('mysql:host=DB;dbname=test', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query("SELECT `name`,`type`, `rating`,`desc` FROM `bread`;");
$data = $query->fetchall();

var_dump($data);
