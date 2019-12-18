function id (valor_campo){
    return document.getElementById(valor_campo);
}

function getValor(valor_campo){
    var valor = document.getElementById(valor_campo).value;
    return parseFloat(valor) * 15.9;
}

function multi(){
    var total = getValor('nPacotes');
    id('valorTotal').value = total;
}

multi();