<?php 
session_start();
include_once 'connect.php';
$date = $_POST["date"];
$subject = $_POST["subject"];
$description = $_POST["description"];
$status = $_POST["status"];
$team = $_POST["team"];

$sql = "INSERT INTO events(date, subject, description, status, team, classCode)
VALUES (
    '$date',
    '$subject',
    '$description',
    '$status',
    '$team',
    1
)";
$result = mysqli_query($connection, $sql);
if($result){
    echo "deu certo";
}else{
    // echo "Erro: ". mysqli_connect_error($connection);
    print_r($sql);
}

?>