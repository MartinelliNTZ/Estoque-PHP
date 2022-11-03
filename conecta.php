<?php 
$host = "localhost";
$user = "root";
/**Etec não tem senha
 * acer senha = mysql
 */
$password = "mysql";
$banco = "php_estoque";

$conn = new mysqli($host, $user, $password, $banco);


if($conn->connect_errno){
    printf("Connect failed: %s\n", $$conn->$connect_errno);
    exit();
}


?>