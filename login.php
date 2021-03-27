<?php

include("chave.php");


if (empty($_POST['matricula']) || empty($_POST['datamanutencao']) || empty($_POST['localizacao'])
    ) {
    $vazio = "Formulário não pode ser enviado vazio!";
    echo "<script type='text/javascript'>alert('$vazio'); window.location='manutencao.php'</script>";

    exit();
}
  

$matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);

$query = "SELECT * FROM aluno WHERE matricula = '{$matricula}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    $datamanutencao = $_POST['datamanutencao'];
    $atividade = $_POST['atividade'];
    $localizacao = $_POST['localizacao'];
    $descricao = $_POST['descricao'];
    $peca = $_POST['peca'];



    $inserirequi = "INSERT INTO equipamento (data, localizacao, descricao) VALUES ('$datamanutencao', '$localizacao', '$descricao')";
  

    $inseriremanu = "INSERT INTO manutencao (datamanutencao, atividade, localizacao, descricao, aluno_matricula, equipamento_idequipamento)
    VALUE('$datamanutencao', '$atividade', '$localizacao', '$descricao', '$matricula', LAST_INSERT_ID())";
     
    
    $cadastrarequi = $mysqli->query($inserirequi) or die($mysqli->error);

    $cadastrarmanu = $mysqli->query($inseriremanu) or die($mysqli->error);


    foreach($peca as $pec){
        $sql = "INSERT INTO item_manutencao (manutencao_idmanutencao, peca_idpeca) VALUES (LAST_INSERT_ID(), $pec)";
        $result = mysqli_query($mysqli, $sql);
    }
    $mensagem = "Registrado!";
    echo "<script type='text/javascript'>alert('$mensagem'); window.location='manutencao.php'</script>";
    } else {
    $mensagem = "Algo deu errado!";
    echo "<script type='text/javascript'>alert('$mensagem'); window.location='manutencao.php'</script>";
    }
?>