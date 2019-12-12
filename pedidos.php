<?php
include_once 'includes/header.php';
// Conexão ao banco de dados
include_once 'php_action/db_connect.php';
// Seleciona a tabela e a atribui para uma variavel
?>

<div id="tabelaPedidos">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID do pedido</th>
        <th>Data de entrega</th>
        <th>Quantidade(pct)</th>
        <th>Responsável</th>
        <th>Valor (R$)</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $sql = "SELECT * FROM orders";
      //Executa a consulta (select) do sql e atribui o resultado na variavel
      $resultado = mysqli_query($connect, $sql);
      //Transforma o resultado do sql em um array e atribui a variavel e enquanto isso for verdade, continuará a ler os dados
      while ($dados = mysqli_fetch_array($resultado)) {
        $idPedido = $dados['idPedido'];
        $responsavel = $dados['responsavel'];
        $nPacotes = $dados['nPacotes'];
        $valorTotal = $dados['valorTotal'];
        $dataEntrega = $dados['dataEntrega'];



        echo "<tr>
        <td>$idPedido</td>
        <td>$dataEntrega</td>
        <td>$nPacotes</td>
        <td>$responsavel</td>
        <td>$valorTotal</td>
        <td>Pendente...</td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<a id="back" class="btn btn-primary" href="index.php">Voltar a página inicial</a>
<?php
//Footer
include_once 'includes/footer.php'

?>