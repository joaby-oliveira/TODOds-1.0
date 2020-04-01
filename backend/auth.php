<?php 

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['password']) && !empty($_POST['password'])) {

    require 'connect.php';
    require 'userClass.php';

    $object = new user;

    $email = addslashes($_POST['user']);
    $password = addslashes($_POST['password']);    

    if ($object->login($email, $password) == true){
        if(isset($_SESSION['userID'])){
            header("Location:../index.html");
        }else{
            header("Location:../login.html");    
        }
    }else{
        header("Location:../login.html");
    }

}else {   
    header("Location:../login.html");
}



?>