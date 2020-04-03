<?php 

require_once "conexao_pdo.php";

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

$conexao = newConnection("cursophp", "localhost", "root", "");
print_r(get_class_methods($conexao));

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id <br>";

}else{
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

?>
