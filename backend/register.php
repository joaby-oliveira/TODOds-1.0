<?php

include_once 'connect.php';

$email = $_POST['email'];
$pass = MD5($_POST['password']);
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$gender = $_POST['gender'];
$class = 1;

$query = "SELECT email FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
if(mysqli_num_rows($result) == 0){
    $query = "INSERT INTO users(firstname, lastname, email, password, gender, classCode)
    VALUES('$firstname', '$lastname', '$email', '$pass', '$gender', '$class')";
    $result = mysqli_query($connection, $query);
}else{
    echo "Erro: " . mysqli_connect_error();
}

?>