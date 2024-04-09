<?php
require "validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["name"], min: 2, max: 50)) {
        $errors["name"] = "Name cannot be empty or too long!";
    }
    if(!Validator::number($_POST["calories"], min: 1, max: 999)) {
        $errors["calories"] = "Calories cannot be empty!";
    }
    if(empty($errors)) {
            $query ="INSERT INTO fruits (name, calories)
                     VALUES (:name, :calories);";
            $params = [
                ":name" => $_POST["name"],
                ":calories" => $_POST["calories"]
                ];
                $db->execute($query, $params);
                header("Location: /");
                die();
    }
}
$title = "Create a fruit";
require "views/create.view.php";