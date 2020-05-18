<?php

require_once './dal.php';

function addProduct($name, $price, $stock) {
 $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
          "VALUES('$name', $price, $stock)";
    $id = insert($sql);
    return $id;
}


