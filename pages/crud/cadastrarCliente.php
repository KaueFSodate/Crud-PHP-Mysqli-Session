<?php

    require_once "../../config/conexao.php";

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cidade_nasc = $_POST['cidadeNascimento'];
    $ativo = $_POST['ativo'];

    $sql = "INSERT INTO cliente(nome, data, cidade_nasc, ativo) VALUES ('{$nome}', '{$data}', '{$cidade_nasc}', '{$ativo}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();

    
?>

<script>
    window.location = "index.php"
</script>