
<?php
    require_once "./topo.php";
    require_once "../../config/conexao.php";

    // Executa uma consulta SQL
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
?>

        <h1 style="text-align: center;">Cadastro de produtos</h1>
        <a style="margin: 10px;" class="btn btn-primary" href="novoProduto.php" role="button">Novo produto</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                <th>Peso</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while($row = $result->fetch_assoc())
                        {
                            echo"<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["nome"] ."</td>
                                    <td>". $row["preco"] ."</td>
                                    <td>". $row["quantidade"] ."</td>
                                    <td>". $row["peso"] ."</td>
                                    <td>
                                        <a href='./editarProduto.php?id=". $row['id'] . "'>✏️</a>
                                    </td>

                                    <td>
                                        <a href='./excluirProduto.php?id=". $row['id'] . "''>🗑️</a>
                                    </td>
                                </tr>";
                        }
                    ?>
            </tbody>
        </table>

<?php
// Fecha a conexão com o banco de dados
$conn->close();

require_once "./baixo.php"

?>