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
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
<table class='table table-striped' >
<h1 id="preto">Todos os Pedidos</h1>
<!-- Conteúdo -->
<?php
include "../../conexao.php";
@$cliente = $_SESSION['cod_cliente'];
$comando = "SELECT * FROM pedidos";
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
				</body>
</html>
