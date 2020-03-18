<?php
SESSION_START();
include "../conexao.php";

$senhaantiga=$_GET["txtsenhaold"];
$novasenha=$_GET["txtsenha"];
$confnovasenha=$_GET["txtconfsenha"];
$cod_cliente=$_SESSION['cod_cliente'];
$button=$_GET["botao"];

if($button == "Atualizar Senha"){

  $res = mysqli_query($conexao,"SELECT * FROM clientes WHERE cod_cliente=$cod_cliente");
  
   if(mysqli_fetch_array($res) >= 1){
       $arr = array();
       $row = mysqli_fetch_assoc($res);
       $arr[] = $row;
       
   }
   
	if($senhaantiga==$arr[7]){
    echo "<script>alert('Senha atual incorreta!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;   
   }
	if ($senhaantiga==""){
    echo "<script>alert('Preencha a senha atual!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;
   }  
   
   if ($novasenha==""){
    echo "<script>alert('Preencha a nova senha!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;
   }
   if ($confnovasenha==""){
    echo "<script>alert('Confirme a nova senha!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;
   }
   
	else{
	$comando="UPDATE clientes SET senha_cliente='$novasenha' WHERE cod_cliente=$cod_cliente";
	$incluir=mysqli_query($conexao,$comando);	
	   }
   }

   
     echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";


?>