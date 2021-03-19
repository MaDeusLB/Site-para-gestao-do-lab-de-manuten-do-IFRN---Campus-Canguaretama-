<?php
include("chave.php");
$idpeca = filter_input(INPUT_GET, "idpeca");
$nomepeca = filter_input(INPUT_GET, "nomepeca");
$compimp = filter_input(INPUT_GET, "compimp");
$descricao = filter_input(INPUT_GET, "descricao");
$marcapeca = filter_input(INPUT_GET, "marcapeca");

    $sql_code = "UPDATE peca SET nomepeca='$nomepeca', compimp='$compimp', descricao='$descricao', 
    marcapeca='$marcapeca' WHERE idpeca='$idpeca'";

    $editar = mysqli_query($mysqli, $sql_code);


    if($editar){
        $aviso = "Editado com sucesso!";
        echo "<script type='text/javascript'>alert('$aviso'); window.location='visualizapeca.php'</script>";
    }else{
        die("Erro" . mysqli_error($mysqli));
    }

?>