<?php SESSION_START(); ?>
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

<title>Sobre a 7Geeks</title>
</head>

<body> <!-- a5c5ff -->
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4" id="banner"><a href="index.php">
<img src="imagens/logo2.png" class="img-responsive" /></a>
<br>
</div>

<div class="col-md-4" id="banner" align="center" style="margin-top:35px">
<div class="navbar" align="center">
<form>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Procurar...">
    <div class="input-group-btn">
     <button type="button" class="btn btn-primary">
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
}
?>
<tr><td><a href="carrinho.php"><img src="imagens/icone-carrinhos.png" class="img-responsive" style="max-width:50px;" /></a></td>
<td><img src="imagens/icone-cadastro.png" class="img-responsive" data-toggle="dropdown" style="max-width:50px;" /><span class="caret"></span>
    <ul class="dropdown-menu" role="group" >
	
	<?php 

	if(isset($nome)){
echo  "<li>";
echo "<a href='pagina_cliente.php'>Minha conta</a>";
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
echo "<a href='login.html'>Login</a>";
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
<!-- Conteúdo -->
<div class="container-fluid">
<div class="col-sm-6 col-sm-offset-3">
<p></p>
<img src="imagens/Outros/sobre-a-qualidade.jpg" class="img-responsive"/><br>
<p id="texto">	Trabalhamos apenas com os melhores materiais de vestuário. Camisetas fio 30 penteadas 100% algodão e moletons 3 cabos que aguentam um inverno mais pesado. Além de todas nossas impressões serem feitas em Transfer pelos melhores profissionais do mercado. </p>
<br>
<img src="imagens/Outros/politica-de-troca.jpg" class="img-responsive" /><br>
<p id="texto2">O direito do consumidor assegura o direito de troca do produto. Em caso do produto defeituoso a 7 Geeks arca com as despesas de frete. Em caso de trocas por opção, os custos de envio terão de ser cobertos pelo cliente. Mande um e-mail para contato@7geeks.com.br e nossa equipe estará disposta a atender qualquer tipo de solicitação de troca imediatamente.
<br>
Prazo de reflexão - 7 dias* 
Corresponde o direito de arrependimento previsto, os valores eventualmente pagos serão devolvidos, após devolução do produto (Código de Defesa do Consumidor - Lei 8078/90).
Sem defeito de fabricação - 30 dias* <br>
O produto não poderá ser usado e sua etiqueta deverá está fixada ao mesmo.<br>
Defeito de fabricação - 90 dias*<br>
Poderá efetuar a substituição do produto por outro da mesma espécie em perfeitas condições de uso, ou, a restituição da quantia paga, sem prejuízo de eventuais perdas e danos (Código de Defesa do Consumidor - Lei 8078/90).<br>
<p style="color:red">* a contagem dos dias começa após o primeiro dia de recebimento do produto. </p>
Em qualquer um dos casos citados acima, assim que recebermos o seu produto e realizarmos as verificações necessárias, entraremos em contato para finalização de todo processo em até 2 (dois) dias úteis.
</p>
<img src="imagens/Outros/pagamento.jpg" class="img-responsive" /><br>
<p id="texto2">Nós da 7 Geeks trabalhamos com todas as formas de pagamento possíveis, basta escolher a que você preferir. Trabalhamos com cartões de crédito e boleto bancário. O tempo de aprovação pode variar dependendo de qual forma de pagamento você irá utilizar.<br>
Boleto Bancário: Após o pagamento seu pedido será aprovado em no máximo 5 dias úteis. <br>
Cartão de Crédito: Após o pagamento seu pedido será aprovado em no máximo 1 dia útil.
Lembrando que nosso prazo de postagem começa a contar a partir da aprovação do pagamento de seu produto.
</p>
<img src="imagens/Outros/prazo-de-entrega.jpg" class="img-responsive" /><br>
<p id="texto">Trabalhamos com o sistema padrão dos Correios e transportadoras, o prazo de entrega é estimado pela própria empresa de entrega, este prazo é estipulado após a nossa postagem. Temos um prazo de até 7 dias úteis para fazer a postagem de sua encomenda. Após a postagem, sua encomenda estará sendo redirecionada para o seu endereço através do sistema que você optou na hora da compra. O prazo para entrega dependerá de sua região, você pode conferir o prazo exato dos correios ou da transportadora automaticamente no momento de sua compra. Lembrando que você pode acompanhar no seu e-mail onde o seu produto está.</p>

</div>
</div>
<!-- Conteudo -->
<!-- RODAPÉ -->
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
<!-- jQuery e Js -->
<script src="bootstrap/js/jquery.js.js"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->
</body>
</html>