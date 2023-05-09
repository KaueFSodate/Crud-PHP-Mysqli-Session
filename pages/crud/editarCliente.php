<?php 
  require_once "./topo.php"; 
  require_once "../../config/conexao.php";
  $id = $_GET['id'];

  $sql = "SELECT *FROM cliente where id =". $id;
  $result = $conn->query($sql);
  
  // Pegar o valor do select e guardar em $row
  $row = mysqli_fetch_assoc($result);

?>
<h1>Alterar cliente</h1>
<form method="post" action="./editar.php">
  <div class="form-group">
  <?php echo '<input type="hidden" name="id" class="form-control" placeholder="Digite um nome" value="' . $id  .'">'?>
    <label for="exampleInputEmail1">Nome</label>
    <?php echo '<input type="text" name="nome" class="form-control" placeholder="Digite um nome" value="' . $row["nome"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de nascimento</label>
    <?php echo '<input type="date" name="data" class="form-control" placeholder="Digite sua data de nascimento" value="' . $row["data"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cidade de nascimento</label>
    <?php echo '<input type="number" name="cidadeNascimento" class="form-control" placeholder="Digite sua cidade de nascimento" value="' . $row["cidade_nasc"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ativo</label>
    <?php echo '<input type="number" name="ativo" class="form-control" placeholder="Digite se o cliente é ativo" value="' . $row["ativo"]  .'">'?>
  </div>
  
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

<?php 
  require_once "./baixo.php";
?>