<?php 
$host = "localhost";
$user = "root";
$password = "";
$banco = "php_estoque";

$conn = new mysqli($host, $user, $password, $banco);


if($conn->connect_errno){
    printf("Connect failed: %s\n", $$conn->$connect_errno);
    exit();
}


?>