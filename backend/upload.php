<?php 

include_once 'connect.php';

$message = false;

if(isset($_FILES['file'])){
    $extension = strtolower(substr($_FILES['file'], ['name'], -4));
    $newName = md5(time()) . $extension;
    $directory = "upload";

    move_uploaded_file($_FILES['file'], ['tmp_name'], $directory . $newName);

    $query = "INSERT INTO photos(file, date, eventCode) VALUES ('$newName', NOW(), 1)"; 

    if(mysqli->query($query)){
        $msg = "Envio bem sucedido";
    }else{
        $msg = "Falha no envio";
    }
}

?>