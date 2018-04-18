<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$falso = 1;



if ($username == 'ikeda' && $password == '123'){

    $falso =0;

    $_SESSION['logado_nome'] = 'ikeda';
    $_SESSION['logado_cpf'] = '366.582.098-71';

    header('location:home.php');

} else if ($username == 'alan' && $password == '321'){
    $falso =0;

    $_SESSION['logado_nome'] = 'alan';
    $_SESSION['logado_cpf'] = '123.123.123-32';

    header('location:home.php');
} else {

    $falso = 1;
    header('location:index.php?falso='. $falso);

}



exit;
?>
