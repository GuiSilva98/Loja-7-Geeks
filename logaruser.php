<?php
SESSION_START(); // inicializa a sessão
$codclientetemp = $_SESSION['cod_cliente'];
@$codprod=$_SESSION['codproduto'];
include "conexao.php";
$email=$_POST["txtemail"];
$senha=$_POST["txtsenha"];
$button=$_POST["botao"];

if($button =="Entrar"){

$res=mysqli_query($conexao,"SELECT * FROM clientes WHERE email_cliente='$email' and senha_cliente='$senha'");

if(mysqli_num_rows($res)>0)
{
	
	$registro=mysqli_fetch_array($res); // le o registro filtrado
	$_SESSION['txtnome']=$registro[1];   //gauarda a informação
	
	
	$_SESSION['logado']=1;
	
$_SESSION['codpedf']=0;
 $_SESSION['cod_cliente']=$registro[0]; // codigo do cliente
 
  	echo "<script> alert('Logado com sucesso!')</script>";
	echo "<meta http-equiv='refresh' content='0; URL= index.php'>";
	}

else

{

	echo "<script> alert('Login ou senha incorretos!')</script>";
	echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
}
	if($codprod	>	1){
			$codcliente = $_SESSION['cod_cliente'];
			$comando2 = "UPDATE carrinho SET cod_cliente = $codcliente WHERE cod_cliente=$codclientetemp";
			$incluir2 = mysqli_query($conexao, $comando2);			
		}
}

?>