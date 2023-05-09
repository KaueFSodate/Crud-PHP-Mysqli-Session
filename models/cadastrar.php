<?php

    require_once "../config/conexao.php";

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(nome, usuario, email, senha) VALUES ('{$nome}', '{$usuario}', '{$email}', '{$senha}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();

    
?>

<script>
    window.location = "../pages/login.php"
</script>