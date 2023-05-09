<?php

    require_once "../config/conexao.php";
    session_start();
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    

    $sql = "SELECT usuario, nome, senha FROM usuarios where usuario = '{$usuario}' AND senha = '{$senha}'";
    $result = $conn->query($sql);
  
    // Pegar o valor do select e guardar em $row
    $row = mysqli_fetch_assoc($result);

    if($row !=null){
        // criar uma array
        $cliente = array(
            'dominio' => 'KaueFSodate.com.br',
            'usuario' => $usuario,
            'nome' => $row['nome']
        );
        $_SESSION["cliente"] = $cliente;
        header("location: ../pages/crud/index.php");
    }else{
        echo "Acesso negado";
    }


    
?>
