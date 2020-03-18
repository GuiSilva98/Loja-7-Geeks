<?php
SESSION_START(); // inicializa a sessão

include "../conexao.php";
$email=$_POST["txtemail"];
$senha=$_POST["txtsenha"];
$button=$_POST["botao"];

if($button =="Entrar")

$res=mysqli_query($conexao,"SELECT * FROM admin WHERE email_admin='$email' and senha_admin='$senha'");

if(mysqli_num_rows($res)>0)
{
	
	$registro=mysqli_fetch_array($res); // le o registro filtrado
	$_SESSION['txtadmin']=$registro[1];   //gauarda a informação
	
	
	$_SESSION['logado']=1;
	
$_SESSION['codpedf']=0;
 $_SESSION['cod_admin']=$registro[0]; // codigo do cliente
 
  

 $fechar=mysqli_close($conexao);
	echo "<script> alert('Bem Vindo Administrador!')</script>";
	echo "<meta http-equiv='refresh' content='0; URL= home.php'>";
	}

else

{
	$fechar=mysqli_close($conexao);
	echo "<script> alert('Login ou senha incorretos!')</script>";
	echo "<script>window.history.go(-1)</script>";
}


?>