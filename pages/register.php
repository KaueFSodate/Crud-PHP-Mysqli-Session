<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Registro</title>
</head>



<body>
    
    
    <div class="ContainerForm">
    <h1>Cadastrar cliente</h1>
    <form method="post" action="../models/cadastrar.php">
      
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite um nome">
      
      
        <label for="exampleInputPassword1">usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuario">
      
      
        <label for="exampleInputPassword1">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
      
      
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
      
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
</body>

</html>