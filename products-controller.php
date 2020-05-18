<?php

require_once './products-logic.php';

$command = $_REQUEST["command"];

switch($command) {
    
    case "addProduct":
        $name = $_POST["name"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $id = addProduct($name, $price, $stock);
        header("location: thanks.php");
        break;
    
}
