<?php 
    include_once '../config.php';
    $sql = "DELETE FROM T_dados WHERE idT_dados = :Id";

    $query = $connect->prepare($sql);

    $query->execute(array(
        ":Id" => $_POST["delete"],
    ));

    header("location: ../index.php");
?>