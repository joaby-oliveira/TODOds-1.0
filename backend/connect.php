<?php

$host = "sql201.epizy.com";
$user = "epiz_25058552";
$pass = "zOpAv9fKPeOOpo";
$banco = "epiz_25058552_devisate";
$conexao = mysqli_connect ($host, $user, $pass) or die (mysqli_connect_error());
if(isset($conexao)){
    echo "DEU CERTO PARSA!";
}

mysqli_set_charset($conexao, "utf8");

?>