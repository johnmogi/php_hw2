1. linux folder location:
/srv/www/htdocs/

2. index.php:
add form

3. dal.php : <?php
function connect() {
    $connection = mysqli_connect("localhost", "root", "", "Northwind");
    if(mysqli_connect_errno($connection)) {
        $msg = "Error: " . mysqli_connect_error();
        die($msg);
    }
    return $connection;
}
function insert($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    $id = mysqli_insert_id($connection);
    mysqli_close($connection);
    return $id;
}

4. demo-logic.php:  <?php
require_once './dal.php'; 
function addProduct($name, $price, $stock) {
 $sql = "INSERT INTO Products(ProductName, UnitPrice, UnitsInStock) " .
          "VALUES('$name', $price, $stock)";
    $id = insert($sql);
    return $id;
}

5. demo-controller.php: <?php
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

6. 