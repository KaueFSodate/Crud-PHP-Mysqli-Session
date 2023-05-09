<?php 
  require_once "./topo.php"; 
  require_once "../../config/conexao.php";
  $id = $_GET['id'];

  $sql = "SELECT *FROM produtos where id =". $id;
  $result = $conn->query($sql);
  
  // Pegar o valor do select e guardar em $row
  $row = mysqli_fetch_assoc($result);

?>
<h1>Alterar produto</h1>
<form method="post" action="./editarProdutos.php">
  <div class="form-group">
  <?php echo '<input type="hidden" name="id" class="form-control" placeholder="Digite um nome" value="' . $id  .'">'?>
    <label for="exampleInputEmail1">Nome</label>
    <?php echo '<input type="text" name="nome" class="form-control" placeholder="Digite um nome" value="' . $row["nome"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <?php echo '<input type="number" name="preco" class="form-control" placeholder="Digite um preço" value="' . $row["preco"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantidade</label>
    <?php echo '<input type="number" name="quantidade" class="form-control" placeholder="Digite uma quantidade" value="' . $row["quantidade"]  .'">'?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Peso</label>
    <?php echo '<input type="number" name="peso" class="form-control" placeholder="Digite um peso" value="' . $row["peso"]  .'">'?>
  </div>
  
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

<?php 
  require_once "./baixo.php";
?>