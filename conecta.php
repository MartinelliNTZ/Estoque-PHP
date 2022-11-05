<?php 
$host = "localhost";
$user = "martinelli";
/**Etec não tem senha
 * acer senha = mysql
 */
$password = "123456";
$banco = "php_estoque";

$conn = new mysqli($host, $user, $password, $banco);


if($conn->connect_errno){
    printf("Connect failed: %s\n", $$conn->$connect_errno);
    exit();
}


?>