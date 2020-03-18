<?php SESSION_START();

$nome = @$_SESSION['txtnome'];
if(isset($nome)){
echo "<script>alert('Você já está logado!')</script>";
echo "<meta http-equiv='refresh' content='0; URL= index.php'>";
}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="index.css" rel="stylesheet" />
<script type="text/javascript" src="funcoes.js"></script>
<!-- Ref. Bootstrap -->
<link href="bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->

<title>Login - 7Geeks</title>
</head>

<body>
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4 col-md-offset-4" id="Div1"><a onclick="voltarHome()"><img src="imagens/logo2.png" class="img-responsive" /></a>
<br>
</div>

<div class="col-md-4" id="banner" align="center" style="margin-top:35px">
<div class="navbar" align="center">
<form>
</form>
</div>

</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>

</div>
</div>    </div>
 
</header>
<!-- CABEÇALHO -->
<!-- FORMULÁRIO -->
<div class="container-fluid" style="border: 1px solid #CCC">
<div class="row login-form">
        <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal custom-form" name="login" method="post" action="logaruser.php">
             <br>
              
                
              <br>
			  
                 <h1 id="preto">Login</h1>
                                          <br>              <br>              <br>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" name="txtemail" placeholder="Insira seu email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Senha</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="txtsenha" placeholder="*******">
                    </div>
                </div>
                <button class="btn btn-default submit-button" type="submit" value="Entrar" id="botao" name="botao">Entrar</button>
				<p> <span style=" Color: Black;">Ainda não é cadastrado? Faça seu <a href="cadastro1.html">cadastro aqui!</a></span> </p>
				<br>
            </form>
        </div> 
    </div>
</div>    
    
<!-- FORMULÁRIO -->
<!-- RODAPÉ -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="footer-wrapper">
        <div class="site-content">
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
              <li><a href="#">Prazo de entrega</a></li>
              <li><a href="#">Politica de troca</a></li>    
              <li><a href="#">Sobre a qualidade</a></li>  
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
    <span class="fa fa-twitter"></span>
  </a>
                <a class="btn btn-block btn-social btn-facebook">
    <span class="fa fa-facebook"></span>  
  </a>
                <a class="btn btn-block btn-social btn-google">
    <span class="fa fa-google"></span>   
  </a>
            </ul>
          </div>
        </div>
        </div>          
      </div>  
        </div>    
<!-- RODAPÉ -->
<!-- jQuery e Js -->
<script src="bootstrap/js/jquery.js.js"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->

</body>
</html>
