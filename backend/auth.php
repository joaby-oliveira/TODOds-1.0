<?php 

//Incluindo a conexão no arquivo
include_once 'connect.php';

//Declarando variáveis de usuário e senha
$pass = $_POST['password'];
$user = $_POST['user'];

//Fazendo uma condição de consulta ao banco
$query = "SELECT * 
FROM users 
WHERE email" . '$_POST["user"]' . 
"AND password" . '$_POST["password"]';

//Resultado da consulta ao banco
$result = mysqli_query($connection, $query);

//Número de linhas com resultados da consulta
$row = mysqli_num_rows($result);

//Busca por array dos campos
$data = mysqli_fetch_row ($result);

//Login com sucesso
if($data != null) {
    echo "<script>alert('Você foi logado com sucesso, $user!')</script>";
    header ('location:../index.html');
}

//Login falhou
else {
    echo "<script>alert('Error 404')</script>";
}

?>