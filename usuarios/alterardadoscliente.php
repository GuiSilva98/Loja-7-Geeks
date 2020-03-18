<?php
SESSION_START();
include "../conexao.php";


$button=$_POST["botao"];
$nome=$_POST["txtnome"];
$cpf=$_POST["txtcpf"];
$datanasc=$_POST["txtdatanasc"];
$fonecasa=$_POST["txtfonecasa"];
$celular=$_POST["txtcelular"];
$email=$_POST["txtemail"];


if($button == "Alterar dados"){

$cod_cliente=$_SESSION['cod_cliente'];
  $verificausuario = mysqli_query($conexao, "SELECT `cod_cliente`, `nome_cliente`, `cpf_cliente`, `dtnasc_cliente`, `fonecasa_cliente`, `celular_cliente`, `email_cliente` FROM clientes WHERE cod_cliente='$cod_cliente'");
  
   if(mysqli_num_rows($verificausuario) >= 1){
       
   if ($nome!==""){
     $comando="UPDATE clientes SET nome_cliente='$nome' WHERE cod_cliente=$cod_cliente";
	 $_SESSION['txtnome']=$nome;
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   
   elseif ($cpf !== ""){
  
  // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
  
    $verificausuario = mysqli_query($conexao,"SELECT `cod_cliente`, `nome_cliente`, `cpf_cliente`, `dtnasc_cliente`, `fonecasa_cliente`, `celular_cliente`, `email_cliente` FROM clientes WHERE cpf_cliente = '$cpf'");
  
   if(mysqli_num_rows($verificausuario) >= 1)
   
   {
     echo "<script> alert('CPF já cadastrados!');</script>";
     echo "<meta http-equiv='refresh' content='0; URL= alterardadoscliente.html'>";
     exit;
   }
	
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        echo "<script>alert('1 CPF Inválido')</script>";
		echo "<meta http-equiv='refresh' content='0; URL= alterardadoscliente.html'>";
		exit;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        echo "<script>alert('2 CPF Inválido')</script>";
		echo "<meta http-equiv='refresh' content='0; URL= alterardadoscliente.html'>";
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
				echo "<meta http-equiv='refresh' content='0; URL= alterardadoscliente.html'>";
				exit;
            }
        }
 		$comando="UPDATE clientes SET cpf_cliente='$cpf' WHERE cod_cliente=$cod_cliente";
		$incluir=mysqli_query($conexao,$comando);
		echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   }
   
   elseif ($datanasc!==""){
     $comando="UPDATE clientes SET dtnasc_cliente='$datanasc' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   elseif ($fonecasa!==""){
     $comando="UPDATE clientes SET fonecasa_cliente='$fonecasa' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   elseif ($celular!==""){
     $comando="UPDATE clientes SET celular_cliente='$celular' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   elseif ($email!==""){
     $comando="UPDATE clientes SET email_cliente='$email' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   elseif ($senha!==""){
     $comando="UPDATE clientes SET senha_cliente='$cpf' WHERE cod_cliente=$cod_cliente";
	 $incluir=mysqli_query($conexao,$comando);
	 echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";
   }
   }
}   
     
     echo "<script> alert('Alteração efetuada com sucesso!');</script>";
	 echo "<script>opener.location.reload(); window.close();</script>";


?>