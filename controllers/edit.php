<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM fruits WHERE id = :id";

$params = [":id" => $_GET["id"]];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["name"], min: 2, max: 50)) {
        $errors["name"] = "Name must be between 2 and 50 letters!";
    }
    if(!Validator::number($_POST["calories"], min: 1, max: 999)) {
                $errors["calories"] = "Calories cannot be empty!";
    }
    if(empty($errors)) {
            $query ="UPDATE fruits
                     SET name = :name, calories = :calories
                     WHERE id = :id;";
            $params = [
                ":name" => $_POST["name"],
                ":calories" => $_POST["calories"],
                ":id" => $_GET["id"]
                ];
                $db->execute($query, $params);
                header("Location: /show?id=" . $_POST["id"]);
                die();
    }
}

$post = $db->execute($query, $params)
           ->fetch();

$title = "Edit a fruit";
require "views/edit.view.php";