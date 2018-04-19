<?php
session_start();
$nome = $_SESSION['logado_nome'];
$cpf  = $_SESSION['cpf_nome'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Olá, <?php echo $nome; echo '<br>'; echo $cpf; ?></h1>
    </body>
</html>
