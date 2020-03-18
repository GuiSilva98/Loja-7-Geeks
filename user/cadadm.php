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
                            <li class="list-group-item"><span><a href="../produtos/produtos.php">Produtos</a></span>
							<li class="list-group-item"><span><a href="../pedidos/pedidos.php">Pedidos</a></span>
                           
                        </ul>
                         
                    </div>
                </div>
                
            </div>
            <div class="col-md-9">
			<div class="container-fluid" style="border: 1px solid #CCC">
		<div class="row register-form">
		              <br>
			<div class="col-md-10 col-md-offset-1">
				<form class="form-horizontal custom-form" name="cadprod" method="post" action="incluiradm.php">
                <h1 id="preto">Cadastrar novo Administrador</h1>
                            <br>              <br>              <br>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Nome<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtnome" id="txtnome" placeholder="Insira seu nome">
                    </div>
                </div>
               <div class="clearfix"></div>
                
                     <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">CPF<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="txtcpf" id="txtcpf" maxlength="14" placeholder="000.000.000-00">
                    </div>
                </div>   
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Data de Nascimento<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="txtdatanasc" id="txtdatanasc" type="date" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                   
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Telefone Residencial<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="txtfonecasa" id="txtfonecasa" maxlength="12"  placeholder="(00) 0000-0000">
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Celular </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="txtcelular" maxlength="13"  id="txtcelular" placeholder="(00)00000-0000">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Email<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" name="txtemail" id="txtemail" placeholder="Insira seu email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Senha<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="txtsenha" id="txtsenha" placeholder="*******">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Confirme a senha<span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" id="txtconfsenha" onblur="validarSenha()"  placeholder="*******">
                    </div>
            </div>
                  
            <!--<div class="checkbox">
                    <label>
                        <input type="checkbox">Eu aceito e concordo com os termos e condicoes.</label>
                </div>-->
                <div class="clearfix"></div>
				<a style="font-size:10px; color:black;">Campos marcados em <span style="color:red">*</span> são obrigatórios.</a>
				<br>
                <button class="btn btn-default submit-button" type="submit" value="Cadastrar ADM" name="botao" id="botao">Cadastrar ADM</button>
            </form>
			</div>
			</div>
			              <br>
                </div>
				
<!-- jQuery e Js -->
<script src="bootstrap/js/jquery.js.js"></script>
<script src="jquery.maskedinput.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js.js"></script>

    <script type="text/javascript">
    jQuery(function($){
        $("#txtcpf").mask("999.999.999-99");
        $("#txtfonecasa").mask("(99)9999-9999");
        $("#txtcelular").mask("(99)99999-9999");
    });
</script>
<!-- jQuery e Js -->

</body>
</html>
