<?php @SESSION_START();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="index.css" rel="stylesheet" />
<script src='jquery-1.8.3.min.js'></script>
<script src='jquery.elevatezoom.js'></script>
<!-- Ref. Bootstrap -->
<link href="bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->
<title>Index</title>
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
    <!--
      <ul class="nav navbar-nav" id="itens" >
      <li>
        <a href="Masculino" title="Masculino" style="	color:#000;">Masculino</a>
      </li>
      <li>
        <a href="Feminino" title="Feminino" style="color: #000;">Feminino</a>
      </li> 
      <li>
        <a href="Acessórios" title="Acessórios" style="	color:#000;">Acessórios</a>
      </li>
      </ul>
      </nav>
</div>-->
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

    <!--<label for="Conta"><a href="conta.html">Conta</a></label> |
<label for="Carrinho"><a href="carrinho.html">Carrinho</a></label> |
<label for="Cadastro"><a href="cadastro.html">Cadastro</a></label>-->
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
<form name="comprar" method="post" action="carrinho.php">
<div class="container-fluid" style="border: 1px solid #CCC">
<div class="row" >
<div class="col-md-2" ></div>
<div class="col-md-7" >
<div class='thumbnail' >

<?php
include "conexao.php";

@$button=$_POST['botao'];
@$codproduto=$_GET['codproduto'];
$_SESSION['codproduto']=$codproduto;
@$quantprod=$_POST['txtquantp'];
@$codcliente=$_SESSION['cod_cliente'];

$comando= "SELECT * FROM produtos WHERE cod_produto='$codproduto'";
$resulta = mysqli_query($conexao,$comando);
$p=0;



while($registro = mysqli_fetch_array($resulta)){
		
		echo "<h1 id='preto'>".$registro[3]."</h1>"; 
		echo "<p id='preto'><a style='color: black; font-size:8px;'>Código do Produto: #".$registro[0]."</a><br><br>";
		echo "<div class='container-fluid' >";
		echo "<div class='row'>";
		echo "<div class='container' >";
		echo "<div class='col-md-4' >";
	    echo "<img id='zoom_01' src=".$registro[1].$registro[2]." data-zoom-image=".$registro[1].$registro[2]." style='max-width: 300px' align='center'>"; 
        echo "</div>";
        echo "<br />";
		
		echo "<div class='col-md-5'>";
		
		echo "<p><a style='color: red; font-size:30px; border-bottom:1px solid red'>R$".$registro[5]."</a></p>"; 
		echo "<td>Quantidade: <input name='txtquantp' id='txtquantp' value='1' maxlength='2' type='number' min='1' max='10' style='max-width: 40px; color:black'></td>"; 
		echo "<br>";
		echo "<br>";
		echo "<p><a style='color: black'>Descrição: <br>".$registro[6]."</a><br>";
		echo "<p><a style='color: black'>Outras informações: <br>".$registro[7]."</a><br>";
		echo "<br>";
		echo "<br>";
		echo "<td><input class='btn btn-primary' type='submit' name='botao' id='botao' value='Adicionar ao Carrinho'></td>"; 
		echo "</div>";
		echo "</div>";
		
}
echo "</table>";
echo "</div>";
echo "</div>";
echo "</div>";

?>
<div class="col-md-6" >
</div>
</div>
</div>
</div>
</div>
</form>
<!-- RODAPÉ -->
<br /><br /><br />
<div class="footer-wrapper">
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
              <input type="submit" class="button btn btn-default" value="Inscrever" name="subscribe" id="mc-embedded-subscribe">
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
<!-- Slide rotativo -->
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 300
        })
    });

    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>
<!-- Slide rotativo -->
<!-- jQuery e Js -->

<script src="bootstrap/js/jquery.js.js"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->
</body>
</html>
