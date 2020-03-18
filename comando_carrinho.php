<?php	session_start();
include "conexao.php";
	
$button=$_GET['botao'];
$codprod=$_GET['codproduto'];
$cliente = $_SESSION['cod_cliente'];
if($button=='Excluir'){
	
	$comando = 	"DELETE FROM carrinho WHERE cod_produto=$codprod AND cod_cliente=$cliente";
	$incluir = mysqli_query($conexao, $comando);

	if(@mysql_num_rows($incluir)==0){
		
		echo "<script>alert('Produto excluido com Sucesso!')</script>";
		echo "<meta http-equiv='refresh' content='0; URL=carrinho.php' />";
	}
}
?>