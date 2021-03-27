<?php include("chave.php");



if (isset($_POST['cadastrar'])) {
  $matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);

  $query = "SELECT * FROM colaborador WHERE matricula = '{$matricula}'";

  $result = mysqli_query($mysqli, $query);

  $row = mysqli_num_rows($result);



  if (empty($_POST['nomecolab']) || empty($_POST['senha'])) {
    $message = "O formulário não pode ser enviado vazio";
    echo "<script type='text/javascript'>alert('$message');</script>";
  } elseif ($row == 1) {
    $message1 = "Usuario já existe no banco";
    echo "<script type='text/javascript'>alert('$message1');</script>";
  } else {
    $nomecolab = $_POST['nomecolab'];
    $senha = sha1($_POST['senha']);
    $sql_code = "INSERT INTO colaborador (
           nomecolab, 
           matricula, 
           senha) 
          VALUES('$nomecolab', '$matricula', '$senha')";
    $cadastrar = $mysqli->query($sql_code) or die($mysqli->error);

    $message2 = "Cadastro feito com sucesso!";
    echo "<script type='text/javascript'>alert('$message2');</script>";
  }
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

  <title>Cadastro Colaborador</title>
  <link rel="shortcut icon" href="img/icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/stylecadastro.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="javascript" href="pro.js">
</head>

<body>
  <!-- nav -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top cor-nav">
      <div class="container">
        <a class=" js-scroll-trigger" href="index.html"><img src="img/icon.png" height="40px" alt="" /></a>
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




  <section class="espaco">

    <h1 class="text-center">Adicionar Colaborador</h1>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 col-sm-12 mb-4">
          <div class="portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="img/cadastro1.png" alt="" width="300px" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Registrar Colaborador</div>
              <div class="portfolio-caption-subheading text-muted">Click na imagem e preencha as informações</div>
            </div>
          </div>
        </div>

  </section>









<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->





  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal"><img src="img/x.png" alt="Close modal" /></div>
        <div class="container">
          <div class=" justify-content-center">
            <div class="">
              <div class="modal-body row">

                <div class="col-sm-12">
                  <form action="adicionarcolab.php" method="post">
                    <h1>Cadastro do Colaborador</h1>
                    <div class="row">
                      <div class="col-lg-12">
                        <input type="text" class="form-control" name="nomecolab" placeholder="Nome">
                      </div>
                      <div class="col-lg-6 espaco">
                        <input type="text" class="form-control" name="matricula" placeholder="Matricula">
                      </div>

                      <div class="col-lg-6 espaco">
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
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





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>