<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php homework lesson 2</title>
</head>

<body>
   <p>Add a Client into the Northwind database:</p>
   <!-- <p>needs to build a counter, or even to retrieve the value first!</p>  -->

   <form action="customer-controller.php" method="post">
      <input type="text" name="CustomerID" placeholder="ABCDE" />
      <br />
      <br />
      <input type="text" name="ContactName" placeholder="Enter Contact Name..." />
      <br />
      <br />
      <input type="text" name="CompanyName" placeholder="Enter Company Name..." />
      <br />
      <br />
      <input type="text" name="Phone" placeholder="Enter email address..." />
      <br />
      <br />
     
      <input type="hidden" name="command" value="addClient" />

      <button>Add Customer</button>

   </form>

   <h1>Add Product: </h1>
        
        <form action="products-controller.php" method="post">
            
            <input type="text" placeholder="Name..." name="name">
            <br><br>
            
            <input type="number" placeholder="Price..." name="price">
            <br><br>
            
            <input type="number" placeholder="Stock..." name="stock">
            <br><br>
            
            <input type="hidden" name="command" value="addProduct">
            
            <button>Add Product</button>
        </form>

</body>

</html>