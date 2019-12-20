<?php
require_once 'db_connect.php';//conexão ao banco de dados

if(isset($_POST['acessar']))://qnd clicar em login

$pass = mysqli_escape_string($connect, $_POST['senhal']);//define senhal como valor da váriavel $pass
$nome = mysqli_escape_string($connect, $_POST['nomel']);// //     nomel   //    //  //   //     $nome

// compara os campos digitados com os dados do banco de dados

$verif = "SELECT * FROM logins WHERE nome = '$nome' && senha = '$pass'";
$res = mysqli_query($connect, $verif); //gera um resultado ao comando acima (0 para não ou 1 para sim)

// Verifica se encontrou algum registro
if(mysqli_num_rows($res) > 0){ //impõe uma condição de se sobre a váriavel $res, caso seja atingida tal condição o comando a baixo é exucutado
	$usuario = mysqli_fetch_row($res);//define o valor da váriavel $usuário dando a ela o valor de $res caso o comando acima seja verdadeiro
	include_once '../usuarios/home.php';
}
else{
}

endif;
?>
</body>
</html>