<?php
function connect() {
    $connection = mysqli_connect("localhost", "john", "q1w2e3", "northwind");
    if(mysqli_connect_errno($connection)) {
        $msg = "Error: " . mysqli_connect_error();  
        die($msg);
    }
    return $connection;
}

function select($sql) {
    $connection = connect();
    $table = mysqli_query($connection, $sql);
    $row = mysqli_fetch_object($table);
    while($row) {
        $arr[] = $row;
        $row = mysqli_fetch_object($table);
    }
    mysqli_close($connection);
    return $arr;
}

function insert($sql) {
    $connection = connect();
    mysqli_query($connection, $sql);
    $id = mysqli_insert_id($connection);
    mysqli_close($connection);
    return $id;
}


