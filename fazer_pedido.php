<?php
	//Header
	include_once 'includes/header.php';
?>

<div id="pedir" class="col-sm-4 tabelaPedidos">
    <h4>Pedido</h4>

    <form action="php_action/criar.php" method="POST">

    <label for="nPacotes" class="control-label">Nº de pacotes: </label>
    <input type="number" id="nPacotes" name="nPacotes" class="form-control" min="5" max="30" />

    <label for="dataEntrega" class="control-label">Data de entrega: </label>
    <input type="date" id="dataEntrega" name="dataEntrega" class="form-control" />


    <label for="horaEntrega" class="control-label">Entregar a partir das: </label>
    <input type="time" id="horaEntrega" name="horaEntrega" class="form-control" />
    
    <label for="responsavel" class="control-label">Responsável: </label>
    <input type="text" id="responsavel" name="responsavel" class="form-control" />

    <label for="valorTotal" class="control-label">Valor total: </label>
    <input type="number" id="valorTotal" name="valorTotal" class="form-control" />

    <input id="confirmar" for="confirmar" type="submit" class="btn-sm btn-success" value="Confirmar">

    </form>
</div>

<div id="textOrder">
    <h5>Tenha em mente ao fazer seus pedidos:</h5>

    <p>O pacote de pães congelado com 12 unidades está a R$15, 90</p>

    <p>Pedidos feitos a partir das 22:00 não serão atendidos antes das 8:00 do dia seguinte.</p>

    <p>Por favor, faça seus pedidos com antecedência, pois assim nos permite cumprir os prazos com exatidão.</p>
</div>


<a id="back" class="btn btn-primary" href="index.php">Voltar a página inicial</a>

<?php
	//Footer
	include_once 'includes/footer.php'

?>