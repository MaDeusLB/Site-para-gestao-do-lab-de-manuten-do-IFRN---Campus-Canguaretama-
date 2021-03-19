<?php
include("chave.php");

if (isset($_POST['entrar'])) {
    $senha = sha1($_POST['senha']);
    $matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);

    $query = "SELECT * FROM colaborador WHERE senha = '{$senha}' AND matricula = '{$matricula}'";

    $result = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($result);

    if (empty($_POST['senha']) || empty($_POST['matricula'])) {
        $vazio = "Não pode ser enviado vazio!";
        echo "<script type='text/javascript'>alert('$vazio'); window.location='index.html'</script>";

        exit();
    } elseif ($row == 1) {
        echo "<script type='text/javascript'>window.location='paginadoprof.php'</script>";
    } else {
        $cola = "Colaborador não encontrado!";
        echo "<script type='text/javascript'>alert('$cola'); window.location='index.html'</script>";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">


    <title>Login Colaborador</title>
    <link rel="shortcut icon" href="img/icon.png">

    <link rel="stylesheet" type="text/css" href="css/stylecolab.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body id="page-top">


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

                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="index.html">Inicio</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/iconlogin.png" id="icon" header="10px" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="logincolab.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="matricula" placeholder="Matricula">
                <input type="password" id="login" class="fadeIn third" name="senha" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" name="entrar" value="Entrar">
            </form>



        </div>
    </div>




    <script src="pro.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>