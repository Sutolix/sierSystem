<?php include_once("inc/body.php") ?>
<script language="JavaScript">
	function abrir(URL) {

		var width = 150;
		var height = 250;

		var left = 99;
		var top = 99;

		window.open(URL, 'janela', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

	}
</script>
<div>
	<p>Seja bem vindo!</p>
</div>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Login</h3>

		<form action="#" method="POST">

			<div class="input_field col s12">
				<input type="text" name="nomel" id="nomel">
				<label for="nomel">Nome de usuário</label>
			</div>

			<div class="input_field col s12">
				<input type="text" name="senhal" id="senhal">
				<label for="senhal">Senha</label>
			</div>

			<button type="submit" value='acessar' name="acessar" id="acessar" class="btn">Logar</button>
		</form>

	</div>
</div>

<?php
require_once 'php_action/db_connect.php';//conexão ao banco de dados

if(isset($_POST['acessar']))://qnd clicar em login

$pass = mysqli_escape_string($connect, $_POST['senhal']);//define senhal como valor da váriavel $pass
$nome = mysqli_escape_string($connect, $_POST['nomel']);// //     nomel   //    //  //   //     $nome

// compara os campos digitados com os dados do banco de dados

$verif = "SELECT * FROM logins WHERE nome = '$nome' && senha = '$pass'";
$res = mysqli_query($connect, $verif); //gera um resultado ao comando acima (0 para não ou 1 para sim)

// Verifica se encontrou algum registro
if(mysqli_num_rows($res) > 0){ //impõe uma condição de se sobre a váriavel $res, caso seja atingida tal condição o comando a baixo é exucutado
	$usuario = mysqli_fetch_row($res);//define o valor da váriavel $usuário dando a ela o valor de $res caso o comando acima seja verdadeiro
	header('Location: usuarios/home.php');
}
else{
	
}

endif;
?>

<div id="bot">
</div>
<?php include_once("inc/footer.php") ?>