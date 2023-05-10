<?php
    include_once "../config.php";

    $nota = $_POST["nota"];
    $descricao = $_POST["descricao"];

    $sql = "INSERT INTO T_dados(nome_nota, nota) VALUES (:nome, :nota)";

    $query = $connect->prepare($sql);

    $query->execute(array(
        ":nome" => $nota,
        ":nota" => $descricao,
    ));

    header("location: ../index.php");

?>