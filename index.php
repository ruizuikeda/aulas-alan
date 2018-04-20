<?php
$falso = $_GET['falso'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aulas Git</title>
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
                <h1 class="title text-center text-primary" >Bem vindo</h1>
                <form action="action/valida.php" method="post">
                    Login              <input class="form-control" type="text"     id="username" name ="username" required >
                    Password           <input class="form-control" type="password" id="password" name ="password" required>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </form>
                <?php if ($falso == 1){echo 'Login ou senha incorretos';} ?>
            </div>
        </div>

    </body>
</html>
