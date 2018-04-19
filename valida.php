<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$login .= $username . $password;
$falso = 1;
$_SESSION['logado_nome'] =  $username ;


switch($login){

    case 'ikeda' :
        if($password == '123') {
            $_SESSION['cpf'] =  '123456789';
        } else {
            header('location:index.php?falso='. $falso);
        }
        break;

    case 'alan456' :
        $_SESSION['cpf'] = '456789123';
        break;

    case 'helder789' :
        $_SESSION['cpf'] = '789123456';
        break;

    case 'renan000' :
        $_SESSION['cpf'] = '000000000';
        break;
    default :
        header('location:index.php?falso='. $falso);
        break;
}

header('location:home.php');
exit;
?>
