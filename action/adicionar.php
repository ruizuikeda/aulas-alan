<?php

require_once '../include/db.php';
require_once '../include/phpLib_usuarios.php';

$idUsuario = $_POST['idUsuario'];
$login     = $_POST['username'];
$senha     = $_POST['senha'];
$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf       = $_POST['cpf'];
$tel       = $_POST['tel'];
$idade     = $_POST['idade'];
$falso = 0;


if(!$login ||  !$senha ||   !$nome ){
    $falso = 1;
    header('location:../lista_Usuarios.php?falso=' .$falso);
    exit;

}

if ($idUsuario){
    phpLibUsuarios_update_dados_usuario($idUsuario, $login, $senha, $nome, $sobrenome, $cpf, $tel, $idade);
    header('location:../lista_Usuarios.php');
    exit;

}

else {
    $id_numero = phpLibUsuarios_insert_usuarios_novo($login, $senha, $nome, $sobrenome, $cpf, $tel, $idade);
    $novo_usuario = phpLibUsuarios_get_usuarios_pegar_usuario_por_id($id_numero);}


if ($id_numero <= 0){
    return array();
    echo 'erro de gravacao ';
    exit;
}

else{
    header('location:../lista_Usuarios.php');
}
?>
