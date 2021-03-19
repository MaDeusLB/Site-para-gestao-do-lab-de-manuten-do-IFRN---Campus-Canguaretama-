<?php

$idpeca = filter_input(INPUT_GET, "idpeca");
$nomepeca = filter_input(INPUT_GET, "nomepeca");
$compimp = filter_input(INPUT_GET, "compimp");
$descricao = filter_input(INPUT_GET, "descricao");
$marcapeca = filter_input(INPUT_GET, "marcapeca");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Editar Peça</title>
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top cor-nav">
            <div class="container">
                <a class=" js-scroll-trigger" href="index.php"><img src="img/icon.png" height="40px" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right text-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="index.html">Início</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="paginadoprof.php">Página do Professor</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container">
        <h1 class="text-center espaco">Editar Peça</h1>
        <form action="edit.php">

            <div class="row">
                <input type="hidden" name="idpeca" value="<?php echo $idpeca ?>">
                <div class="col-lg-6 ">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nomepeca" value="<?php echo $nomepeca ?>" placeholder="Nome">
                </div>

                <div class="col-lg-6">
                    <label>Marca:</label>
                    <input type="text" class="form-control" name="marcapeca" value="<?php echo $marcapeca ?>" placeholder="Marca">
                </div>

                <div class="col-lg-6 espaco">
                    <select name="compimp" class="form-select" value="<?php echo $compimp ?>" aria-label="Default select example">
                        <option selected>Selecione uma opção</option>
                        <option value="1">Computador</option>
                        <option value="0">Impressora</option>
                    </select>
                </div>

                <div class="col espaco">
                    <label>Descrição:</label>
                    <input type="text" name="descricao" value="<?php echo $descricao ?>" class="form-control" placeholder="Descrição">
                </div>

            </div>
            <div class="text-center">
                <br>
                <input class="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar">

        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>



</html>