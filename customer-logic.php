
<?php
require_once './dal.php';

function addClient($CustomerID, $ContactName, $CompanyName, $Phone){ 

$sql = "INSERT INTO customers(CustomerID, ContactName, CompanyName, Phone)  " .
        "VALUES ('$CustomerID', '$ContactName', '$CompanyName' , '$Phone')";

$id = insert($sql);
    return $id;
}

function updateClient($CustomerID, $ContactName, $CompanyName, $Phone){ 

$sql = "UPDATE customers SET ContactName = '$ContactName', CompanyName = '$CompanyName', Phone = '$Phone'  " .
        "WHERE CustomerID = '$CustomerID'";

$id = insert($sql);
    return $id;
}

// function addProduct($name, $price, $stock) {
//  $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
//           "VALUES('$name', $price, $stock)";
//     $id = insert($sql);
//     return $id;
// }
