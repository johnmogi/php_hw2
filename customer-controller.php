<?php

require_once './customer-logic.php';

$command = $_REQUEST["command"];

switch($command) {

    case "addClient":
        $CustomerID = $_POST["CustomerID"];
        $ContactName = $_POST["ContactName"];
        $CompanyName = $_POST["CompanyName"];
        $Phone = $_POST["Phone"];
        $id = addClient($CustomerID, $ContactName, $CompanyName, $Phone);
        header("location: thanks.php");
        break;
       case "updateClient":
        $CustomerID = $_POST["CustomerID"];
        $ContactName = $_POST["ContactName"];
        $CompanyName = $_POST["CompanyName"];
        $Phone = $_POST["Phone"];
        $id = updateClient($CustomerID, $ContactName, $CompanyName, $Phone);
        header("location: thanks.php");
        break;

        
}





// switch($command) {
    
//     case "addProduct":
//         $name = $_POST["name"];
//         $price = $_POST["price"];
//         $stock = $_POST["stock"];
//         $id = addProduct($name, $price, $stock);
//         header("location: thanks.php");
//         break;
    
// }
