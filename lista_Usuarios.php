<?php
require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';


?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="jquery/jquery3.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <title>Lista de usuarios</title>

    </head>

    <body>

        <div class="container">
            <div class=" col-xs-2" >
                <form action="adicionar.php" method="get">
                    <button type="submit" class="btn btn-danger btn-block">Adicionar</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="col-xs-offset-3 col-xs-6">
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                </thead>
                <tbody>



                </tbody>

            </table>
        </div>

    </body>
</html>