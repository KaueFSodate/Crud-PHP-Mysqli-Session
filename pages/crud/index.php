
<?php

    require_once "./topo.php";
    require_once "../../config/conexao.php";




    // Executa uma consulta SQL
    $sql = "SELECT * FROM cliente";
    $result = $conn->query($sql);
?>

        <h1 style="text-align: center;">Cadastro de cliente</h1>
        <a style="margin: 10px;" class="btn btn-primary" href="novoCliente.php" role="button">Cadastrar</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data nascimento</th>
                    <th>Cidade nascimento</th>
                    <th>Ativo</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while($row = $result->fetch_assoc())
                        {
                            echo"<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["nome"] ."</td>
                                    <td>". $row["data"] ."</td>
                                    <td>". $row["cidade_nasc"] ."</td>
                                    <td>". $row["ativo"] ."</td>
                                    <td>
                                        <a href='./editarCliente.php?id=". $row['id'] . "'>✏️</a>
                                    </td>

                                    <td>
                                        <a href='./excluirCliente.php?id=". $row['id'] . "''>🗑️</a>
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