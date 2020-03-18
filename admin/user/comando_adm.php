<?php	session_start();
include "../../conexao.php";

$button=$_GET['botao'];
$codadm = $_SESSION['txtadmin'];
if($button=='Excluir'){
	
	$comando = 	"DELETE FROM admin WHERE cod_admin=$codadm";
	$incluir = mysqli_query($conexao, $comando);
	if (!$incluir) {
		var_dump($comando);
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}
	if(@mysql_num_rows($incluir)==0){
		
		echo "<script>alert('Administrador excluido com Sucesso!')</script>";
		echo "<meta http-equiv='refresh' content='0; URL=excluiradm.php' />";
	}
}
?>