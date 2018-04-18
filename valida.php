<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$login .= $username . $password;
$falso = 1;
$_SESSION['logado_nome'] =  $username ;

//echo $login;

switch($login){

        case 'ikeda123' :
        echo $username ;  echo '<br>';
        echo 'cpf : 123456789';

        case 'alan456' :
        echo $username ;  echo '<br>';
        echo 'cpf : 456789123';

        case 'helder789' :
        echo $username ;  echo '<br>';
        echo 'cpf : 789123456';

        case 'renan000' :
        echo $username ;  echo '<br>';
        echo 'cpf : 000000000';

        header('location:home.php?');
        break;


        default :

        header('location:index.php?falso='. $falso);
        break;

}

exit;
?>
