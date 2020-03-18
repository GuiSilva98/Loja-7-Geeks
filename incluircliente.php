<?php
include "conexao.php";

$button=$_POST["botao"];
$nome=$_POST["txtnome"];
$cpf=$_POST["txtcpf"];
$datanasc=$_POST["txtdatanasc"];
$fonecasa=$_POST["txtfonecasa"];
$celular=$_POST["txtcelular"];
$email=$_POST["txtemail"];
$senha=$_POST["txtsenha"];
$cep=$_POST["cep"];
$endereco=$_POST["endereco"];
$numero=$_POST["numcasa"];
$complemento=$_POST["complemento"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$pontoref=$_POST["txtref"];


if($button == "Cadastrar"){

if($nome==""){
	echo "<script> alert('Preencha seu nome!');</script>";
	echo "<script> document.cad.txtnome.focus;</script>";
	echo "<script>history.go(-1)</script>";
	
	
}
elseif ($cpf ==""){
	echo "<script> alert('Preencha seu CPF!');</script>";
	echo "<script> document.cad.txtcpf.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($datanasc ==""){
	echo "<script> alert('Preencha sua data de nascimento!');</script>";
	echo "<script> document.cad.txtdatanasc.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($fonecasa ==""){
	echo "<script> alert('Preencha seu telefone!');</script>";
	echo "<script> document.cad.txtfonecasa.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($email ==""){
	echo "<script> alert('Preencha seu email!');</script>";
	echo "<script> document.cad.txtemail.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($senha ==""){
	echo "<script> alert('Preencha sua senha!');</script>";
	echo "<script> document.cad.txtsenha.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($cep ==""){
	echo "<script> alert('Preencha seu CEP!');</script>";
	echo "<script> document.cad.cep.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($endereco ==""){
	echo "<script> alert('Preencha seu endereco!');</script>";
	echo "<script> document.cad.endereco.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($numero ==""){
	echo "<script> alert('Preencha seu Numero!');</script>";
	echo "<script> document.cad.numcasa.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($bairro ==""){
	echo "<script> alert('Preencha seu CPF!');</script>";
	echo "<script> document.cad.bairro.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($cidade ==""){
	echo "<script> alert('Preencha seu CPF!');</script>";
	echo "<script> document.cad.cidade.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
elseif ($estado ==""){
	echo "<script> alert('Preencha seu CPF!');</script>";
	echo "<script> document.cad.estado.focus;</script>";
	echo "<script>history.go(-1)</script>";
}
else
{

  // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
  
    $verificausuario = mysqli_query($conexao,"SELECT * FROM clientes WHERE cpf_cliente = '$cpf'");
  
   if(mysqli_num_rows($verificausuario) >= 1)
   
   {
     echo "<script> alert('CPF já cadastrados!');</script>";
     echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
     exit;
   }
	
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        echo "<script>alert('1 CPF Inválido')</script>";
		echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
		exit;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        echo "<script>alert('2 CPF Inválido')</script>";
		echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
		exit;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
                echo "<script>alert('3 CPF Inválido')</script>";
				echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
				exit;
            }
        }
 	
   
     $comando="INSERT INTO clientes(
     nome_cliente,
     cpf_cliente ,
     dtnasc_cliente,
     fonecasa_cliente,
     celular_cliente,
     email_cliente,
     senha_cliente,
     cep_cliente ,
     endereco_cliente ,
     numcasa_cliente ,
     complemento_cliente ,
     bairro_cliente ,
     cidade_cliente ,
     estado_cliente ,
     pontoref_cliente)

     VALUES (

     '$nome',
     '$cpf',
     '$datanasc',
     '$fonecasa',
     '$celular',
     '$email',
     '$senha',
     '$cep',
     '$endereco',
     '$numero',
     '$complemento', 
     '$bairro',
     '$cidade',
     '$estado',
     '$pontoref')";
     
     $incluir=mysqli_query($conexao,$comando);
     
     echo "<script> alert('Cadastro efetuado com sucesso!');</script>";
     echo "<meta http-equiv='refresh' content='0; URL= login.php'>";
   }
   }
   }
   




if($button == "Alterar dados"){
	echo "<script>alert('AHHH MIZERAVI')</script>";
}
?>