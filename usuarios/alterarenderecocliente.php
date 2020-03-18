<?php
SESSION_START();
include "../conexao.php";


$button=$_POST["botao"];
$cep=$_POST["cep"];
$endereco=$_POST["endereco"];
$numero=$_POST["numcasa"];
$complemento=$_POST["complemento"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$pontoref=$_POST["txtref"];


if($button == "Alterar Endereco"){

$cod_cliente=$_SESSION['cod_cliente'];
  $verificausuario = mysqli_query($conexao, "SELECT `cep_cliente`, `endereco_cliente`, `numcasa_cliente`, `complemento_cliente`, `bairro_cliente`, `cidade_cliente`, `estado_cliente`, `pontoref_cliente` FROM clientes WHERE cod_cliente='$cod_cliente'");
  
   if(mysqli_num_rows($verificausuario) >= 1){
	   
	if ($cep!==""){
     $comando="UPDATE `clientes` SET 
	 `cep_cliente`='$cep', 
	 `endereco_cliente`='$endereco',
	 `bairro_cliente`='$cidade',
	 `cidade_cliente`='$bairro',
	 `estado_cliente`='$estado' WHERE cod_cliente='$cod_cliente'";
	 $incluir=mysqli_query($conexao,$comando);
   }
    elseif ($numero!==""){
		$comando="UPDATE clientes SET numcasa_cliente='$numero' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	}
	  
	elseif ($pontoref!==""){
		$comando="UPDATE clientes SET pontoref_cliente='$pontoref' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);

	}
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
}
?>