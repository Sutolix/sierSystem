<?php
require_once 'db_connect.php';//conexão ao banco de dados

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	$sql = "INSERT INTO clientes (nome, senha) VALUES ('$nome', '$senha')";

	if(mysqli_query($connect, $sql)):
		header('Location: ../../index.php?sucesso');
	else:
		header('Location: ../../index.php?erro');

	endif;

endif;

?>