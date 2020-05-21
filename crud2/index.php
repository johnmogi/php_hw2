<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cruddon't ne rude </title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="index.js"></script>
</head>
<body class="container ">

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="brand">
    <a class="navbar-brand" href="#">Navbar</a>

  </li>
  <li class="nav-item" role="products-table">
    <a class="nav-link active" id="products-tab" data-toggle="tab" href="#products" role="tab" 
    aria-controls="products" aria-selected="true">Products</a>
  </li>
  <li class="nav-item" role="insert-product">
    <a class="nav-link" id="insert-tab" data-toggle="tab" href="#insert" role="tab" 
    aria-controls="insert" aria-selected="false">Add A Product</a>
  </li>
</ul>

<div class="tab-content jumbotron">
  <div class="tab-pane active" id="products" role="tabpanel" aria-labelledby="products-tab">
<table class="table dark table-hover table-striped">
  <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Template Engine: -->
                <?php
                    require_once './products-logic.php';
                    $products = getAllProducts();
                    foreach($products as $p) {
                        // print_r($p);
                    echo "<tr>" . 
                            "<td>" .
                                "<a href='details.php?id=$p->id'>$p->name</a>" .
                            "</td>" .
                            "<td>$p->price</td>" .
                            "<td>$p->stock</td>" .
                            "<td>" .
                                "<button class='btn btn-outline-info' onclick='navigateToEdit($p->id)'><i class='material-icons'>edit</i>Edit</button>" .
                            "</td>" .
                            "<td>" .
                                "<button class='btn btn-outline-warning' onclick='navigateToDelete($p->id,\"$p->name\")'><i class='material-icons'>delete</i>Delete</button>" .
                            "</td>" .
                         "</tr>";
                    }
                ?>
            </tbody>
        </table>

  </div>
  <div class="tab-pane jumbotron" id="insert" role="tabpanel" aria-labelledby="insert-tab">
  <div class="bd-callout bd-callout-danger">

            <h1>Add Product: </h1>
            <form action="products-controller.php" method="post">
            <div class="form-group">
    <label for="name">Product Name: </label>
    <input ttype="number" step="0.01" class="form-control" name="name" id="name" placeholder="Name...">
  </div>
  <div class="form-group">

  <label for="price">Enter Price: </label>
    <input type="text" class="form-control" name="price" id="price" placeholder="Price...">
  </div>
  <div class="form-group">

  <label for="stock">Enter Stock: </label>
    <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock...">
  </div>       
 
                <input type="hidden" name="command" value="addProduct">
                <button class="btn btn-outline-success">Add Product</button>
            </form>
 

</div>

</div>

<script>
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>


        <hr/>
    <p class="text-center">All rights reserved. <?php echo date(Y); ?> </p>

</body>
</html>