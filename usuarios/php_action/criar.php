<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['confirmar'])):
	$nPacotes = mysqli_escape_string($connect, $_POST['nPacotes']);
	$dataEntrega = mysqli_escape_string($connect, $_POST['dataEntrega']);
	$horaEntrega = mysqli_escape_string($connect, $_POST['horaEntrega']);
	$responsavel = mysqli_escape_string($connect, $_POST['responsavel']);
	$valorTotal = mysqli_escape_string($connect, $_POST['valorTotal']);

	$sql = "INSERT INTO orders (responsavel, dataEntrega, horaEntrega, nPacotes, valorTotal) VALUES ('$responsavel', '$dataEntrega', '$horaEntrega', '$nPacotes', '$valorTotal')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['popup'] = "Mensagem salva!";
		header('Location: ../pedidos.php');
	else:
		$_SESSION['popup'] = "Erro ao salvar mensagem.";
		header('Location: ../pedidos.php');
	endif;

else:
	echo "Falha";

endif;

?>