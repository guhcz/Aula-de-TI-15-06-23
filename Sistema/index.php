<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class= "bg-white">
    <div class= "container text-center">
        <div class="mt-5 mb-3">
            <img src="Web\Recursos\th.jpg" alt="">
        </div>
        <div>
            <h2>Tela de login</h2>
            <form action="" method="post">
                <label class= "form-label" for="usuario">Usuário</label>
                <input class= "form-control mb-3" type="email" name="user" id="usuario">

                <label class= "form-label" for="pass">Senha</label>
                <input class= "form-control mb-4" type="password" name="senha" id="pass">

                <input class= "btn btn-primary btn-lg" type="submit" value="Logar">
                <a class= "btn btn-danger btn-lg" href="Web\cadastrar.php">Cadastrar</a>
            </form>

        </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>