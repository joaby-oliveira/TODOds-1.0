<?php

include_once 'connect.php';

session_start();

if(isset($_POST['submit'])){
    $email = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    // $result - $connection->query($sql);
    //Caso achar um usuário
    if(mysqli_num_rows($result) > 0){
        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password';";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) == 1){
            $dados = mysqli_fetch_assoc($result);
            // $_SESSION = $dados;

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

            $_SESSION['classCode'] = $dados['classCode'];
            $classCodeUser =&$_SESSION['classCode'];
            // Array ( [userCode] => 1 [firstname] => jojo [lastname] => ooj [email] => big@gmail.com [password] => toto123 [gender] => M )
            print_r($_SESSION);
            header('Location: ../events.php');
            $_SESSION['errors'] = null;
            
        }else {
            // print_r('teste'); exit;
            $_SESSION['errors'] = "Email ou senha não conferem";
            header('Location: ../login.php');
            // print_r($_SESSION['errors']);
        }
    }else{
        $_SESSION['errors'] = "O usuário digitado não existe";
        header('Location: ../login.php');
        // print_r($_SESSION['errors']);
        // echo "cehgou men KKK";
    }
    exit;
    

    // login.php => digita: email e senha -> auth.php: O usuário digitado não existe -> header('login.php');
    // login.php -> digita: email e senha -> auth.php: O usuário digitado não existe -> login.php && print_r('erro')

    // action='/auth.php'
    // login POST -> servidor PHP/APACHE -> CHAMADA -> vai ver o arquivo -> auth.php -> return uma resposta (return $list, throw new error, print_r) -> apache -> login.php 
    "<script>
        document.querySelector('form').addEventListerner('submit', event => {
            event.preventDefault();
            
        });
    </script>";
}

?>
