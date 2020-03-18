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
<br>
<h1 id="preto">Confirme seu Endereço</h1>
<br>
<p id="preto"> Nesta etapa, é importante que confirme seu endereço para que</p>
<p id="preto">seus produtos cheguem em sua casa com segurança ;)</p>
<div class="container-fluid " >

            <div class="row" align="center" style="width:100%;">
            <div class="col-md-3">
                
            </div>
			            <div class="col-md-9">
            <div class="col-md-8" align="center">
			<div class="thumbnail" style="widht:100%" >
			<?php
			function format($mask,$string)
				{
					return  vsprintf($mask, str_split($string));
				}
			include "conexao.php";
			
			$cod_cliente=$_SESSION['cod_cliente'];
			
			$res=mysqli_query($conexao,"SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
			$registro=mysqli_fetch_array($res);
			
			
			echo "<table style='width:100%;' >";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
  			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;CEP: </th>";
			echo "<th>" .$registro[8];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Endereço: </th>";
			$cpfMask = "%s%s%s.%s%s%s.%s%s%s-%s%s";
			echo "<th>".$registro[9];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
  			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Número: </th>";
			echo "<th>" .$registro[10];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
  			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Complemento: </th>";
			echo "<th>".$registro[11];"</th>";
			echo "</tr>";

			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
  			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Bairro: </th>";
			echo "<th>" .$registro[12];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
  			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Cidade: </th>";
			echo "<th>" .$registro[13];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Estado: </th>";
			echo "<th>" .$registro[14];"</th>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th><br></th>";
			echo "</tr>";
			
			echo "<tr align='center'>";
			echo "<th>&nbsp;&nbsp;&nbsp;Ponto de Referência: </th>";
			echo "<th>" .$registro[15];"</th>";
			echo "</tr>";
			
			echo "</table>";
			echo "<br/>"
			
			?>
			<p>
			<button class="btn btn-primary submit-button" type="button" name="botao" onclick="window.open('usuarios/alterarenderecocliente.html#dados', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=50, LEFT=350, WIDTH=770, HEIGHT=650');" id="botao">Alterar Endereço</button>
			</p>
			</form>
			<form name="confirmar_dados" method="post" action="finaliza_pedido.php">
			<input type="checkbox" id="ciente" name="ciente" value="concordo"> Eu concordo que meu endereço está correto!
			<br>
			<br>
			<input class="btn btn-primary submit-button" type="submit" name="botao" id="botao" value="Finalizar Pedido" >
			</form>
			<br>
            </div>
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