<?php

include_once 'connect.php';
session_start();
$email = $_POST['email'];
$pass = MD5($_POST['password']);
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$gender = $_POST['gender'];
$class = 1;
$query = "SELECT email FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$rows = mysqli_num_rows($result);

if($rows == 0){
    $query = "INSERT INTO
    users(firstname, lastname, email, password, gender, classCode)
    VALUES
    ('$firstname', '$lastname', '$email', '$pass', '$gender', '$class')";
    
    $result = mysqli_query($connection, $query);
    if($result){
        $message = "Cadastrado com sucesso!";
        $_SESSION['errors'] = "$message";
        echo "
        <script>
        console.log('logado com success');
        setTimeout(function(){
            window.location = '../register.php';
        }, 1000)
        </script>";
    }else{
        $message = "Registro falhou: tente novamente";
        $_SESSION['errors'] = "$message";
        echo "
        <script>
        console.log('logado com success');
        setTimeout(function(){
            window.location = '../register.php';
        }, 1000)
        </script>";
    }
}else{
    $message = "Registro falhou: conta já existente.";
    $_SESSION['errors'] = "$message";
    echo "
        <script>
        console.log('logado com success');
        setTimeout(function(){
            window.location = '../register.php';
        }, 1000)
        </script>";
}
$_SESSION['errors'] = "$message";

?>