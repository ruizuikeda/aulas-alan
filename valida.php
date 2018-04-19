<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$login .= $username . $password;
$falso = 1;
$_SESSION['logado_nome'] =  $username ;
$_SESSION['cpf_nome'];

//echo $login;

switch($login){

        case 'ikeda123' :
        // echo $username ;  echo '<br>';
        $_SESSION['cpf_nome'] =  'cpf : 123456789';
        //echo $cpf;
        header('location:home.php?');
        break;

        case 'alan456' :
        //echo $username ;  echo '<br>';
        $_SESSION['cpf_nome'] = 'cpf : 456789123';
        header('location:home.php?');
        break;

        case 'helder789' :
        //echo $username ;  echo '<br>';
        $_SESSION['cpf_nome'] = 'cpf : 789123456';
        header('location:home.php?');
        break;

        case 'renan000' :
        //echo $username ;  echo '<br>';
        $_SESSION['cpf_nome'] = 'cpf : 000000000';
        header('location:home.php?');
        break;


        default :

        header('location:index.php?falso='. $falso);
        break;

}

exit;
?>
