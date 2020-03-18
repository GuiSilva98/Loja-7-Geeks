<?php SESSION_START();

$nome = @$_SESSION['txtadmin'];
if(isset($nome)){

}
else{
echo "<script>alert('Você deve fazer o login antes!')</script>";
echo "<meta http-equiv='refresh' content='0; URL= ../index.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../index.css" rel="stylesheet" type="text/css" />
<!-- Ref. Bootstrap -->
<link href="../../bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="../../bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="../../bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->
<title>Administrador</title>
</head>

<body>
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4 col-xs-offset-4" id="banner">
<a href="../home.php"><img src="../../imagens/logo2.png" class="img-responsive" /></a>
<a href="../logoff.php" style="Color: White">Sair</a>
<br>
</div>

<div class="col-md-4" id="banner" align="center" style="margin-top:35px">
<div class="navbar" align="center">

</div>
</div>

</header>
<!-- Conteúdo -->

<BR /> 
<br />
            <div class="container-fluid col-md-offset-1" >
            <div class="row" align="center" style="width:100%;">
            <div class="col-md-3">
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a style="color:black"><?php echo "Olá, ".$_SESSION['txtadmin']," !";?></a> </h3></div>
                    <div class="panel-body">
                         <ul class="list-group">
							<li class="list-group-item"><span><a href="../home.php">Inicio</a></span>
                            <li class="list-group-item"><span><a href="../user/user.php">Usuarios</a></span>
                            <li class="list-group-item"><span><a href="produtos.php">Produtos</a></span>
							<li class="list-group-item"><span><a href="../pedidos/pedidos.php">Pedidos</a></span>
                           
                        </ul>
                         
                    </div>
                </div>
                
            </div>	
	
<div class="col-md-9">

<div class="thumbnail" style="widht:100%" >
<h2>Excluir / Alterar Produtos</h2>
<br>
<form name="clientes" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<input type="radio" name="rdo" id="rdo" value="c" checked> Código
<input type="radio" name="rdo" id="rdo"  value="n" > Nome <br><br>
<input type="text" style="max-width:200px" name="txtbusca" id="txtbusca" placeholder="Procure o produto">
<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Buscar Produto'>

<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Todos os Produtos'>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered" style="width:100%;" >
<?php

include "../../conexao.php";

@$radio=$_GET['rdo'];
@$busca=$_GET['txtbusca'];
@$button=$_GET['btnbusca'];


if($button=="Todos os Produtos"){
	$comando= "SELECT * FROM produtos";
	$incluir=mysqli_query($conexao, $comando);
	echo "<thead class='thead-default'>";
		echo "<tr>";
		echo "<th>&nbsp;</th>";
		echo "<th style='color:red; font-size:15px;'>Código: </th>";
		echo "<th>Foto: </th>";
		echo "<th>Nome do Produto: </th>";
		echo "<th>Preço: </th>";
		echo "<th>Quantidade: </th>";
		echo "<th>Detalhes: </th>";
		echo "<th>Informações Adicionais: </th>";
		echo "<th>TAGS: </th>";
		echo "</tr>";
		echo "</thead>";

	while($registro=mysqli_fetch_array($incluir))
	{		
		echo "<form name='comandos' action='' method='GET'>";
		echo "<tbody>";
        echo "<tr>";
		echo "<th><input type=hidden id='codproduto' name='codproduto' value=".$registro[0]."></th>";
		echo "<th><br><input class='btn' style='color: white; border:3px solid pink;
		background-color:#f12e33;' type='submit' name='btnbusca' id='btnbusca' value='Excluir'><br><br>
		<input class='btn' style='color: white; border:3px solid green;
		background-color:#43CD80;' type='submit' name='btnbusca' id='btnbusca' value='Alterar'></th>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<td><img src=uploads/".$registro['foto_produto']." style='max-width: 75px'/></td>";
		echo "<th>".$registro[3];"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[7];"</th>";
		echo "<th>" .$registro[8];"</th>";
		
		echo "</tr>";
		}	
		
		echo "</table>";
		echo "</form>";
		echo "</form>";
		exit;
}

if($button=="Buscar Produto"){

	$comando= "SELECT * FROM produtos WHERE cod_produto='$busca'";
	$incluir=mysqli_query($conexao, $comando);
	
	if(empty($busca)){
		echo "<script>alert('Informe o código do Produto!')</script>";
		exit;
	}
	
	if($radio=="c"){
		
	if(mysqli_num_rows($incluir)==0) {
		echo "<script>alert('Produto Inexistente!')</script>";
		exit;
	}
	else{
	echo "<thead class='thead-default'>";
		echo "<tr>";
		echo "<th>&nbsp;</th>";
		echo "<th style='color:red; font-size:15px;'>Código: </th>";
		echo "<th>Foto: </th>";
		echo "<th>Nome do Produto: </th>";
		echo "<th>Preço: </th>";
		echo "<th>Quantidade: </th>";
		echo "<th>Detalhes: </th>";
		echo "<th>Informações Adicionais: </th>";
		echo "<th>TAGS: </th>";
		echo "</tr>";
		echo "</thead>";

	while($registro=mysqli_fetch_array($incluir))
	{		
		echo "<tbody>";
        echo "<tr>";
		echo "<th><br><input class='btn' style='color: white; border:3px solid pink;
		background-color:#f12e33;' type='submit' name='excluirItem' id='excluirItem' value='Excluir'><br><br>
		<input class='btn' style='color: white; border:3px solid green;
		background-color:#43CD80;' type='submit' name='alterarItem' id='alterarItem' value='Alterar'></th>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<td><img src=uploads/".$registro['foto_produto']." style='max-width: 75px'/></td>";
		echo "<th>".$registro[3];"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[7];"</th>";
		echo "<th>" .$registro[8];"</th>";
		
		echo "</tr>";
	}
		echo "</table>";
		echo "</form>";
		exit;
	}
	}
		
   	
		
		if($radio=="n"){
			
		$comando= "SELECT * FROM produtos WHERE nome_produto LIKE '%".$busca."%'";
		$incluir=mysqli_query($conexao, $comando);
		
		if(mysqli_num_rows($incluir)==0){
		echo "<script>alert('Produto Inexistente!')</script>";
		exit;
		}
		
		if (!$incluir) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}
		echo "<tr>";
		echo "<th>&nbsp;</th>";
		echo "<th style='color:red; font-size:15px;'>Código: </th>";
		echo "<th>Foto: </th>";
		echo "<th>Nome do Produto: </th>";
		echo "<th>Preço: </th>";
		echo "<th>Quantidade: </th>";
		echo "<th>Detalhes: </th>";
		echo "<th>Informações Adicionais: </th>";
		echo "<th>TAGS: </th>";
		echo "</tr>";
		echo "</thead>";
		
	while($registro=mysqli_fetch_array($incluir))
	{
				
		if (mysqli_num_rows($incluir) > 0){
			echo "<thead class='thead-default'>";
		
		
		echo "<tbody>";
        echo "<tr>";
		echo "<th><br><input class='btn' style='color: white; border:3px solid pink;
		background-color:#f12e33;' type='submit' name='excluirItem' id='excluirItem' value='Excluir'><br><br>
		<input class='btn' style='color: white; border:3px solid green;
		background-color:#43CD80;' type='submit' name='alterarItem' id='alterarItem' value='Alterar'></th>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<td><img src=uploads/".$registro['foto_produto']." style='max-width: 75px'/></td>";
		echo "<th>".$registro[3];"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[7];"</th>";
		echo "<th>" .$registro[8];"</th>";
		
		echo "</tr>";
		
		
		}
		}
		echo "</table>";
		echo "</form>";
		exit;
		}
		}
		
if($button=="Excluir"){
	$codproduto = $_GET['codproduto'];
	$comando= "SELECT * FROM produtos";
	$incluir=mysqli_query($conexao, $comando);
	$registro=mysqli_fetch_array($incluir);
	var_dump($codproduto);
	exit;
	echo "<script>confirm('Tem certeza que quer excluir o produto ".$registro[0]." ".$registro[3]."?')</script>";
	if('confirm'){
		
		$comando="DELETE FROM produtos WHERE cod_produto='$codproduto'";
		$incluir=mysqli_query($conexao, $comando);
		if (!$incluir) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}
		echo "<script>alert('Produto excluido com Sucesso!')</script>";
	}
	
}

if($button=="Alterar"){
	$codproduto = $_GET['codproduto'];
	echo "<script>alert('Produto Inexistente!')</script>";
	exit;
}
echo "</form>";
?>


	</table>
	</form>

</div>
</div>

</body>
</html>
