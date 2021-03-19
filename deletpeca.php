<?php 
	session_start();
	include("chave.php"); 
	$idpeca = filter_input(INPUT_GET, 'idpeca', FILTER_SANITIZE_NUMBER_INT);
	

	if(!empty($idpeca)){
		$result_user = "DELETE FROM peca WHERE idpeca = '$idpeca'";
		$resultado_user = mysqli_query($mysqli, $result_user);
		if(mysqli_affected_rows($mysqli)){
			$sucesso = "Peça deletada com sucesso!";
	   	    echo "<script type='text/javascript'>alert('$sucesso'); window.location='visualizapeca.php'</script>";
		}else{
			$erro = "Algo deu errado!";
	   	    echo "<script type='text/javascript'>alert('$erro'); window.location='visualizapeca.php'</script>";
		}

		}else{
		   $erro2 = "Necessário selecionar uma peça!";
		   echo "<script type='text/javascript'>alert('$erro2'); window.location='visualizapeca.php'</script>";
		}
	


?>

