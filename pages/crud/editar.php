<?php 
  require_once "../../config/conexao.php";
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $data = $_POST['data'];
  $cidade_nasc = $_POST['cidadeNascimento'];
  $ativo = $_POST['ativo'];

    $sql = "UPDATE cliente SET nome = '{$nome}', data = '{$data}', cidade_nasc = '{$cidade_nasc}', ativo = '{$ativo}' WHERE (`id` = '{$id}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();
?>

<script>
    window.location = "index.php"
</script>