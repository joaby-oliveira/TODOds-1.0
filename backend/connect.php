<?php
function novaConexao($base, $server, $user, $password){
    
    session_start();

    global $connect;

    try{
        $connect = new PDO("mysql:host=$server;dbname=$base", $user, $password);
        echo "DEU CERTO";
    
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    
    }
    
    return $connect;   
}
$conexao = novaConexao("cursophp", "localhost", "root", "");

?>
