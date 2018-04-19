<?php
// configurações do database
$db_host    = 'localhost';
$db_port    = '8888';
$db_user    = 'root';
$db_pwd     = 'root';
$db_table   = 'aulas_alan';

// efetuando a conexão
$conexao = mysql_connect("$db_host:$db_port",$db_user,$db_pwd);
mysql_select_db($db_table,$conexao);

session_start();
?>
