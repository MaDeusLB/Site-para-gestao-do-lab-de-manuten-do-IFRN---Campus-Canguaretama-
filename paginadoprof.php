<?php include("chave.php");



if (isset($_POST['cadastrar'])) {

    $nomepeca = $_POST['nomepeca'];
    $compimp = $_POST['compimp'];
    $descricaopeca = $_POST['descricao'];
    $marcapeca = $_POST['marcapeca'];

    if (empty($_POST['nomepeca'])) {
        $vazio = "Formulário não pode ser enviado vazio!";
        echo "<script type='text/javascript'>alert('$vazio'); window.location='paginadoprof.php'</script>";
    } else {
        $sql_code = "INSERT INTO peca (
           nomepeca,
           compimp,  
           descricao,   
           marcapeca 
         ) 
          VALUES('$nomepeca', '$compimp', '$descricaopeca', '$marcapeca')";
        $cadastrar = $mysqli->query($sql_code) or die($mysqli->error);
        $certo1 = "Peça cadastrada!";
        echo "<script type='text/javascript'>alert('$certo1'); window.location='paginadoprof.php'</script>";
    }
}


if (isset($_POST['cadastrarf'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];

    if (empty($_POST['nome'])) {
        $vazio = "Formulário não pode ser enviado vazio!";
        echo "<script type='text/javascript'>alert('$vazio'); window.location='paginadoprof.php'</script>";
    } else {
        $sql_code = "INSERT INTO ferramenta (nome, marca, descricao) VALUES('$nome', '$marca', '$descricao')";
        $cadastrar = $mysqli->query($sql_code) or die($mysqli->error);
        $certo1 = "Ferramenta cadastrada!";
        echo "<script type='text/javascript'>alert('$certo1'); window.location='paginadoprof.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <title>Página de cadastro de peças</title>

    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylecadastro.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body id="pagina" onload="ligar()" display='none'>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="adicionarcolab.php">Adicionar Colaborador</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="visualizacolab.php">Visualizar Colaborador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="espaco container text-center">
        <h1 class="text-center">Página do Professor</h1>
        <br>
        <br>

        <div class="row">

            <div class="col-lg-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="img/eng.png" alt="" width="150px" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cadastro de Peças</div>
                        <div class="portfolio-caption-subheading text-muted">Click na imagem e preencha as informações</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="img/ferra.png" alt="" width="150px" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cadastro de Ferramentas</div>
                        <div class="portfolio-caption-subheading text-muted">Click na imagem e preencha as informações</div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <section class="container espaco text-center">
        <h2>Históricos de Registros</h2>
        <br>
        <div class="row">
            <div class="col-4">
                <h3>Registro de Manutenções</h3>
                <a class="btn btn-primary" href="visualizamanu.php" role="button">Vizualizar</a>
            </div>
            <div class="col-4">
                <h3>Registro de Peças</h3>
                <a class="btn btn-primary" href="visualizapeca.php" role="button">Vizualizar</a>
            </div>

            <div class="col-4">
                <h3>Registro de Ferramentas</h3>
                <a class="btn btn-primary" href="visualizaferra.php" role="button">Vizualizar</a>
            </div>
        </div>
        <br>
        <br>
    </section>

















    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="img/x.png" alt="Close modal" /></div>
                <div class="container">
                    <div class=" justify-content-center">
                        <div class="">
                            <div class="modal-body row">

                                <div class="col-sm-12">
                                    <form action="paginadoprof.php" method="post">
                                        <h1 class="text-center">Sessão de Cadastro de Peças</h1>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="nomepeca" placeholder="Nome">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="marcapeca" placeholder="Marca">
                                            </div>

                                            <div class="col-lg-6 espaco">
                                                <select name="compimp" class="form-select" aria-label="Default select example">
                                                    <option selected>Selecione uma opção</option>
                                                    <option value="1">Computador</option>
                                                    <option value="0">Impressora</option>
                                                </select>
                                            </div>

                                            <div class="col espaco">
                                                <input type="text" name="descricao" class="form-control" placeholder="Descrição">
                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <br>
                                            <input class="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="img/x.png" alt="Close modal" /></div>
                <div class="container">
                    <div class=" justify-content-center">
                        <div class="">
                            <div class="modal-body row">

                                <div class="col-sm-12">
                                    <h1>Cadastro de Ferramentas</h1>
                                    <form method="post" action="paginadoprof.php">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12  form-group">
                                                <br>
                                                <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Nome da Ferramenta">
                                            </div>

                                            <div class="col-lg-6 espaco form-group">

                                                <input type="text" class="form-control" name="marca" placeholder="Marca">
                                            </div>

                                            <div class="col-lg-6 espaco form-group">

                                                <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                                            </div>


                                        </div>
                                        <div class="text-center">
                                            <br>
                                            <input class="btn btn-primary" type="submit" value="Cadastrar" name="cadastrarf">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>