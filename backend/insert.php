<?php 
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
    1
)";

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id <br>";

}else{
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

?>