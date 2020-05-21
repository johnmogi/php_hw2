<?php

session_start();
require_once './products-logic.php';

$command = $_REQUEST["command"];

if(isset($_SESSION["lastCommands"])){

    $lastCommands = $_SESSION["lastCommands"];
    $lastCommands .= ", <br/>" . $command;
}
else{
     $lastCommands = $command;
}
$_SESSION["lastCommands"] = $lastCommands;

switch($command) {
    
    case "addProduct":
        $name = $_POST["name"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $id = addProduct($name, $price, $stock);
        header("location: thanks.php");
        break;

    case "updateProduct":
        $id = $_POST["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $affectedRows = updateProduct($id, $name, $price, $stock);
        header("location: thanks.php");
        break;

           case "deleteProduct":
        $id = $_POST["id"];
        $affectedRows = deleteProduct($id);
        header("location: thanks.php");
        session_destroy();
        break;

          case "getAllProducts":
        $products = getAllProducts();
        echo $products;
        break;
}
