<?php
include_once 'connect.php';
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $resultado = mysqli_query($connection, $sql);
    // se achar algum usuário
    if(mysqli_num_rows($resultado) > 0){
        print_r($resultado);
    }
    // se não achar algum usuário
    else{
        $erros = array();
        $erros[] = 'CONSERTA AI PARSA';
        foreach ($erros as $erro) {
            echo $erro;
        }
        header ('Location: ../login.php');
    }
}
?>