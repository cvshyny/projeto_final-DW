<?php include_once './controller/dados.php';?>

<div class="container">
    <div class="main-body">
        <hr class="my-4">
        <div class="row d-flex justify-content-center align-items-center">
            <?php while($dados = $query->fetch()){?>
            <div  class="mt-4 col-lg-4 shadow-lg p-3 mb-5 bg-body rounded" >
                <div style="border: none;" class="card">
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
                        <ul class="col-12 list-group list-group-flush">
                            <li style="height: 250px;" class="list-group-item ">
                                <h4 class="col-12 mb-0 fst-italic">Descrição:</h4>
                                <p class="col-12 text-secondary mt-3 fst-italic fs-5 fw-semibold"><?php echo $dados["nota"]; ?></p>
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