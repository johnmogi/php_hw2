<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once './customer-logic.php';

$command = $_REQUEST["command"];

switch($command) {
    case "addCustomer":
        $id = $_POST["id"];
        $company = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email_address = $_POST["email_address"];
        $mobile_phone = $_POST["mobile_phone"];
        
        $cID = addProduct($id, $first_name,$last_name, $email_address, $mobile_phone);
       echo $cID;
        header("location: thanks.php");
        break;
    
}
?>
</body>
</html>


