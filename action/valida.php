<?php
// incluir o db
require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';

// parametros de entrada
$username = $_POST['username'];
$password = $_POST['password'];
//$falso    = 0;


// procurar alguem com esses dados no db
$usuario    = phpLibUsuarios_get_usuarios_pegar_usuario_por_login_e_senha($username, $password);


if($usuario) {
    // encontrei alguém
    echo '<pre>'; print_r($usuario); exit;

    //$_SESSION['nome']      =    $usuario['nome'];
    //$_SESSION['sobrenome'] =    $usuario['sobrenome'];
    //$_SESSION['cpf']       =    $usuario['cpf'];
    //$_SESSION['tel']       =    $usuario['tel'];


    //header('location:aulas_alan/lista_Usuarios.php?');

    // colocar na session as informações do usuário logado
    // redirecionar para home


} else {

    echo 'vazio'; exit;
    // não existe usuario com esses dados no db
    // não deixar entrar
    // $falso = 1;
    // header('location:aulas?alan/index.php?falso='. $falso);
}

//$inativei = phpLibUsuarios_update_usuarios_inativar(1);
//if(!$inativei) {
//    header('Location: index.php?msg=Falha ao tentar inativar');
//    exit;
//}

?>
