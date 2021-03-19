<?php 
	session_start();
	include("chave.php"); 
	$idcolab = filter_input(INPUT_GET, 'idcolab', FILTER_SANITIZE_NUMBER_INT);
	

	if(!empty($idcolab)){
		$result_user = "DELETE FROM colaborador WHERE idcolab = '$idcolab'";
		$resultado_user = mysqli_query($mysqli, $result_user);
		if(mysqli_affected_rows($mysqli)){
			$sucesso = "Colaborador deletado com sucesso!";
	   	    echo "<script type='text/javascript'>alert('$sucesso'); window.location='visualizacolab.php'</script>";
		}else{
			$erro = "Algo deu errado!";
	   	    echo "<script type='text/javascript'>alert('$erro'); window.location='visualizacolab'</script>";
		}

		}else{
		   $erro2 = "Necessário selecionar uma peça!";
		   echo "<script type='text/javascript'>alert('$erro2'); window.location='visualizacolab.php'</script>";
		}
	


?>