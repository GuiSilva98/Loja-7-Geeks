<?php SESSION_START();

$nome = @$_SESSION['txtadmin'];
if(isset($nome)){

echo "<meta http-equiv='refresh' content='0; URL= home.php'>";
}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="../index.css" rel="stylesheet" />
<script type="text/javascript" src="funcoes.js"></script>
<!-- Ref. Bootstrap -->
<link href="../bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="Stylesheet" />
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap-social-gh-pages/bootstrap-social.css" />
<link href="../bootstrap-social-gh-pages/bootstrap-social.less" />
<link href="../bootstrap/css/bootstrap.css" rel="Stylesheet" />
<!-- Ref. Bootstrap -->

<title>Login - 7Geeks</title>
</head>

<body>
<header>
<div class="container-fluid" id="topo">
<div class="row" id="topoitens" align="center">
<div class="col-md-4 col-md-offset-4" id="Div1"><img src="../imagens/logo2.png" class="img-responsive" />
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
          <form class="form-horizontal custom-form" name="login" method="post" action="logaradmin.php">
             <br>
              
                
              <br>
			  
                 <h1 id="preto">Login Administrador</h1>
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
				<a href="../index.php"><input type="button" class="btn btn-default submit-button" value="Voltar à Pagina Inicial"></a>
				
            </form>
        </div> 
    </div>
</div>    
    
<!-- FORMULÁRIO -->
<!-- jQuery e Js -->
<script src="bootstrap/js/jquery.js.js"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->

</body>
</html>
