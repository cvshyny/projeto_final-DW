<?php
    $server = "localhost";
    $senha = "";
    $user = "root";
    $database = "final";

    try{
        $connect = new PDO("mysql:host=$server;dbname=$database", $user, $senha);
    }catch(Exception $erro){
        echo "<h1>Erro aqui</h1>";
    }

?>