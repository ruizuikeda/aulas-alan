<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagina adicionar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="jquery/jquery3.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="col-xs-offset-4 col-xs-4">
                <h1 class="title text-center text-primary" >Adicionar novo usuario</h1>
                <form action="action/adicionar.php" method="post">
                    Username        <input class="form-control"     type="text"      id="username"     name="username"  >
                    Senha           <input class="form-control"     type="password"  id="senha"        name ="senha" >
                    Nome            <input class="form-control"     type="text"      id="nome"         name ="nome" >
                    Sobrenome       <input class="form-control"     type="text"      id="sobrenome"    name ="sobrenome" >
                    CPF             <input class="form-control"     type="number"    id="cpf"          name ="cpf" >
                    Telefone        <input class="form-control"     type="number"    id="tel"          name ="tel" >
                    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
                </form>
                <?php //if ($falso == 1){echo 'Login ou senha incorretos';} ?>
            </div>
        </div>

    </body>
</html>
