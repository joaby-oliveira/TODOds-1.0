<?php

session_start();

//Remove os dados da sessão
session_unset();

//Destroi a sessão
session_destroy();

// Encaminha para o arquivo de login
header('Location:../login.php');
?>
