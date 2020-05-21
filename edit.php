<?php
require_once './products-logic.php';
$id= $_GET["id"];
$p = getOneProduct($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body class="container jumbotron">
  <div class="col-sm card">
     <br/>
<h1>Edit Product: </h1>

        
        <form action="products-controller.php" method="post">
            
             <input type="hidden" step="0.01" value="<?php echo $p->id; ?>" name="id">
            <br><br>
            <input type="text" placeholder="Name..." value="<?php echo $p->name; ?>" name="name">
            <br><br>
            
            <input type="number" placeholder="Price..." value="<?php echo $p->price; ?>" name="price">
            <br><br>
            
            <input type="number" placeholder="Stock..." value="<?php echo $p->stock; ?>" name="stock">
            <br><br>
            
            <input type="hidden" name="command" value="updateProduct">
            
            <button>update Product</button>
        </form>
<br/>

    </div>
</body>
</html>