<?php
require_once './products-logic.php';

$command = $_REQUEST['command'];

switch( $command ) {

    case 'getAllProducts':
    $products = getAllProducts();
    echo $products;
    break;

    case 'addProduct':
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $id = addProduct( $name, $price, $stock );
    header( 'location: thanks.php' );
    break;

    case 'updateProduct':
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $affectedRows = updateProduct( $id, $name, $price, $stock );
    header( 'location: thanks.php' );
    break;

    case 'deleteProduct':
    $id = $_POST['id'];
    $affectedRows = deleteProduct( $id );
    header( 'location: thanks.php' );
    break;

}

