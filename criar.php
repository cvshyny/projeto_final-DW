<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.css">
</head>
<body>
    <?php
        include_once './config.php';
        include_once './componentes/menu.php';

    ?>
    
    <main class="container">
        <form class="row d-flex justify-content-center text-center" action="./controller/criar.php" method="post">
            <div class="shadow-lg p-3 mb-5 bg-body rounded  col-12 col-lg-6 mt-3">
                <label class="col-12 fst-italic form-label"  for="Titulo"><h2>Titulo</h2></label>
                    <input maxlength="20" name="nota" class="col-8 form-floating form-control" id="Titulo" type="text">
                <label class="col-12 fst-italic form-label" for="descricao"><h2>Descrição</h2></label>
                    <textarea maxlength="200" class="col-8 form-floating form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea> <br>
                <button type="submit" style="width: 100px;" class="mt-3 btn btn-primary">Adicionar</button> 
            </div> 
    </main>
    </form>
    <script src="./bootstrap-5.2.3-dist/js/bootstrap.js"></script>
</body>
</html>