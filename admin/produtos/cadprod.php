<?php
include "../../conexao.php";


$button=$_POST['botao'];
$nome=$_POST['txtprod'];
$diretorio="admin/produtos/uploads/";
$arquivo= $_FILES['arquivo']['name'];
$quantidade=$_POST['txtquant'];
$detalhes=$_POST['txtdetalhes'];
$preco=$_POST['txtpreco'];
$infoadd=$_POST['txtinfoadd'];
$tags=$_POST['txttag'];

if($button=="Inserir Produto"){
	
	
if($nome==""){
	echo "<script> alert('Preencha o nome!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;	
}
if($quantidade==""){
	echo "<script> alert('Preencha a quantidade!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;	
}
if($detalhes==""){
	echo "<script> alert('Preencha os detalhes!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;	
}
if($preco==""){
	echo "<script> alert('Preencha o preço!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;	
}
if($infoadd==""){
	echo "<script> alert('Preencha as informações adicionais!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;
}
if($tags==""){
	echo "<script> alert('Preencha as TAGS!');</script>";
	echo "<script>history.go(-1)</script>";
	exit;
}
	else {
		
		$_UP['pasta']='uploads/';
		$_UP['tamanho']=1024*1024*100;
		$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
		$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit;
			}
			
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "<script>alert('A extesão da imagem é inválida.');</script>
				'<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=inserirproduto.php'>";
				exit;
			}
			
			elseif ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=inserirproduto.php'>
					<script>alert('Arquivo muito grande.');</script>";
					exit;
			}
		
			else{
				//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					//Upload efetuado com sucesso, exibe a mensagem
					$query = mysqli_query($conexao, "INSERT INTO produtos(
					
					diretorio,
					foto_produto,
					nome_produto,
					quantidade_produto,
					preco_produto,
					detalhes_produto,
					info_adicionais,
					tag_produto) 
					
					VALUES (
					'$diretorio',
					'$nome_final',
					'$nome',
					'$quantidade',
					'$preco',
					'$detalhes',
					'$infoadd',
					'$tags')");

					echo "<script>alert('Cadastrado com Sucesso!');</script>
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=inserirproduto.php'>";
	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=inserirproduto.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
	
	}
}

?>