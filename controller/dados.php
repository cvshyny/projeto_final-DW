<?php
    $sql = "SELECT * FROM T_dados";

    $query = $connect->prepare($sql);

    $query->execute();

?>