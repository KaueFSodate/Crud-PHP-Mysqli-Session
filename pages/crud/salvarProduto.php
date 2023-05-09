<?php

    require_once "../../config/conexao.php";

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];

    $sql = "INSERT INTO produtos(nome, preco, quantidade, peso) VALUES ('{$nome}', '{$preco}', '{$quantidade}', '{$peso}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();

    
?>

<script>
    window.location = "index.php"
</script>