<?php 
  require_once "../../config/conexao.php";
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];
  $peso = $_POST['peso'];

    $sql = "UPDATE produtos SET nome = '{$nome}', preco = '{$preco}', quantidade = '{$quantidade}', peso = '{$peso}' WHERE (`id` = '{$id}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();
?>

<script>
    window.location = "index.php"
</script>