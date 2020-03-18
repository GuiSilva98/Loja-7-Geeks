<?php
SESSION_START();

include "conexao.php";
$cliente = $_SESSION['cod_cliente'];
$valorpag = $_SESSION['preco_pedido'];
$comando2 = "SELECT * FROM clientes WHERE cod_cliente = $cliente"; 
$incluir2 = mysqli_query($conexao, $comando2);
$row = mysqli_fetch_array($incluir2);

$comando5 = "SELECT MAX(cod_pedido) AS total FROM pedidos";
$incluir5 = mysqli_query($conexao, $comando5); 
$contagem = mysqli_fetch_array($incluir5);
$codpedido = $contagem[0];
$somar = "SELECT SUM(quantidade_produto * preco_produto) AS total FROM itens_pedido WHERE cod_cliente= $cliente AND cod_pedido = $codpedido";
$tm = mysqli_query($conexao, $somar);
$sm = mysqli_fetch_array($tm);

$valor = (int)$sm[0];

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 2.95;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  
$valor_cobrado = $valor;

$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto = number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = "75896452";  // Nosso numero sem o DV - REGRA: Máximo de 11 caracteres!
$dadosboleto["numero_documento"] = $dadosboleto["nosso_numero"];	// Num do pedido ou do documento = Nosso numero
$dadosboleto["data_vencimento"] = $data_venc;
$dadosboleto["data_documento"] = $_SESSION['data_compra']; // Data de emissão do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; // Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $row['nome_cliente'];
$dadosboleto["endereco1"] = $row['endereco_cliente'];
$dadosboleto["endereco2"] = $row['cidade_cliente']." - ".$registro['estado_cliente']." - ".$registro['cep_cliente'];

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] =  "Pagamento de Compra na Loja  7 Geeks - Valor referente ao codigo do pedido $codpedido";
$dadosboleto["demonstrativo2"] = "Mensalidade referente a compra <br>Taxa bancaria - R$ ".number_format($taxa_boleto, 2, ',', '');
$dadosboleto["instrucoes1"] = "- Pagamento de Compra na Loja  7 Geeks - Valor referente ao codigo do pedido $codpedido";
$dadosboleto["instrucoes2"] = "- Receber ate 10 dias apos o vencimento";
$dadosboleto["instrucoes3"] = "- 7 Geeks - http://www.7geeks.000webhostapp.com";
$dadosboleto["instrucoes4"] = "- Mensalidade referente a compra <br>Taxa bancaria - R$ ".number_format($taxa_boleto, 2, ',', '');

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "001";
$dadosboleto["valor_unitario"] = $valor_boleto;
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DS";


// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - Bradesco
$dadosboleto["agencia"] = "1172"; // Num da agencia, sem digito
$dadosboleto["agencia_dv"] = "0"; // Digito do Num da agencia
$dadosboleto["conta"] = "0403005"; 	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "2"; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - Bradesco
$dadosboleto["conta_cedente"] = "0403005"; // ContaCedente do Cliente, sem digito (Somente Números)
$dadosboleto["conta_cedente_dv"] = "2"; // Digito da ContaCedente do Cliente
$dadosboleto["carteira"] = "06";  // Código da Carteira: pode ser 06 ou 03

// SEUS DADOS
$dadosboleto["identificacao"] = "7 Geeks";
$dadosboleto["cpf_cnpj"] = "21.468.952/0001-04";
$dadosboleto["endereco"] = "Avenida Pereira Barreto, 400";
$dadosboleto["cidade_uf"] = "Sao Bernardo do Campo - SP";
$dadosboleto["cedente"] = "Comercio de produtos e Artigos Geeks";


include("funcoes_bradesco.php"); 
include("layout_bradesco.php");
?>
