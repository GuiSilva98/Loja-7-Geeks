<?php @SESSION_START();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="index.css" rel="stylesheet" />
<!-- Ref. Bootstrap -->
<link href="bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->
<title>Carrinho</title>
</head>

<body> <!-- a5c5ff -->
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4" id="banner">
<a href="index.php"><img src="imagens/logo2.png" class="img-responsive" /></a>
<br>
</div>

<div class="col-md-4" id="banner" align="center" style="margin-top:35px">
<div class="navbar" align="center">
<form name="busca" method=get action="busca.php">
  <div class="input-group">
    <input type="text" style="background-color: aliceblue;" name="txtpalavra" id="txtpalavra" class="form-control" placeholder="Procurar...">
    <div class="input-group-btn">
     <button type="submit" name="botao" id="botao" value="Buscar" class="btn btn-primary">
      <span class="glyphicon glyphicon-search"></span> Buscar
    </button>
    </div>
  </div>
</form>
    
</div>

</div>


<div class="col-md-4" id="banner" align="center" style="margin-top:35px"> <!-- style="vertical-align:middle;"-->
<div class="btn-group" role="group">
<table>
<a style="color:white"><?php 

$nome = @$_SESSION['txtnome'];
if(isset($nome)){
echo  "<a style='visibility: hidden'>".$_SESSION['cod_cliente'];"</a>";
echo "<a style=' color: white'>Você está logado como: $nome</a>";
}

else {
echo "<span style='Color: white';'>Bem Vindo, Visitante! Faça seu <a href='cadastro1.html'>cadastro!</a></span>";
echo "<br><span style='Color: white';'>ou faça seu login abaixo!</span>";
}
?>
<tr><td><a href="carrinho.php"><img src="imagens/icone-carrinhos.png" class="img-responsive" style="max-width:50px;" /></a></td>

<?php
if(isset($nome)){
echo  "<td><img src='imagens/icone-perfil.png' class='img-responsive' data-toggle='dropdown' style='max-width:50px;' /><span class='caret'></span>";
echo "<br>";
}
else {
echo "<td><img src='imagens/icone-cadastro.png' class='img-responsive' data-toggle='dropdown' style='max-width:50px;' /><span class='caret'></span>";
echo "<br>";
}
?>
    <ul class="dropdown-menu" role="group" >
	
	<?php 

	if(isset($nome)){
echo  "<li>";
echo "<a href='usuarios/pagina_cliente.php'>Minha conta</a>";
echo "</li>";
echo "<li>";
echo "<a href='logout.php'>Sair</a>";
echo "</li>";
echo "</ul>";
echo "</td> </tr>";
echo "</table>";
}

else {
echo  "<li>";
echo "<a href='login.php'>Login</a>";
echo "</li>";
echo "</ul>";
echo "</td> </tr>";
echo "</table>";
}

?>
    </div>
    </div>

</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="container-fluid" style="background:#069;">
<div class="row" align="center">
<div class="btn-group btn-group-justified " data-activates="menu-mobile" class="button-collapse" id="aba" >
    <div class="btn-group" >
      <button type="button" id="aba" class="btn btn-primary text-uppercase">Masculino</button>
    </div>
    <div class="btn-group">
      <button type="button" id="aba" class="btn btn-primary text-uppercase">Feminino</button>
    </div>
    
    <div  class="btn-group" role="group" >
    <button type="button" id="aba" class="btn btn-primary dropdown-toggle text-uppercase list-inline" data-toggle="dropdown">Acessórios <span class="caret"></button></span>
    <ul id="menudropdown" class="dropdown-menu dropdown-menu-right right hide-on-med-and-down" role="group" align="center">
    <li role="separator" class="divider"></li>
    <li>
    <a href="#" class="text-uppercase">Chaveiro</a>
    </li>
    <li role="separator" class="divider"></li>
    <li>
    <a href="#" class="text-uppercase">Poster</a>
    </li>
    <li role="separator" class="divider"></li>
    <li>
    <a href="#" class="text-uppercase">Almofada</a>
    </li>
    <li role="separator" class="divider"></li>
    <li>
    <a href="#" class="text-uppercase">Caneca</a>
    </li>
    <li role="separator" class="divider"></li>
    </ul>
    </div>
  </div>
</div>
</div>
</div>
</header>
<!-- -->

<h1 id="preto">Carrinho de Compras</h1>
<p align="center"><?php 
 
if(isset($nome)){
echo  "<a style='visibility: hidden'>".$_SESSION['cod_cliente'];"</a>";
echo "<a>Você está logado como: $nome</a>";
}

else {
echo "<span><a href='cadastro1.html'>Cadastre - se</a> Visitante! ou Faça seu <a href='cadastro1.html'>Login </a></span>";
echo "para fazer as compras xD";}?></p>


<div class="container-fluid" style="border: 1px solid #CCC">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
<table class='table table-striped' >

<?php
include "conexao.php";


@$codcliente=$_SESSION['cod_cliente'];
@$codprod=$_SESSION['codproduto'];
@$button=$_POST['botao'];
@$quant=$_POST['txtquantp'];
@$cliente = $_SESSION['cod_cliente'];

$comando = "SELECT nome_produto, preco_produto FROM produtos where cod_produto='$codprod'";
$incluir = mysqli_query($conexao, $comando);
$registro = mysqli_fetch_array($incluir);

$nome = $registro[0];
$preco = $registro[1];
	//verifica se foi enviado algum valor, se não tiver exibe o carrinho do usuário
if(empty($button)){

$comando2 = "SELECT produtos.cod_produto, produtos.diretorio, produtos.foto_produto, carrinho.cod_produto, carrinho.cod_cliente,
carrinho.nome_produto, carrinho.quantidade_produto, carrinho.preco_produto FROM produtos, carrinho WHERE produtos.cod_produto=carrinho.cod_produto AND carrinho.cod_cliente = $cliente";
$incluir2 = mysqli_query($conexao, $comando2);

if (!$incluir2) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}		
if($incluir2->num_rows==0){
	echo "<h3 align='center'>Seu Carrinho de compras está vazio :(</h3>";
	echo "<br>";
	echo "<div class='col-md-4'>";

	echo "</div>";
	echo "<div class='col-md-4'></div>";
}
else{
echo "<thead>";
		echo "<tr>";
        echo "<th style='max-height:75px;'>Código</th>";
		echo "<th>Foto</th>";
        echo "<th>Nome do Produto</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
		echo "<th>Total</th>";
		echo "<th>&nbsp;</th>";
		echo "</tr>";
		echo "</thead>";
while ($registro2 = mysqli_fetch_array($incluir2))
		{
		echo "<tbody>";
        echo "<tr>";
        echo "<th>".$registro2[0]."</th>";
        echo "<th><img src=".$registro2[1].$registro2[2]." style='max-width: 75px;'></th>";
        echo "<th>".$registro2[5]."</th>";
        echo "<th>R$ ".$registro2[7]."</th>";
        echo "<th>".$registro2[6]."</th>";
		$m = $registro2[7] * $registro2[6];
		echo "<th>R$".$m."</th>";
		echo "<th><br><a onclick='return confirm(\"Deseja realmente excluir este item?\")' class='btn' style='color: white; border:3px solid pink; background-color:#f12e33;' href='comando_carrinho.php?botao=Excluir&codproduto=".$registro2[0]."'>Excluir</a></th>";
        echo "</tr>";
		}
		echo "</table>";
		$somar = "SELECT SUM(quantidade_produto * preco_produto) AS soma FROM carrinho WHERE cod_cliente= $cliente";
		$tm = mysqli_query($conexao, $somar);
		$sm = mysqli_fetch_array($tm);
		
		echo "<h2 align='right'><span class='label label-success'>Total: R$  ".$sm[0]."</span></h2>";
		echo "<br>";
		}
		
} 
// Verifica se foi enviado algm valor, caso sim o mesmo insere o valor no carrinho e logo depois exibe
 if($button=="Adicionar ao Carrinho"){

$comando3 = "INSERT INTO carrinho(cod_produto, cod_cliente, nome_produto, quantidade_produto, preco_produto) VALUES('$codprod', '$cliente', '$nome', $quant, $preco)";

$comando = "SELECT cod_produto, cod_cliente FROM carrinho WHERE cod_cliente= $cliente AND cod_produto=$codprod";
$incluir = mysqli_query($conexao, $comando);
$codprod='';
$comando2 = "SELECT produtos.cod_produto, produtos.diretorio, produtos.foto_produto, carrinho.cod_produto, carrinho.cod_cliente,
carrinho.nome_produto, carrinho.quantidade_produto, carrinho.preco_produto FROM produtos, carrinho WHERE produtos.cod_produto=carrinho.cod_produto
 AND carrinho.cod_cliente = $cliente";
$incluir2 = mysqli_query($conexao, $comando2);

//Se o produto já estiver no carrinho, exibe o alert, cancela o comando de inserir e exibe o carrinho
if (mysqli_fetch_array($incluir) > 1){
	
	echo "<script>alert('Já existe esse produto no carrinho!');</script>";
	echo "<thead>";
		echo "<tr>";
        echo "<th style='max-height:75px;'>Código</th>";
		echo "<th>Foto</th>";
        echo "<th>Nome do Produto</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
		echo "<th>Total</th>";
		echo "<th>&nbsp;</th>";
		echo "</tr>";
		echo "</thead>";
while ($registro2 = mysqli_fetch_array($incluir2))
		{
		echo "<tbody>";
        echo "<tr>";
        echo "<th>".$registro2[0]."</th>";
        echo "<th><img src=".$registro2[1].$registro2[2]." style='max-width: 75px;'></th>";
        echo "<th>".$registro2[5]."</th>";
        echo "<th>R$ ".$registro2[7]."</th>";
        echo "<th>".$registro2[6]."</th>";
		$m = $registro2[7] * $registro2[6];
		echo "<th>R$".$m."</th>";
		echo "<th><br><a onclick='return confirm(\"Deseja realmente excluir este item?\")' class='btn' style='color: white; border:3px solid pink; background-color:#f12e33;' href='comando_carrinho.php?botao=Excluir&codproduto=".$registro2[0]."'>Excluir</a></th>";
		echo "</tr>";
		}
		echo "</table>";
		$somar = "SELECT SUM(quantidade_produto * preco_produto) AS soma FROM carrinho WHERE cod_cliente=$cliente";
		$tm = mysqli_query($conexao, $somar);
		$sm = mysqli_fetch_array($tm);
		
		echo "<h2 align='right'><span class='label label-success'>Total: R$  ".$sm[0]."</span></h2>";
		echo "<br>";
		
		} 

else{
	// insere o produto e exibe o carrinho do usuário
$incluir3 = mysqli_query($conexao, $comando3);
if (!$incluir3) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}
$incluir2 = mysqli_query($conexao, $comando2);
echo "<thead>";
		echo "<tr>";
        echo "<th style='max-height:75px;'>Código</th>";
		echo "<th>Foto</th>";
        echo "<th>Nome do Produto</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
		echo "<th>Total</th>";
		echo "<th>&nbsp;</th>";
		echo "</tr>";
		echo "</thead>";
while ($registro2 = mysqli_fetch_array($incluir2))
		{
		
		echo "<tbody>";
        echo "<tr>";
        echo "<th>".$registro2[0]."</th>";
        echo "<th><img src=".$registro2[1].$registro2[2]." style='max-width: 75px;'></th>";
        echo "<th>".$registro2[5]."</th>";
        echo "<th>R$ ".$registro2[7]."</th>";
        echo "<th>".$registro2[6]."</th>";
		$m = $registro2[7] * $registro2[6];
		echo "<th>R$".$m."</th>";
		echo "<th><br><a onclick='return confirm(\"Deseja realmente excluir este item?\")' style='color: white; border:3px solid pink; background-color:#f12e33;' class='btn' href='comando_carrinho.php?botao=Excluir&codproduto=".$registro2[0]."'>Excluir</a></th>";
		echo "</tr>";
		}
		echo "</table>";
		$somar = "SELECT SUM(quantidade_produto * preco_produto) AS soma FROM carrinho WHERE cod_cliente=$cliente";
		$tm = mysqli_query($conexao, $somar);
		$sm = mysqli_fetch_array($tm);
		
		echo "<h2 align='right'><span class='label label-success'>Total: R$  ".$sm[0]."</span></h2>";
		echo "<br>";
		
		} 
 }
?>
<table align="center">
<?php
@$nome = $_SESSION['txtnome'];

if(empty($nome)){
echo "<tr><td><a href='index.php'><input type='buttom' class='btn btn-primary' name='voltarHome' id='voltarHome' value='Voltar à Pagina Inicial' /></td></a>";
echo "<td>&nbsp;</td>";
echo "<td><a href='cadastro1.html'><input class='btn btn-primary' type='button' name='botao' value='Faça seu cadastro antes de Prosseguir!'></td></tr></a>";
echo "<tr><td><br></td></tr>";
}
else {
	$comando2 = "SELECT produtos.cod_produto, produtos.diretorio, produtos.foto_produto, carrinho.cod_produto, carrinho.cod_cliente,
carrinho.nome_produto, carrinho.quantidade_produto, carrinho.preco_produto FROM produtos, carrinho WHERE produtos.cod_produto=carrinho.cod_produto
 AND carrinho.cod_cliente = $cliente";
$incluir2 = mysqli_query($conexao, $comando2);
	if($incluir2->num_rows==0){
		echo "<tr><td><a href='index.php'><input type='buttom' class='btn btn-primary' name='voltarHome' id='voltarHome' value='Voltar à Pagina Inicial' /></td></a>";
	echo "<td>&nbsp;</td>";
	echo "<td><input class='btn btn-primary' style='padding-left:50px; padding-right:50px;' type='button' name='botao' id='botao' 'disable' value='Carrinho Vazio'></td></tr>";
	echo "<tr><td><br></td></tr>";
	
	}
	else{
	echo "<tr><td><a href='index.php'><input type='buttom' class='btn btn-primary' name='voltarHome' id='voltarHome' value='Voltar à Pagina Inicial' /></td></a>";
	echo "<td>&nbsp;</td>";
	echo "<td><a class='btn btn-primary' href='confirma_endereco.php' value='Continuar Pedido'>Continuar Pedido</a></td></tr>";
	echo "<tr><td><br></td></tr>";

}
}
?>
</table>

</div>
</div>
</div>
</div>
<!-- RODAPÉ -->
<div class="footer-wrapper fixed-bottom">
        <div class="site-content" >
      <div class="container">
        <div class="row">
        
          <div class="block col-md-2 col-sm-6">
            <h1>Contato</h1>
            <ul>
              <li><a href="#">contato@7geeks.com.br</a></li>
              <li><a href="#">(11)4002-8922</a></li>
              <li><a href="#">(11)6969-6969</a></li>
              <li><a href="#">(11)8922-4002</a></li>             
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>Institucional</h1>
            <ul>
               <li><a href="sobre.php">Prazo de entrega,<br>Politica de troca,<br>Sobre a qualidade <br>e Pagamento</a></li>
              <li><a href="#">Desenvolvedores</a></li>              
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>Formas de Pagamento</h1>
            <ul>
              <li><a href="#">Boleto</a></li>
              <li><a href="#">Cartoes de Credito</a></li>
              <li><a href="#">Cartoes de Debito</a></li>
            </ul>
          </div>
          <div class="block col-md-3">
            <h1>Receba novidades no seu email</h1>
            <div class="input-group">
                <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                <span class="input-group-btn">
              <input type="button" class="button btn btn-default" value="Inscrever" name="subscribe" id="mc-embedded-subscribe">
                </span>
            </div> 
          </div>
          <div class="block col-md-3">
            <h1>Redes Sociais</h1>
            <ul class="social">
                <a class="btn btn-block btn-social btn-twitter">
    <span class="fa fa-twitter"></span> Sign in with Twitter
  </a>
                <a class="btn btn-block btn-social btn-facebook">
    <span class="fa fa-facebook"></span> Sign in with Facebook   
  </a>
                <a class="btn btn-block btn-social btn-google">
    <span class="fa fa-google"></span> Sign in with Facebook   
  </a>
            </ul>
          </div>
		  </div>
        </div>

          </a>
      </div>  
        </div>    
<!-- RODAPÉ -->
<!-- jQuery e Js -->
<script src="bootstrap/js/jquery.js.js"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->
</body>
</html>