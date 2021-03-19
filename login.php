<?php  

include("chave.php"); 


if(empty($_POST['nome']) || empty($_POST['matricula']) || empty($_POST['datamanutencao']) || empty($_POST['localizacao']) 
|| empty($_POST['peca']) || empty($_POST['peca1']) || empty($_POST['peca2']) || empty($_POST['peca3'])){
    $vazio = "Formulário não pode ser enviado vazio!";
    echo "<script type='text/javascript'>alert('$vazio'); window.location='manutencao.php'</script>";
    
     exit();  
}
   
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);

    $query = "SELECT * FROM aluno WHERE matricula = '{$matricula}'";

    $result = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($result);

if($row == 1){
    
    $datamanutencao = $_POST['datamanutencao'];
    $atividade = $_POST['atividade'];
    $localizacao = $_POST['localizacao']; 
    $descricao = $_POST['descricao'];
    $peca = $_POST['peca'];
    $peca1 = $_POST['peca1'];
    $peca2 = $_POST['peca2'];
    $peca3 = $_POST['peca3'];
    $peca4 = $_POST['peca4'];
    $peca5 = $_POST['peca5'];
    
   
    
    $inserir = "INSERT INTO equipamento (data, localizacao, descricao, peca_idpeca, peca_idpeca1, 
    peca_idpeca2, peca_idpeca3, peca_idpeca4, peca_idpeca5) VALUES ('$datamanutencao', '$localizacao', '$descricao', 
    '$peca', '$peca1', '$peca2', '$peca3', '$peca4', '$peca5')";

   
   
   $use = "INSERT INTO manutencao (datamanutencao, atividade, localizacao, descricao, aluno_matricula, nomealuno, 
   equipamento_idequipamento)
    VALUE('$datamanutencao', '$atividade', '$localizacao', '$descricao', '$matricula', '$nome', LAST_INSERT_ID())";
    
   
    $usar = $mysqli->query($inserir) or die($mysqli->error);
   
    $cadastrar = $mysqli->query($use) or die($mysqli->error);  

    $deucerto = "Registrado!";
    echo "<script type='text/javascript'>alert('$deucerto'); window.location='index.html'</script>";

 
    
}else{
         $mensagem = "Algo deu errado!";
           echo "<script type='text/javascript'>alert('$mensagem'); window.location='manutencao.php'</script>";
}
