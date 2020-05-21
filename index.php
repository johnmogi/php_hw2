<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php homework lesson 2</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="index.js"></script>

</head>

<body>
<br/>
<div class="container">
  <div class="row">
    <div class="col-sm card">
     <br/>

   <h4>Add a Client into the Northwind database:</h4>
   <!-- <p>needs to build a counter, or even to retrieve the value first!</p>  -->

   <form action="customer-controller.php" method="post">
     <div class="form-group">
    <label for="CustomerID">ENTER Customer ID</label>
      <input type="text" name="CustomerID" placeholder="ABCDE" />
     </div>
    <div class="form-group">
    <label for="ContactName">ENTER Contact Name</label>
      <input type="text" name="ContactName" placeholder="Enter Contact Name..." />
         </div>
    <div class="form-group">
    <label for="CompanyName">ENTER Company Name</label>
      <input type="text" name="CompanyName" placeholder="Enter Company Name..." />
    </div>
    <div class="form-group">
    <label for="Phone">ENTER Phone</label>
      <input type="text" name="Phone" placeholder="Enter email address..." />
  </div>
     
      <input type="hidden" name="command" value="addClient" />
      <button class="btn btn-primary">Add Customer</button>
</form>
<br/>

    </div>
      <div class="col-sm card">
     <br/>

   <h4>Update a Client from the Northwind database:</h4>
   <!-- <p>needs to build a counter, or even to retrieve the value first!</p>  -->

   <form action="customer-controller.php" method="post">
     <div class="form-group">
    <label for="CustomerID">ENTER Customer ID</label>
      <input type="text" name="CustomerID" placeholder="ABCDE" />
     </div>
    <div class="form-group">
    <label for="ContactName">ENTER Contact Name</label>
      <input type="text" name="ContactName" placeholder="Enter Contact Name..." />
         </div>
    <div class="form-group">
    <label for="CompanyName">ENTER Company Name</label>
      <input type="text" name="CompanyName" placeholder="Enter Company Name..." />
    </div>
    <div class="form-group">
    <label for="Phone">ENTER Phone</label>
      <input type="text" name="Phone" placeholder="Enter email address..." />
  </div>
     
      <input type="hidden" name="command" value="updateClient" />
      <button class="btn btn-primary">Update Customer</button>
</form>
<br/>

    </div>

  </div>




<hr/>

  <div class="row ">
    <div class="col-sm card">
     <br/>
<h1>update Product: </h1>
        
        <form action="products-controller.php" method="post">
            
             <input type="number" step="0.01" placeholder="ID..." name="id">
            <br><br>
            <input type="text" placeholder="Name..." name="name">
            <br><br>
            
            <input type="number" placeholder="Price..." name="price">
            <br><br>
            
            <input type="number" placeholder="Stock..." name="stock">
            <br><br>
            
            <input type="hidden" name="command" value="updateProduct">
            
            <button>update Product</button>
        </form>
<br/>

    </div>
      <div class="col-sm card">
     <br/>
<h1>delete Product: </h1>
        
        <form action="products-controller.php" method="post">
            
             <input type="number" step="0.01" placeholder="ID..." name="id">
            <br><br>
           
            <input type="hidden" name="command" value="deleteProduct">
            
            <button>delete Product</button>
        </form>
<br/>

    </div>
    </div>

    <hr/>
    <div class="card">
    <table class="table table-bordered table-hover">
    <thead>
<tr>

    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Edit</th>
</tr>
    </thead>
<tbody>
<?php
require_once './products-logic.php';
$products = getAllProducts();
foreach ($products as $p){
   // print_r $p;
   echo "<tr>" .
   "<td>".
   "<a href='details.php?id=$p->id'>$p->name</a>".
   " </td>" .
   "<td>$p->price</td>" .
   "<td>$p->stock</td>" .
    "<td>".
   "<button class='btn btn-info' onclick='navigateToEdit($p->id)' >Edit</button>".
   " </td>" .
       "<td>".
   "<button class='btn btn-danger' onclick='navigateToDelete($p->id,\"$p->name\")'>Delete</button>".
   " </td>" .
   "</tr>";
}
?>
</tbody>
    </table>
    </div>

</body>

</html>