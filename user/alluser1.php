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
<div class="col-md-9" align="center">
<div class="thumbnail" style="widht:100%" >
<br>
<form name="clientes" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<input type="radio" name="rdo" id="rdo" value="c"> Código
<input type="radio" name="rdo" id="rdo"  value="n" > Nome <br><br>
<input type="text" style="max-width:200px" name="txtbusca" id="txtbusca" placeholder="Procure o cliente">
<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Buscar Cliente'>
<br>
<br>
<input class="btn btn-primary" type='submit' name='btnbusca' id='btnbusca' value='Todos os Cliente'>
<br>

<?php

include "../../conexao.php";

@$radio=$_GET['rdo'];
@$busca=$_GET['txtbusca'];
@$button=$_GET['btnbusca'];
echo "<table style='width:100%;'>";

if($button=="Todos os Cliente"){
	$comando= "SELECT * FROM clientes";
	$incluir=mysqli_query($conexao, $comando);
	
	while($registro=mysqli_fetch_array($incluir))
	{
		echo "<tr>";
		echo "<th>___________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>&nbsp;&nbsp;&nbsp;Código do cliente: </th>";
		echo "<th style='color:red; font-size:16px;'>&nbsp;&nbsp;&nbsp;" .$registro[0]."</th>";
		echo "<th style='color:red'></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>&nbsp;&nbsp;&nbsp;Nome Completo: </th>";
		echo "<th>" .$registro[1];"</th>";
		echo "</tr>";

		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;CPF: </th>";
		echo "<th>" .$registro[2];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Data de Nascimento: </th>";
		echo "<th>" .$registro[3];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Telefone Residencial: </th>";
		echo "<th>" .$registro[4];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Celular: </th>";
		echo "<th>" .$registro[5];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Email: </th>";
		echo "<th>" .$registro[6];"</th>";
		echo "</tr>";
		
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
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14].$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>___________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
		
		}
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		echo "<br>";
		echo "</table>";
	
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
	$registro=mysqli_fetch_array($incluir);
	
	echo "<tr>";
		echo "<th>____________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>&nbsp;&nbsp;&nbsp;Código do cliente: </th>";
		echo "<th style='color:red; font-size:16px;'>&nbsp;&nbsp;&nbsp;" .$registro[0]."</th>";
		echo "<th style='color:red'></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>&nbsp;&nbsp;&nbsp;Nome Completo: </th>";
		echo "<th>" .$registro[1];"</th>";
		echo "</tr>";

		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;CPF: </th>";
		echo "<th>" .$registro[2];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Data de Nascimento: </th>";
		echo "<th>" .$registro[3];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Telefone Residencial: </th>";
		echo "<th>" .$registro[4];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Celular: </th>";
		echo "<th>" .$registro[5];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Email: </th>";
		echo "<th>" .$registro[6];"</th>";
		echo "</tr>";
		
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
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14].$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>___________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
	}
	}
		
        echo "</div>";  
        echo "</div>";
        echo "</div>";	
		
		if($radio=="n"){
			
		$comando= "SELECT * FROM clientes WHERE nome_cliente LIKE '%".$busca."%' ORDER BY nome";
		$incluir=mysqli_query($conexao, $comando);
			
		$registro=mysqli_fetch_array($incluir);
	
		echo "<tr>";
		echo "<th>____________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th style='color:red; font-size:15px;'>&nbsp;&nbsp;&nbsp;Código do cliente: </th>";
		echo "<th style='color:red; font-size:16px;'>&nbsp;&nbsp;&nbsp;" .$registro[0]."</th>";
		echo "<th style='color:red'></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>&nbsp;&nbsp;&nbsp;Nome Completo: </th>";
		echo "<th>" .$registro[1];"</th>";
		echo "</tr>";

		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;CPF: </th>";
		echo "<th>" .$registro[2];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Data de Nascimento: </th>";
		echo "<th>" .$registro[3];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Telefone Residencial: </th>";
		echo "<th>" .$registro[4];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Celular: </th>";
		echo "<th>" .$registro[5];"</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;Email: </th>";
		echo "<th>" .$registro[6];"</th>";
		echo "</tr>";
		
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
		echo "<th>" .$registro[9]." nº".$registro[10]." ".$registro[11]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[12]." - ".$registro[13]." - ".$registro[14].$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th><br></th>";
		echo "</tr>";
			
		echo "<tr align='center'>";
		echo "<th>&nbsp;&nbsp;&nbsp;</th>";
		echo "<th>" .$registro[15]."</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th>___________________</th>";
		echo "<th>___________________________________________________________</th>";
		echo "</tr>";
		}
        echo "</div>";  
        echo "</div>";
        echo "</div>";
			
		}
?>

</form>
</div>
         </div>
        </div>
			
</body>
</html>
