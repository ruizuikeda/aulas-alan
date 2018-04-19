<?php
// incluir o db
require_once 'include/db.php';
require_once 'include/phpLib_usuarios.php';

// parametros de entrada
$username = $_POST['username'];
$password = $_POST['password'];


// procurar alguem com esses dados no db
$usuario    = phpLibUsuarios_get_usuarios_pegar_usuario_por_login_e_senha($username, $password);

if($usuario) {
    // encontrei alguém
    echo '<pre>'; print_r($usuario); exit;

    // colocar na session as informações do usuário logado

    // redirecionar para home

} else {
    // não existe usuario com esses dados no db
    // não deixar entrar

}

//$inativei = phpLibUsuarios_update_usuarios_inativar(1);
//if(!$inativei) {
//    header('Location: index.php?msg=Falha ao tentar inativar');
//    exit;
//}

?>
