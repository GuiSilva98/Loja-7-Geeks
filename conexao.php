<?php
$maquina="localhost";
$usuario="root";
$senha="";
$bcodados="id2984683_sete_geeks";

$conexao=mysqli_connect($maquina,$usuario,$senha);
if(!$conexao)
{
echo 'erro na conexão';
exit;
}
$bcodados=mysqli_select_db($conexao,$bcodados);
if(!$bcodados)
{
echo' Banco de Dados não localizado';
exit;
}
?>