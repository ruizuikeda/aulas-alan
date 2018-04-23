<?php
function phpLibUsuarios_get_usuarios_pegar_usuario_por_login_e_senha($login, $senha) {
    // comando sql que quero executar
    $sql = "
        SELECT *
        FROM usuarios
        WHERE login = '$login' AND senha = '$senha' AND status = '1'
    ";
    // efetivamente executando no db
    $result = mysql_query($sql);

    // caso trivial de o cidadão que fez esse sql errou na escrita !!!!!!!
    if(!$result) return array();

    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();

    return $r[0];
}


function phpLibUsuarios_insert_usuarios_novo($login, $senha, $nome, $sobrenome, $cpf, $tel, $idade){
    $sql = "
        INSERT INTO usuarios
        (login, senha, nome, sobrenome, cpf, tel, idade)

        VALUES
        ('$login', '$senha', '$nome', '$sobrenome', '$cpf', '$tel',  '$idade')
    ";
    //return $sql; -----> mostra a linha que estou jogando no banco
    $result = mysql_query($sql);
    if(!$result) return false;

    return mysql_insert_id();
}


function phpLibUsuarios_update_usuarios_inativar($idUsuario){
    $sql = "
        UPDATE usuarios
        SET status = 0
        WHERE idUsuario = '$idUsuario';
    ";
    $result = mysql_query($sql);
    if(!$result) return false;
    return true;
}

function phpLibUsuarios_get_usuarios_pegar_idUsuario_todos($idUsuario_todos) {
    // comando sql que quero executar
    $sql = "
        SELECT *
        FROM usuarios
    ";

    /*$contador_usuario="
        SELECT COUNT*
        FROM usuarios
    ";*/

    // efetivamente executando no db
    $result = mysql_query($sql);


    // caso trivial de o cidadão que fez esse sql errou na escrita !!!!!!!
    if(!$result) return array();

    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();

    return $r;

}

function phpLibUsuarios_get_usuarios_pegar_usuario_por_id($id_numero) {
    // comando sql que quero executar
    $sql = "
        SELECT *
        FROM usuarios
        WHERE idUsuario = '$id_numero' AND status = '1'
    ";
    // efetivamente executando no db
    $result = mysql_query($sql);

    // caso trivial de o cidadão que fez esse sql errou na escrita !!!!!!!
    if(!$result) return array();

    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();

    return $r[0];

}

/*function phpLibUsuarios_get_conta_usuarios($id_Usuario){
    $sql = "
        SELECT COUNT
        FROM usuarios
        WHERE idUsuario = '$id_Usuario'
        "
        $result = mysql_query($sql);

    // caso trivial de o cidadão que fez esse sql errou na escrita !!!!!!!
    if(!$result) return array();

    else
        return $result;
} */


/*function phpLibUsuarios_update_dados_usuario($id_numero, $nome, $sobrenome, $cpf, $tel, $idade){
    $sql = "
      UPDATE usuarios
      SET nome ='$nome', sobrenome = '$sobrenome', cpf ='$cpf', tel ='$tel', idade='$idade'
      where iDUsuario = '$id_numero' AND status = '1'

    ";
    $result = mysql_query($sql);[]
    if(!$result) return false;
    return true;

}*/


?>
