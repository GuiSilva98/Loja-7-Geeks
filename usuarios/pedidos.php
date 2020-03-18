<?php SESSION_START();

$nome = @$_SESSION['txtnome'];
if(isset($nome)){

}
else{
echo "<script>alert('Você deve fazer o login antes!')</script>";
echo "<meta http-equiv='refresh' content='0; URL= ../login.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="../index.css" rel="stylesheet" />
<!-- Ref. Bootstrap -->
<link href="../bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="../bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="../bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->

<title>Minha conta - 7Geeks</title>

</head>

<body> <!-- a5c5ff -->
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4" id="banner">
<a href="../index.php"><img src="../imagens/logo2.png" class="img-responsive" /></a>
<br>
</div>

<div class="col-md-4" id="banner" align="center" style="margin-top:35px">
<div class="navbar" align="center">
<form name="busca" method=get action="../busca.php">
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
<a  style="visibility: hidden">
<?php echo  $_SESSION['cod_cliente']; // imprime o codcliente?> 
</a>
<a style="color:white"><?php echo "Você está logado como: $nome";?></a>

<tr><td><a href="../carrinho.php"><img src="../imagens/icone-carrinhos.png" class="img-responsive" style="max-width:50px;" /></a></td>
<td><img src="../imagens/icone-perfil.png" class="img-responsive" data-toggle="dropdown" style="max-width:50px;" /><span class="caret"></span>
    <ul class="dropdown-menu" role="group" >
    <li>
    <a href="pagina_cliente.php">Minha conta</a>
    </li>
    <li>
    <a href="../logout.php">Sair</a>
    </li>
    </ul>
	</td> </tr>
	</table>
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

<!-- Conteúdo -->
<BR /> 
<br />
            <div class="container-fluid col-md-offset-1" >
            <div class="row" align="center" style="width:100%;">
            <div class="col-md-3">
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a style="color:black"><?php echo "Olá, ".$_SESSION['txtnome']," !";?></a> </h3></div>
                    <div class="panel-body">
                         <ul class="list-group">
                            <li class="list-group-item"><span><a href="pagina_cliente.php">Inicio</a></span>
                            <li class="list-group-item"><span><a href="pedidos.php">Meus Pedidos</a></span>
                            <li class="list-group-item"><span><a href="dados_cliente.php">Meus Dados</a></span>
                            <li class="list-group-item"><span><a href="endereco_cliente.php">Meus Endereços</a></span>
                        </ul>
                         
                    </div>
                </div>
                
                
                
            </div>
            <div class="col-md-9">
            
			<div class="container-fluid" style="border: 1px solid #CCC">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
<table class='table table-striped' >
<h1 id="preto">Todos os Pedidos</h1>
<!-- Conteúdo -->
<?php
include "../conexao.php";
@$cliente = $_SESSION['cod_cliente'];
$comando = "SELECT * FROM pedidos WHERE cod_cliente=$cliente";
$incluir = mysqli_query($conexao, $comando);
echo "<thead>";
		echo "<tr>";
        echo "<th style='max-height:75px;'>Nº do Pedido</th>";
		echo "<th>Status</th>";
        echo "<th>Data do Pedido</th>";
		echo "</tr>";
		echo "</thead>";
while ($registro = mysqli_fetch_array($incluir))
		{
		
		echo "<tbody>";
        echo "<tr>";
        echo "<th>".$registro[0]."</th>";
        echo "<th>".$registro[2]."</th>";
        echo "<th>".$registro[3]."</th>";
		echo "</tr>";
		}
?>
</table>
</div>
</div>
</div>
</div>
            
         </div>
        </div>
                </div>
				
                <br /><br /><br /><br />
<!-- Conteúdo -->
<!-- RODAPÉ -->
<br /><br /><br /><br /><br /><br /><br /><br />
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
               <li><a href="../sobre.php">Prazo de entrega,<br>Politica de troca,<br>Sobre a qualidade <br>e Pagamento</a></li>
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
</script>
<!-- Slide rotativo -->
<!-- jQuery e Js -->
<script src="../bootstrap/js/jquery.js.js"></script>
<script src="../bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->

</body>
</html>