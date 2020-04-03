<?php 
session_start();
include_once 'backend/connect.php';
$dia = $_POST["dia"];
$materia = $_POST["materia"];
$descricao = $_POST["descricao"];
$urgencia = $_POST["urgencia"];

$sql = "INSERT INTO events (date, subject, description, status, FK_class)
VALUES(
    '$dia', 
    '$materia', 
    '$descricao', 
    '$urgencia', 
    '$classCode'
)";
$result = mysqli_query($connection, $sql);
if($result){
    echo "deu certo";
}else{
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

?>