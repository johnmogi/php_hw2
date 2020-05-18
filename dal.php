<?php
function connect() {
    $connection = mysqli_connect("localhost", "root", "q1w2e3", "northwind");
    if(mysqli_connect_errno($connection)) {
        $msg = "Error: " . mysqli_connect_error();
        die($msg);
    }
    return $connection;
}
function insert($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    $id = mysqli_insert_id($connection);
    mysqli_close($connection);
    return $id;
}
