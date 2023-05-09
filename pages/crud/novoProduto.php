<?php require_once "./topo.php"; ?>
<form method="post" action="./salvarProduto.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Digite um nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="number" name="preco" class="form-control" placeholder="Digite um preço">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" placeholder="Digite uma quantidade">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Peso</label>
    <input type="number" name="peso" class="form-control" placeholder="Digite um peso">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php require_once "./baixo.php"; ?>