-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 18, 2017 as 11:31 AM
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";



--
-- Banco de Dados: `id2984683_sete_geeks`
--
CREATE DATABASE `id2984683_sete_geeks` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `id2984683_sete_geeks`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `cod_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_admin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dtnasc_admin` date NOT NULL,
  `fonecasa_admin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `celular_admin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email_admin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha_admin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`cod_admin`, `nome_admin`, `cpf_admin`, `dtnasc_admin`, `fonecasa_admin`, `celular_admin`, `email_admin`, `senha_admin`) VALUES
(1, 'aaaa', '12345678910', '2017-10-20', '111111111', '', 'pluiz26@ig.com.br', '123'),
(2, 'Rodrigo Pereira da Silva', '46690984893', '1998-11-24', '1141018055', '11964905288', 'rodrigops66@hotmail.com', '24111998'),
(3, 'Guilherme da Silva Pereira', '36733143860', '1998-06-21', '1126698968', '11991125069', 'guisilvap98@gmail.com', 'lolx1nub');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `cod_produto` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `preco_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`cod_produto`, `cod_cliente`, `nome_produto`, `quantidade_produto`, `preco_produto`) VALUES
(14, 40, '4 COISAS', 1, 465),
(23, 41, 'ASASFA', 3, 123),
(19, 42, 'Massacre', 1, 1),
(19, 42, 'Massacre', 1, 1),
(13, 42, 'bceta', 1, 213),
(19, 43, 'Massacre', 1, 1),
(19, 44, 'Massacre', 1, 1),
(14, 44, '4 COISAS', 1, 465),
(14, 45, '4 COISAS', 1, 465),
(15, 45, 'ASASFA', 1, 123),
(14, 45, '4 COISAS', 1, 465),
(14, 45, '4 COISAS', 1, 465),
(14, 45, '4 COISAS', 1, 465),
(19, 45, 'Massacre', 1, 1),
(19, 45, 'Massacre', 1, 1),
(13, 45, 'bceta', 1, 213),
(21, 45, 'bceta', 1, 213),
(24, 45, 'Massacre', 1, 1),
(14, 48, '4 COISAS', 1, 465),
(19, 48, 'Massacre', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(60) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `dtnasc_cliente` date NOT NULL,
  `fonecasa_cliente` varchar(15) NOT NULL,
  `celular_cliente` varchar(15) NOT NULL,
  `email_cliente` varchar(30) NOT NULL,
  `senha_cliente` varchar(30) NOT NULL,
  `cep_cliente` varchar(15) NOT NULL,
  `endereco_cliente` varchar(60) NOT NULL,
  `numcasa_cliente` varchar(8) NOT NULL,
  `complemento_cliente` varchar(30) NOT NULL,
  `bairro_cliente` varchar(30) NOT NULL,
  `cidade_cliente` varchar(50) NOT NULL,
  `estado_cliente` varchar(5) NOT NULL,
  `pontoref_cliente` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome_cliente`, `cpf_cliente`, `dtnasc_cliente`, `fonecasa_cliente`, `celular_cliente`, `email_cliente`, `senha_cliente`, `cep_cliente`, `endereco_cliente`, `numcasa_cliente`, `complemento_cliente`, `bairro_cliente`, `cidade_cliente`, `estado_cliente`, `pontoref_cliente`) VALUES
(13, 'Luiz Henrique', '06366714886', '1964-05-02', '(11)2669-8968', '(11)98910-4591', 'pluiz2006@ig.com.br', 'efu6560', '09780-425', 'Rua Victório Natal Gastaldo (Jd Palermo)', '188', '', 'Nova Petrópolis', 'São Bernardo do Campo', 'SP', 'Paralela a Avenida Principal'),
(14, 'Guilherme da Silva', '36733143860', '2017-10-09', '(11)2669-8968', '(11)99112-5069', 'guisilvap98@gmail.com', 'lol', '09780-425', 'Rua Victório Natal Gastaldo (Jd Palermo)', '1837', 'ap 45 bl 17', 'São Bernardo do Campo', 'Nova Petrópolis', 'SP', 'aaaaaa'),
(15, 'Natalia Fiuza', '11111111111', '2017-10-01', '(11)4339-8513', '(11)96450-3007', 'nataliafiuza69@gmail.com', 'natalia123', '09781-220', 'Rua Tiradentes - de 1300 a 1852 - lado par', '56', '', 'Ferrazópolis', 'São Bernardo do Campo', 'SP', ''),
(16, 'GUILHERME DA SILVA PEREIRA', '74656091430', '2017-10-07', '(11)9999-9999', '', 'guirpg98@hotmail.com', 'lol', '09780-425', 'Rua Victório Natal Gastaldo (Jd Palermo)', '188', '', 'Nova Petrópolis', 'São Bernardo do Campo', 'SP', ''),
(17, 'Maria das Graças Silva', '27023690816', '1978-08-22', '(11)2669-8969', '(11)96255-7252', 'familia470@gmail.com', 'maria', '09781-220', 'Rua Tiradentes - de 1300 a 1852 - lado par', '1837', 'Ap 45 Bl 17', 'Ferrazópolis', 'São Bernardo do Campo', 'SP', 'Condominio Tiradentes'),
(19, 'Deiwid Ferreira Gomes', '80602215404', '2000-11-11', '(11)4338-1604', '', 'deiwid11@hotmail.com', '11112000', '09790-190', 'Avenida José Arthur da Frota Moreira', '141', 'Casa 1', 'Ferrazópolis', 'São Bernardo do Campo', 'SP', ''),
(20, 'nn', '95281667254', '2017-10-09', '(51)3511-6315', '', 'bbbbbbbb@bbbbb.com', 'aaa', '09781-220', 'Rua Tiradentes - de 1300 a 1852 - lado par', '123', '', 'São Bernardo do Campo', 'Ferrazópolis', 'SP', ''),
(21, 'doctor', '52947126874', '4444-04-04', '(00)0000-0000', '(11)95923-7414', 'osiris_14@hotmail.com.br', 'Gom@@123', '09781-220', 'Rua Tiradentes - de 1300 a 1852 - lado par', '1837', 'bloco5 ap 45', 'Ferrazópolis', 'São Bernardo do Campo', 'SP', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedido`
--

CREATE TABLE IF NOT EXISTS `itens_pedido` (
  `cod_pedido` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `preco_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`cod_pedido`, `cod_produto`, `cod_cliente`, `quantidade_produto`, `preco_produto`) VALUES
(69, 15, 14, 1, 123),
(69, 13, 14, 1, 213),
(69, 13, 14, 1, 213),
(69, 15, 14, 1, 123),
(69, 14, 14, 1, 465),
(69, 23, 14, 1, 123),
(69, 19, 14, 1, 1),
(69, 14, 14, 1, 465),
(69, 14, 14, 1, 465),
(70, 15, 14, 1, 123),
(71, 14, 14, 1, 465),
(71, 19, 14, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `cod_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cliente` int(11) NOT NULL,
  `status_pedido` text NOT NULL,
  `data_pedido` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_pedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cod_pedido`, `cod_cliente`, `status_pedido`, `data_pedido`) VALUES
(25, 14, 'Pedido Efetuado', '2017/22/11'),
(26, 14, 'Pedido Efetuado', '2017/22/11'),
(27, 14, 'Pedido Efetuado', '2017/22/11'),
(28, 14, 'Pedido Efetuado', '2017/22/11'),
(29, 14, 'Pedido Efetuado', '2017/22/11'),
(30, 14, 'Pedido Efetuado', '2017/22/11'),
(31, 14, 'Pedido Efetuado', '2017/22/11'),
(32, 14, 'Pedido Efetuado', '2017/22/11'),
(33, 14, 'Pedido Efetuado', '2017/22/11'),
(34, 14, 'Pedido Efetuado', '2017/22/11'),
(35, 14, 'Pedido Efetuado', '2017/22/11'),
(36, 14, 'Pedido Efetuado', '2017/22/11'),
(37, 14, 'Pedido Efetuado', '2017/22/11'),
(38, 14, 'Pedido Efetuado', '2017/22/11'),
(39, 14, 'Pedido Efetuado', '2017/22/11'),
(40, 14, 'Pedido Efetuado', '2017/22/11'),
(41, 14, 'Pedido Efetuado', '2017/22/11'),
(42, 14, 'Pedido Efetuado', '2017/22/11'),
(43, 14, 'Pedido Efetuado', '2017/22/11'),
(44, 14, 'Pedido Efetuado', '2017/22/11'),
(45, 14, 'Pedido Efetuado', '2017/22/11'),
(46, 14, 'Pedido Efetuado', '2017/22/11'),
(47, 14, 'Pedido Efetuado', '2017/22/11'),
(48, 14, 'Pedido Efetuado', '2017/22/11'),
(49, 14, 'Pedido Efetuado', '2017/22/11'),
(50, 14, 'Pedido Efetuado', '2017/22/11'),
(51, 14, 'Pedido Efetuado', '2017/22/11'),
(52, 14, 'Pedido Efetuado', '2017/22/11'),
(53, 14, 'Pedido Efetuado', '2017/22/11'),
(54, 14, 'Pedido Efetuado', '2017/22/11'),
(55, 14, 'Pedido Efetuado', '2017/22/11'),
(56, 14, 'Pedido Efetuado', '2017/22/11'),
(57, 14, 'Pedido Efetuado', '2017/22/11'),
(58, 14, 'Pedido Efetuado', '2017/22/11'),
(59, 14, 'Pedido Efetuado', '2017/22/11'),
(60, 14, 'Pedido Efetuado', '2017/18/11'),
(61, 14, 'Pedido Efetuado', '2017/18/11'),
(62, 14, 'Pedido Efetuado', '2017/18/11'),
(63, 14, 'Pedido Efetuado', '2017/18/11'),
(64, 14, 'Pedido Efetuado', '2017/18/11'),
(65, 14, 'Pedido Efetuado', '2017/18/11'),
(66, 14, 'Pedido Efetuado', '2017/18/11'),
(67, 14, 'Pedido Efetuado', '2017/18/11'),
(68, 14, 'Pedido Efetuado', '2017/18/11'),
(69, 14, 'Pedido Efetuado', '2017/18/11'),
(70, 14, 'Pedido Efetuado', '2017/18/11'),
(71, 14, 'Pedido Efetuado', '2017/18/11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `diretorio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `foto_produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade_produto` int(5) NOT NULL,
  `preco_produto` int(5) NOT NULL,
  `detalhes_produto` text COLLATE utf8_unicode_ci NOT NULL,
  `info_adicionais` text COLLATE utf8_unicode_ci NOT NULL,
  `tag_produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `diretorio`, `foto_produto`, `nome_produto`, `quantidade_produto`, `preco_produto`, `detalhes_produto`, `info_adicionais`, `tag_produto`) VALUES
(27, 'admin/produtos/uploads/', 'mulhermaravilha.jpg', 'Mulher Maravilha', 50, 49, 'Camiseta feita com 100% de algodÃ£o, a melhor do mercado ', 'Tamanho Ãºnico', 'MM, Mulher Maravilha, WW, Mulher'),
(28, 'admin/produtos/uploads/', 'dvsw-(Branca).jpg', 'Deadpool vs Wolverine ', 50, 49, 'Camiseta feita com 100% de algodÃ£o, a melhor do mercado ', 'Tamanho Ãºnico', 'Deadpool, Wolverine'),
(29, 'admin/produtos/uploads/', 'Camiseta-13(Branca).jpg', 'Vader Christ ', 50, 49, 'Camiseta feita com 100% de algodÃ£o, a melhor do mercado ', 'Tamanho Ãºnico', 'darth, vader, cristo '),
(30, 'admin/produtos/uploads/', 'Caneca-2.png', 'Caneca Jon Snow', 50, 29, 'Caneca personalizada ', 'Caneca em CerÃ¢mica Branca de 325ml. ', 'Caneca, Jon, Snow'),
(31, 'admin/produtos/uploads/', 'Caneca-5.png', 'Caneca The Flash', 50, 29, 'Caneca personalizada ', 'Caneca em CerÃ¢mica Branca de 325ml. ', 'The Flash, Caneca, Flash'),
(32, 'admin/produtos/uploads/', 'aaaaaa.png', 'Colar Supernatural', 50, 15, 'Pingente de aÃ§o. CordÃ£o de tecido ', 'CordÃ£o: 40cm Pingente: 2cm', 'Colar, Supernatural'),
(33, 'admin/produtos/uploads/', 'D_Q_NP_967611-MLB20601426993_022016-Q.jpg', 'Colar Stark', 50, 15, 'Corrente e pingente feito em aÃ§o', 'Corrente: 40cm. Pingente: 5 Cm', 'Stark, colar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_temp`
--

CREATE TABLE IF NOT EXISTS `user_temp` (
  `cod_cliente_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente_temp` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_cliente_temp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Extraindo dados da tabela `user_temp`
--

INSERT INTO `user_temp` (`cod_cliente_temp`, `nome_cliente_temp`) VALUES
(1, 'cliente'),
(31, '2'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35'),
(36, '36'),
(37, '37'),
(38, '38'),
(39, '39'),
(40, '40'),
(41, '41'),
(42, '42'),
(43, '43'),
(44, '44'),
(45, '45'),
(46, '46'),
(47, '47'),
(48, '48'),
(49, '49'),
(50, '50'),
(51, '51'),
(52, '52'),
(53, '53'),
(54, '54'),
(55, '55'),
(56, '56'),
(57, '57'),
(58, '58'),
(59, '59'),
(60, '60'),
(61, '61');
