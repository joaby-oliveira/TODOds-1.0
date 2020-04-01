<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "todods";

global $connect;

try{
    $connect = new PDO("mysql:dbname-".$database."; host-".$host, $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo "ERROR: ".$error->getMessage();
    exit;
}

?>
