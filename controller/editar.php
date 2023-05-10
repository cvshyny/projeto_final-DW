<?php 
    include_once '../config.php';

    $nota = $_POST["nota"];
    $descricao = $_POST["descricao"];
    $Id = $_POST["edit"];

    $sql = "UPDATE T_dados SET nome_nota = :nova_nota, nota = :nova_descricao WHERE idT_dados = :Id";

    $query = $connect->prepare($sql);

    $query->execute(array(
        ":nova_nota" => $nota,
        ":nova_descricao" => $descricao,
        ":Id" => $Id,
    ));

    header("location: ../index.php");
?>