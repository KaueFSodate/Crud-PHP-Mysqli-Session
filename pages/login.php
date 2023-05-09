<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Login</title>
</head>



<body>


    <div class="ContainerForm">
    <h1>Login cliente</h1>
    <form method="post" action="../models/logar.php">
    <input type="hidden" name="id" class="form-control">
      
        <label for="exampleInputPassword1">usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuario">
      
      
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
      
      
      <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>

</body>

</html>