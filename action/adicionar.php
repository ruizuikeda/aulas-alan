<?php

require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';

$username  = $_POST['username'];
$senha     = $_POST['senha'];
$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf       = $_POST['cpf'];
$tel       = $_POST['tel'];

phpLibUsuarios_insert_usuarios_novo($username, $senha, $nome, $sobrenome, $cpf, $tel);
//print_r($novo_usuario);

$novo_usuario = phpLibUsuarios_get_usuarios_pegar_usuario_por_login_e_senha($login, $senha);


    if(!$novo_usuario){
        echo 'erro na gravacao';
        exit;
        //header('location:pag_adicionar.php?');
    }

else {
    print_r($novo_usuario);

}
?>
