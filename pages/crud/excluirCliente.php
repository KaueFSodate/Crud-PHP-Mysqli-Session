<?php 
    require_once "../../config/conexao.php";
    $id = $_GET['id'];


    $sql = "DELETE FROM cliente WHERE (`id` = '{$id}')";
    $conn->query($sql);  //  Executar o SQL no banco
    $conn->close();
?>

<script>
    window.location = "index.php"
</script>