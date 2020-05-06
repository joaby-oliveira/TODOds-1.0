<?php 
function inverteData($data){    
    $parteData = explode("/", $data);    
    $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
    return $dataInvertida;			
}
session_start();
include_once 'connect.php';
$date = $_POST["date"];
$subject = $_POST["subject"];
$description = $_POST["description"];
$status = $_POST["status"];
$team = $_POST["team"];
$link = $_POST["link"];
$sql = "INSERT INTO events(date, subject, link, description, status, team, classCode)
VALUES (
    '$date',
    '$subject',
    '$link',
    '$description',
    '1',
    'AB',
    1
)";
$result = mysqli_query($connection, $sql);
if($result){
    header ('Location: ../eventRegister.php');
}else{
    // echo "Erro: ". mysqli_connect_error($connection);
    print_r($sql);
}

?>