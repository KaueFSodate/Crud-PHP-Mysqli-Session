<?php require_once "./topo.php"; ?>

<h1>Cadastrar cliente</h1>
<form method="post" action="./cadastrarCliente.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Digite um nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de nascimento</label>
    <input type="date" name="data" class="form-control" placeholder="Digite sua data de nascimento">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cidade de nascimento</label>
    <input type="number" name="cidadeNascimento" class="form-control" placeholder="Digite sua cidade de nascimento">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ativo</label>
    <input type="number" name="ativo" class="form-control" placeholder="Digite se o cliente é ativo">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>



<?php require_once "./baixo.php"; ?>