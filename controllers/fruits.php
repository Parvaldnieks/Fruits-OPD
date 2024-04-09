<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM fruits";
$params = [];

if(isset($_GET["calories"]) && $_GET["calories"] != "") {
    $calories = trim($_GET["calories"]);
    $query = "SELECT * FROM fruits WHERE calories < :calories";
    $params = [":calories" => $calories];
}

$posts = $db
          ->execute($query, $params)
          ->fetchAll();

$title = "Fruits";
require "views/index.view.php";