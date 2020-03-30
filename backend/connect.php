<?php

$host = "sql201.epizy.com";
$user = "epiz_25058552";
$pass = "zOpAv9fKPeOOpo";
$base = "epiz_25058552_devisate";

$connection = mysqli_connect ($host, $user, $pass, $base) or die (mysqli_connect_error());

if(isset($connection)){
    echo "DEU CERTO PARSA!";
}

mysqli_set_charset($connection, "utf8");

?>