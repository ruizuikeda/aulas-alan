<?php
require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';

$idUsuario_todos = phpLibUsuarios_get_usuarios_pegar_idUsuario_todos($idUsuario_todos);  // pega todos os usuarios

$qtdusuarios = count($idUsuario_todos);                                                  // conta a quantidade de usuarios

$falso = $_GET['falso'];

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
                <form action="pag_adicionar.php" method="get">
                    <button type="submit" class="btn btn-danger btn-block">Adicionar</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="col-xs-offset-3 col-xs-6">
            <table class="table">
                <thead>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Idade</th>
                    <th></th>
                </thead>
                <tbody>
                    <!-- dentro de um laço que está percorrendo meu array de usuarios -->
                    <?php for ($i =0; $i < $qtdusuarios; $i++){ ?>
                    <tr>
                        <td><?php echo $idUsuario_todos[$i]['login'];  ?></td> <!-- ser preenchido dinamicamente com os dados do usuario atual dentro do laço ($usuario[$i]['login'];) -->
                        <td><?php echo $idUsuario_todos[$i]['senha'];  ?></td>
                        <td><?php echo $idUsuario_todos[$i]['nome'];  ?></td>
                        <td><?php echo $idUsuario_todos[$i]['sobrenome'];  ?></td>
                        <td><?php echo $idUsuario_todos[$i]['cpf'];  ?></td>
                        <td><?php echo $idUsuario_todos[$i]['tel'];  ?></td>
                        <td><?php echo $idUsuario_todos[$i]['idade'];  ?></td>
                        <td>
                            <a href="pag_adicionar.php?idUsuario=<?php echo $idUsuario_todos[$i]['idUsuario'];  ?>" type="button" role="button" class="btn btn-block btn-warning">editar</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- fim do laço -->
                </tbody>
            </table>
        </div>

        <div class="container">
            <div class="col-xs-offset-4 col-xs-4">
                <h3><?php if($falso == 1){echo "Faltou preencher login, senha ou nome";
                                         }?></h3>
            </div>
        </div>
    </body>
</html>
