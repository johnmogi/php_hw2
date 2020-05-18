
<?php
require_once './dal.php';
function addClient($id, $first_name,$last_name, $email_address, $mobile_phone){ 
$sql = "INSERT INTO customers (id, first_name, last_name,email_address, mobile_phone)" . 
"VALUES ($id, '$first_name', '$last_name', '$email_address', '$mobile_phone')";
// "VALUES('$name', $price, $stock)"; 
 $cID = insert($sql);
    return $cID;
}

