<?php

require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';
$idUsuario = $_GET['idUsuario'];
$usuario = phpLibUsuarios_get_usuarios_pegar_usuario_por_id($idUsuario);
/*print_r($usuario);
exit; */
//echo $idUsuario;


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
                <h1 class="title text-center text-primary" >Adicionar</h1>
                <?php if(isset($usuario)){ ?>
                <form action="action/adicionar.php" method="post">
                    Username        <input class="form-control"     type="text"      id="username"     name ="username" required   value="<?php echo $usuario['login']; ?>">
                    Senha           <input class="form-control"     type="password"  id="senha"        name ="senha" required      value="<?php echo $usuario['senha']; ?>">
                    Nome            <input class="form-control"     type="text"      id="nome"         name ="nome" required       value="<?php echo $usuario['nome']; ?>">
                    Sobrenome       <input class="form-control"     type="text"      id="sobrenome"    name ="sobrenome" required  value="<?php echo $usuario['sobrenome']; ?>">
                    CPF             <input class="form-control"     type="number"    id="cpf"          name ="cpf" required        value="<?php echo $usuario['cpf']; ?>">
                    Telefone        <input class="form-control"     type="number"    id="tel"          name ="tel" required        value="<?php echo $usuario['tel']; ?>">
                    Idade           <input class="form-control"     type="number"    id="idade"        name ="idade" required      value="<?php echo $usuario['idade']; ?>">
                                    <input type="hidden"            type="text"      id="idUsuario"    name ="idUsuario"           value="<?php echo $usuario['idUsuario']; ?>">
                    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
                </form>
                <?php }?>
                <?php //if ($falso == 1){echo 'Login ou senha incorretos';} ?>
            </div>
        </div>

    </body>
</html>
