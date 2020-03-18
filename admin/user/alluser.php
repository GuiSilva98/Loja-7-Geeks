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

<div class="thumbnail" style="widht:100%" >
<h2>Todos os Usuários</h2>
<br>
<form name="clientes" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<input type="radio" name="rdo" id="rdo" value="c" checked> Código
<input type="radio" name="rdo" id="rdo"  value="n" > Nome <br><br>
<input type="text" style="max-width:200px" name="txtbusca" id="txtbusca" placeholder="Procure o cliente">
<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Buscar Cliente'>

<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Todos os Clientes'>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered table-responsive table-md" style="width:100%;" >
<?php
function format($mask,$string)
				{
					return  vsprintf($mask, str_split($string));
				}
include "../../conexao.php";

@$radio=$_GET['rdo'];
@$busca=$_GET['txtbusca'];
@$button=$_GET['btnbusca'];


if($button=="Todos os Clientes"){
	$comando= "SELECT * FROM clientes";
	$incluir=mysqli_query($conexao, $comando);
	
		echo "<thead class='thead-default'>";
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>Código: </th>";
		echo "<th>Nome Completo: </th>";
		echo "<th>CPF: </th>";
		echo "<th>Data de Nascimento: </th>";
		echo "<th>Telefone Residencial: </th>";
		echo "<th>Celular: </th>";
		echo "<th>Email: </th>";
		echo "<th>CEP: </th>";
		echo "<th>Endereço:</th>";
		echo "<th> </th>";
		echo "</tr>";
		echo "</thead>";

	while($registro=mysqli_fetch_array($incluir))
	{		
		echo "<tbody>";
        echo "<tr>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<th>" .$registro[1];"</th>";
		$cpfMask = "%s%s%s.%s%s%s.%s%s%s-%s%s";
		echo "<th>"; echo format($cpfMask,$registro[2]);"</th>";
		$data = $registro[3];
		echo "<th>"; echo date('d/m/Y', strtotime($data));"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[8];"</th>";
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]." ".$registro[15]."</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14]."</th>";
		echo "</tr>";
		
	
		
		}	
}

if($button=="Buscar Cliente"){

	$comando= "SELECT * FROM clientes WHERE cod_cliente='$busca'";
	$incluir=mysqli_query($conexao, $comando);
	
	if(empty($busca)){
		echo "<script>alert('Informe o código do cliente!')</script>";
		exit;
	}
	
	if($radio=="c"){
		
	if(mysqli_num_rows($incluir)==0) {
		echo "<script>alert('Cliente Inexistente!')</script>";
		exit;
	}
	else{
	
		echo "<thead>";
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>Código do cliente: </th>";
		echo "<th>Nome Completo: </th>";
		echo "<th>CPF: </th>";
		echo "<th>Data de Nascimento: </th>";
		echo "<th>Telefone Residencial: </th>";
		echo "<th>Celular: </th>";
		echo "<th>Email: </th>";
		echo "<th>CEP: </th>";
		echo "<th>Endereço: </th>";
		echo "</tr>";
		echo "</thead>";
	while($registro=mysqli_fetch_array($incluir))
	{
		echo "<tbody>";
        echo "<tr>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<th>" .$registro[1];"</th>";
		$cpfMask = "%s%s%s.%s%s%s.%s%s%s-%s%s";
		echo "<th>"; echo format($cpfMask,$registro[2]);"</th>";
		$data = $registro[3];
		echo "<th>"; echo date('d/m/Y', strtotime($data));"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[8];"</th>";
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]." ".$registro[15]."</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14]."</th>";
	echo "</tr>";
		exit;
	}
	}
	}
		
   	
		
		if($radio=="n"){
			
		$comando= "SELECT * FROM clientes WHERE nome_cliente LIKE '%".$busca."%'";
		$incluir=mysqli_query($conexao, $comando);
		
		if (!$incluir) {
		printf("Error: %s\n", mysqli_error($conexao));
		exit();
		}
		
	while($registro=mysqli_fetch_array($incluir))
	{
		if(mysqli_num_rows($incluir)==0){
		echo "<script>alert('Cliente Inexistente!')</script>";
		exit;
		}		
		else{
			echo "<thead>";
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>Código do cliente: </th>";
		echo "<th>Nome Completo: </th>";
		echo "<th>CPF: </th>";
		echo "<th>Data de Nascimento: </th>";
		echo "<th>Telefone Residencial: </th>";
		echo "<th>Celular: </th>";
		echo "<th>Email: </th>";
		echo "<th>CEP: </th>";
		echo "<th>Endereço: </th>";
		echo "<th>Ponto de Referência: </th>";
		echo "</tr>";
		echo "</thead>";
		
		echo "<tbody>";
        echo "<tr>";
		echo "<th style='color:red; font-size:16px;'>" .$registro[0]."</th>";
		echo "<th>" .$registro[1];"</th>";
		$cpfMask = "%s%s%s.%s%s%s.%s%s%s-%s%s";
		echo "<th>"; echo format($cpfMask,$registro[2]);"</th>";
		$data = $registro[3];
		echo "<th>"; echo date('d/m/Y', strtotime($data));"</th>";
		echo "<th>" .$registro[4];"</th>";
		echo "<th>" .$registro[5];"</th>";
		echo "<th>" .$registro[6];"</th>";
		echo "<th>" .$registro[8];"</th>";
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]." ".$registro[15]."</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14]."</th>";
		echo "</tr>";
		}
		}
		}
		}
?>


	</table>
	</form>
	</div>
</div>
        </div>


      <!-- jQuery e Js -->
<script src="../bootstrap/js/jquery.js.js"></script>
<script src="../bootstrap/js/bootstrap.min.js.js"></script>
<!-- jQuery e Js -->  
			
</body>
</html>
