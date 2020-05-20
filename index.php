<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php homework lesson 2</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
</div>


</body>

</html>