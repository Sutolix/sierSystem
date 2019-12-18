<?php
	//Header
	include_once 'includes/header.php';
	include_once 'php_action/calculo.php';
?>

<div id="pedir" class="col-sm-4 tabelaPedidos">
    <div id="quadform">
    <h4>Pedido</h4>

    <form action="php_action/criar.php" method="POST" id="order">

    <label for="nPacotes" class="control-label">Nº de pacotes: </label>
    <input type="number" id="nPacotes" name="nPacotes" class="form-control" min="5" max="30" value="5" onchange="multi()"/>

    <label for="dataEntrega" class="control-label">Data de entrega: </label>
    <input type="date" id="dataEntrega" name="dataEntrega" class="form-control" required />


    <label for="horaEntrega" class="control-label">Entregar a partir das: </label>
    <input type="time" id="horaEntrega" name="horaEntrega" class="form-control" required />
    
    <label for="responsavel" class="control-label">Responsável: </label>
    <input type="text" id="responsavel" name="responsavel" class="form-control" required />

    <label for="valorTotal" class="control-label">Valor total(R$): </label>
    <input type="number" id="valorTotal" name="valorTotal" class="form-control" readonly/>

    <input type="hidden" name="confirmar" value="confirmar" />
    <input id="confirmar" type="submit" class="btn-sm btn-success" value="Confirmar">

    </form>
    </div>
</div>

<div id="textOrder">
    <h5>Tenha em mente ao fazer seus pedidos:</h5>

    <p>O pacote de pães congelado com 12 unidades está a R$15, 90</p>

    <p>Pedidos feitos a partir das 22:00 não serão atendidos antes das 8:00 do dia seguinte.</p>

    <p>Por favor, faça seus pedidos com antecedência, pois assim nos permite cumprir os prazos com exatidão.</p>
</div>


<a id="back" class="btn btn-primary" href="home.php">Voltar a página inicial</a>

<?php
	//Footer
	include_once 'includes/footer.php'

?>


<div id="modal-pedido">
    <div class="modal-corpo">
        <div id="fechar-modal-pedido">x</div>
        <h1>Confirme os dados do pedido</h1>
        <p class="modal-pedido-confirmacao">
            Confirmar pedido de <span id="pedido-pacotes"></span> pacotes,
            para o dia <span id="pedido-data"></span>,
            a partir das <span id="pedido-hora"></span> 
            para a <span id="pedido-padaria"></span>?
        </p>
        <p class="modal-pedido-valor">
            Valor a pagar: <span id="pedido-valor"></span>
        </p>
        <button id="enviar-pedido" name="confirmar">Ok, é isso mesmo!</button>
        <p class="modal-pedido-rodape">
            Responsável pelo pedido: <span id="pedido-responsavel"></span>
        </p>
    </div>
</div>

<script src="./js/pedidos.js"></script>