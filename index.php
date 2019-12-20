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
<div id="loginCorpo">
	<div>
		<p>Seja bem vindo!</p>
	</div>


	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Login</h3>

			<form action="acessar.php" method="POST" name="formlogin">

				<div class="input_field col s12">
					<input type="text" name="login" id="login" required>
					<label for="login">Nome de usuário</label>
				</div>

				<div class="input_field col s12">
					<input type="password" name="senha" id="senha" required>
					<label for="senha">Senha</label>
				</div>

				<button type="submit" value='acessar' name="acessar" id="acessar" class="btn">Logar</button>
			</form>

		</div>
	</div>
</div>

<div id="bot">
</div>
<?php include_once("inc/footer.php") ?>