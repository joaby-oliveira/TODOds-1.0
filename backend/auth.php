<?php

include_once 'connect.php';

session_start();

if(isset($_POST['submit'])){
    $email = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $resultado = mysqli_query($connection, $sql);
    
    //Caso achar um usuário
    if(mysqli_num_rows($resultado) > 0){
        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password';";
        $resultado = mysqli_query($connection, $sql);
        if(mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_assoc($resultado);
            $_SESSION['userCode'] = $dados['userCode'];
            $userCode =&$_SESSION['userCode'];
            
            $_SESSION['firstname'] = $dados['firstname'];
            $firstname =&$_SESSION['firstname'];
            
            $_SESSION['lastname'] = $dados['lastname'];
            $lastname =&$_SESSION['lastname'];
            
            $_SESSION['email'] = $dados['email'];
            $email =&$_SESSION['email'];
            
            $_SESSION['password'] = $dados['password'];
            $password =&$_SESSION['password'];
            
            $_SESSION['gender'] = $dados['gender'];
            $gender =&$_SESSION['gender'];
            // Array ( [userCode] => 1 [firstname] => jojo [lastname] => ooj [email] => big@gmail.com [password] => toto123 [gender] => M )
            header('Location: ../events.php');
            
        }
    }
    
    //Usuário não encontrado
    else{
        $erros = array();
        $erros[] = 'Erro encontrado!';
        
        foreach ($erros as $erro) {
            echo $erro;
        }
        
        header ('Location: ../login.php');
    }
}

?>
