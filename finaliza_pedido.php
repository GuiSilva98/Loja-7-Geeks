<?php SESSION_START();

$nome = @$_SESSION['txtnome'];
if(isset($nome)){

}
else{
echo "<script>alert('Você deve fazer o login antes!')</script>";
echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
}
?>
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
<div class="container-fluid" style="border: 1px solid #CCC">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
<table class='table table-striped' >
<?php 
include "conexao.php";

@$cliente=$_SESSION['cod_cliente'];
@$button=$_POST['botao'];
@$check=$_POST['ciente'];



if($button=="Finalizar Pedido"){
	if(empty($check)){
		echo "<script>alert('Confirme que seu endereço está correto!')</script>";
		echo "<script>history.go(-1)</script>";
	}
	else{
	$comando2 = "SELECT produtos.cod_produto, produtos.diretorio, produtos.foto_produto, carrinho.cod_produto, carrinho.cod_cliente,
	carrinho.nome_produto, carrinho.quantidade_produto, carrinho.preco_produto FROM produtos, carrinho WHERE produtos.cod_produto=carrinho.cod_produto AND carrinho.cod_cliente = $cliente";
	$incluir2 = mysqli_query($conexao, $comando2);

if (!$incluir2) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}		
		
		echo "<h1 id='preto'>Esta é sua compra!</h1>";
		echo "<p id='preto'>Confira se são estes itens que realmente você deseja,</p>";
		echo "<p id='preto'>depois, é só confirmar e emitir o boleto!</p>";
		echo "<br>";
		echo "<thead>";
		echo "<tr>";
        echo "<th style='max-height:75px;'>Código</th>";
		echo "<th>Foto</th>";
        echo "<th>Nome do Produto</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
		echo "<th>Total</th>";
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
        echo "</tr>";
		}
		echo "</table>";
		$somar = "SELECT SUM(quantidade_produto * preco_produto) AS soma FROM carrinho WHERE cod_cliente= $cliente";
		$tm = mysqli_query($conexao, $somar);
		$sm = mysqli_fetch_array($tm);
		echo "<div class='col-md-4'></div>";
		echo "<div class='col-md-4'>";
		echo "<h2 align='center'><span class='label label-success'>Total: R$  ".$sm[0]."</span></h2>";
		echo "<br>";
		echo "</div>";
		}
		
} 


?>
<div class="clearfix"></div>

			<form name="boleto" method="post" action="finalizar_tudo.php">
			<div class='col-md-12' align="center">
			<a href="carrinho.php" class="btn btn-primary submit-button">Voltar ao carrinho</a>
			<input class="btn btn-danger submit-button" type="submit" name="botao" id="botao" value="Finalizar Pedido" >
			<br>
			<br>
			</div>
			</form>

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