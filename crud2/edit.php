<?php
    require_once './products-logic.php';
    $id = $_GET["id"];
    $p = getOneProduct($id);
?>
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
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="brand">
    <a class="navbar-brand" href="#">Northwind</a>

  </li>
  <li class="nav-item" role="products-table">
    <a class="nav-link" id="products-tab" data-toggle="tab" href="index.php" role="tab" 
    aria-controls="products" aria-selected="true">Home</a>
  </li>
  </ul>
<div class="card">

        <h1>Edit Product: </h1>
        

        <form action="products-controller.php" method="post">

            <input type="hidden" name="id" value="<?php echo $p->id; ?>">
            <br><br>

            <input type="text" placeholder="Name..." name="name" value="<?php echo $p->name; ?>">
            <br><br>

            <input type="number" step="0.0001" placeholder="Price..." name="price" value="<?php echo $p->price; ?>">
            <br><br>

            <input type="number" placeholder="Stock..." name="stock" value="<?php echo $p->stock; ?>">
            <br><br>

            <input type="hidden" name="command" value="updateProduct">

            <button>Update Product</button>
        </form>
</div>
</body>
</html>