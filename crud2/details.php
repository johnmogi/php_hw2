<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended product view</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">

</head>
<body class="container jumbotron">
<div class="card">
   <?php
            require_once './products-logic.php';
            $id = $_GET["id"];
            $p = getOneProduct($id);
            echo "<h3>Name: $p->name</h3>";
            echo "<h3>Price: $p->price</h3>";
            echo "<h3>Stock: $p->stock</h3>";
        ?>
        <br>
        <a href="index.php">Back to List</a> 
        </div>
</body>
</html>