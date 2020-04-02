<?php
function newConnection($server, $user, $password, $database){
    $connection = mysqli_connect ($server, $user, $password, $database);
    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    }
    return $connection;
}
$connection = newConnection("localhost", "root", "", "cursophp");
// print_r($connection);
?>