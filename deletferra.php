<?php 
	session_start();
	include("chave.php"); 
	$idferramenta = filter_input(INPUT_GET, 'idferramenta', FILTER_SANITIZE_NUMBER_INT);
	

	if(!empty($idferramenta)){
		$result_user = "DELETE FROM ferramenta WHERE idferramenta = '$idferramenta'";
		$resultado_user = mysqli_query($mysqli, $result_user);
		if(mysqli_affected_rows($mysqli)){
			$sucesso = "Ferramenta deletada com sucesso!";
	   	    echo "<script type='text/javascript'>alert('$sucesso'); window.location='visualizaferra.php'</script>";
		}else{
			$erro = "Algo deu errado!";
	   	    echo "<script type='text/javascript'>alert('$erro'); window.location='visualizaferra.php'</script>";
		}

		}else{
		   $erro2 = "Necessário selecionar uma peça!";
		   echo "<script type='text/javascript'>alert('$erro2'); window.location='visualizaferra.php'</script>";
		}
	


?>
