<?php

class user{

    public function login($email ,$password){
        global $connect;

        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $query = $connect->prepare($query);
        $query->bindValue("email", $email);
        $query->bindValue("password", md5($password));
        $query->execute();

        if($query->rowCount() > 0){
            $data = $query->fetch();

            $_SESSION['userID'] = $data['userCode'];

            return true;
        }else{
            return false;
        }

    }
}



?>