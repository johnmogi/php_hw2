<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Details</title>
</head>
<body class="container jumbotron">
   <?php
   require_once './products-logic.php';
   $id =$_GET["id"];
   $p = getOneProduct($id);
   echo "<h3> Name: $p->name</h3>";
   echo "<h3> Price: $p->price</h3>";
   echo "<h3> Stock: $p->stock</h3>";
   
   ?>
   <br/>
   <br/>
   <a href="index.php">back to list</a>
</body>
</html>