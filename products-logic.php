<?php

require_once './dal.php';

function addProduct($name, $price, $stock) {
 $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
          "VALUES('$name', $price, $stock)";
    $id = insert($sql);
    return $id;
}


function updateProduct($id, $name, $price, $stock) {
    $sql = "UPDATE Products SET ".
    "ProductName= '$name', UnitPrice= $price, ".
    "UnitsInStock=$stock WHERE productID=$id";
    $affectedRows = update($sql);
    return $affectedRows;
}


function deleteProduct($id) {
    $sql = "DELETE from Products WHERE productID=$id";
    $affectedRows = delete($sql);
    return $affectedRows;
}
function getAllProducts(){
    $sql = "SELECT productID AS id, ProductName AS name," .
    "UnitPrice AS price, UnitsInStock AS stock " .
    "FROM Products";
    $products = select($sql);
    return $products;
}
function getOneProduct($id){
 $sql = "SELECT productID AS id, ProductName AS name," .
    "UnitPrice AS price, UnitsInStock AS stock " .
    "FROM Products WHERE ProductID =$id";
      $products = select($sql);
    return $products[0];
}

