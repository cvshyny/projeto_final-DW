<?php include_once './controller/dados.php';?>

<div class="container">
    <div class="main-body">
        <hr class="my-4">
        <div class="row d-flex justify-content-center align-items-center">
            <?php while($dados = $query->fetch()){?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <form class="col-12 d-flex justify-content-start"  action="./editar.php" method="get">
                                <button name="edit" value="<?php echo  $dados["idT_dados"] ?>" style="width: 70px;" class=" btn btn-primary">editar</button> 
                            </form>
                            <div class="mt-5 fst-italic">
                                <h3><?php echo $dados["nome_nota"] ;?></h3>
                            </div>
                        </div>
                        <hr class="my-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h4 class="col-12 mb-0 fst-italic">Descrição:</h4>
                                <span class="text-secondary mt-3 fst-italic fs-5 fw-semibold"><?php echo $dados["nota"]; ?></span>
                            </li>
                        </ul>
                        <form class="col-12 d-flex justify-content-end mt-5"  action="./controller/deletar.php" method="post">
                        <button name="delete" value="<?php echo  $dados["idT_dados"] ?>" style="width: 80px;" class=" btn btn-primary">deletar</button> 
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>