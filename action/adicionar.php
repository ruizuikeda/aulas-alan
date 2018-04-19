<?php

require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';

$nome  = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf   = $_POST['cpf'];
$tel   = $_POST['tel'];

$novo_usuario = phpLibUsuarios_insert_usuarios_novo($nome, $login, $senha, $cpf, $tel);
//print_r($novo_usuario);

if($novo_usuario){
    print_r($novo_usuario);
    exit;
    //header('location:pag_adicionar.php?');
}

else {
    $falso = 1;
    header('location:lista_Usuarios.php?falso='. $falso);
}
?>
