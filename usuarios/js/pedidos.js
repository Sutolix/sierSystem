var formulario = document.getElementById('order');
var modal_pedidos = document.getElementById('modal-pedido');
var btn_enviar_pedido = document.getElementById('enviar-pedido');
var fechar_modal_pedido = document.getElementById('fechar-modal-pedido');

// Botão que fecha o modal
fechar_modal_pedido.onclick = function() {
    modal_pedidos.classList.remove('show');
};

formulario.onsubmit = function(e) {
    e.preventDefault(); // Evita evento de enviar

    // INPUTS
    var nPacotes    = document.getElementById('nPacotes').value;
    var dataEntrega = document.getElementById('dataEntrega').value;
    var horaEntrega = document.getElementById('horaEntrega').value;
    var responsavel = document.getElementById('responsavel').value;
    var valorTotal  = document.getElementById('valorTotal').value;
    var responsavel = document.getElementById('responsavel').value;
    
    // ABRIR MODAL COM INFORMÇÕES
    var dataObj = new Date(dataEntrega);
    var dataFormatada = dataObj.getUTCDate() + '/' + dataObj.getMonth() + '/' + dataObj.getFullYear();

    document.getElementById('pedido-pacotes').innerHTML = nPacotes;
    document.getElementById('pedido-data').innerHTML = dataFormatada;
    document.getElementById('pedido-hora').innerHTML = horaEntrega;
    document.getElementById('pedido-padaria').innerHTML = responsavel;
    document.getElementById('pedido-valor').innerHTML = 'R$ ' + parseFloat(valorTotal).toFixed(2);
    document.getElementById('pedido-responsavel').innerHTML = responsavel;

    modal_pedidos.classList.add('show'); // Coloca a class "show" no modal, que faz ele ser exibido (CSS mesmo)

    // Fazer o evento do botão "Ok, é isso mesmo!"
    btn_enviar_pedido.onclick = function(e) {
        e.preventDefault(); // Só para evitar erros
        formulario.submit(); // Agora assim, envia o formulário 
    };
}