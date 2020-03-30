<?php
require_once('connect.php');
echo "<br>";
$date = $_POST["day"];
$subject = $_POST["subject"];
$description = $_POST["description"];
$status = $_POST["status"];
$FK_class = $_POST["FK_class"];

$sql = "INSERT INTO events (date, subject, description, status, photo, FK_class)
VALUES
('$date',
'$subject',
'$description',
'$status',
'$FK_class');";

if(mysqli_query($conexao, $sql)){
    echo "EAE MANO KKKJ, FUNFOU PARSA";
}else{
    echo "VISH MEU BOM, MOIÔ HEIN";
    echo mysqli_connect_error($conexao);
}
// echo $date;
// echo $subject;
// echo $description;
// echo $status;
// echo $FK_class;
// echo $sql;