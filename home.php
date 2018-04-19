<?php
session_start();

$nome      = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome'];
$cpf       = $_SESSION['cpf'];
$tel       = $_SESSION['tel'];


//print_r ($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1> Olá, <?php echo $nome . ' ';  echo $sobrenome;  echo '<br>';
            echo 'cpf: ' .   $cpf;   echo '<br>';
            echo 'tel: ' .   $tel;
            ?></h1>
    </body>
</html>
