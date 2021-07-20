-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2021 às 20:08
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetonovo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nome` varchar(50) NOT NULL,
  `cliente_sobrenome` varchar(50) NOT NULL,
  `cliente_cpf` varchar(20) NOT NULL,
  `cliente_endereco` varchar(100) NOT NULL,
  `cliente_cep` varchar(20) NOT NULL,
  `cliente_bairro` varchar(60) NOT NULL,
  `cliente_cidade` varchar(50) NOT NULL,
  `cliente_estado` varchar(50) NOT NULL,
  `cliente_email` varchar(100) NOT NULL,
  `cliente_telefone` varchar(50) NOT NULL,
  `cliente_login` varchar(50) NOT NULL,
  `cliente_senha` varchar(50) NOT NULL,
  `cliente_sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_nome`, `cliente_sobrenome`, `cliente_cpf`, `cliente_endereco`, `cliente_cep`, `cliente_bairro`, `cliente_cidade`, `cliente_estado`, `cliente_email`, `cliente_telefone`, `cliente_login`, `cliente_senha`, `cliente_sexo`) VALUES
(40, 'Nilson ', 'Jesus', '446546446', 'RuA F', '44710000', 'CENTRO', 'Serrolândia', 'BA', 'nylssondejesws@gmail.com', '74981284508', 'nilson', '102030', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `quant` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `statuscompra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `produto`, `quant`, `cliente`, `valor_total`, `statuscompra`) VALUES
(34, 'Pastel de Carne', 0, 'Bruno', 5, 'FECHADO'),
(35, 'Arroz e Feijão', 0, 'Bruno', 20, 'FECHADO'),
(36, 'Arroz e Feijão', 1, 'Bruno', 20, 'FECHADO'),
(37, 'Arroz e Feijão', 2, 'Bruno', 20, 'FECHADO'),
(38, 'Arroz e Feijão', 1, 'Bruno', 20, 'FECHADO'),
(39, 'Pastel de Carne', 1, 'Bruno', 5, 'FECHADO'),
(40, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(41, 'Arroz e Feijão', 10, 'Bruno', 20, 'FECHADO'),
(42, 'Arroz e Feijão', 1, 'Bruno', 20, 'FECHADO'),
(43, 'Arroz e Feijão', 10, 'Bruno', 20, 'FECHADO'),
(44, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(45, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(46, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(47, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(48, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(49, 'Arroz e Feijão', 10, 'Bruno', 20, 'FECHADO'),
(50, 'Arroz e Feijão', 10, 'Bruno', 20, 'FECHADO'),
(51, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(52, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(53, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(54, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(55, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(56, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(57, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(58, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(59, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(60, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(61, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(62, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(63, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(64, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(65, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(66, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(67, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(68, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(69, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(70, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(71, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(72, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(73, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(74, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(75, 'Pastel de Queijo', 36, 'Bruno', 5, 'FECHADO'),
(76, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(77, 'Pastel de Frango', 40, 'Bruno', 5, 'FECHADO'),
(78, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(79, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO'),
(80, 'Pastel de Carne', 5, 'Bruno', 5, 'FECHADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `situacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `nome`, `preco`, `quantidade`, `cliente`, `tipo`, `situacao`) VALUES
(8, 'Pastel de Frango', '5', '40', 'Bruno', 'um lanche', 'FECHADO'),
(9, 'Pastel de Carne', '5', '5', 'Bruno', 'um lanche', 'FECHADO'),
(10, 'Pastel de Queijo', '5', '36', 'Bruno', 'Lanche', 'FECHADO'),
(11, 'Pastel de Frango', '5', '40', 'Bruno', 'um lanche', 'FECHADO'),
(12, 'Pastel de Frango', '5', '40', 'Bruno', 'um lanche', 'FECHADO'),
(13, 'Pastel de Carne', '5', '5', 'Bruno', 'um lanche', 'FECHADO'),
(14, 'Pastel de Carne', '5', '5', 'Bruno', 'um lanche', 'FECHADO'),
(15, 'Pastel de Carne', '5', '5', 'Bruno', 'um lanche', 'FECHADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(50) NOT NULL,
  `produto_tipo` varchar(50) NOT NULL,
  `produto_quant` decimal(10,0) NOT NULL,
  `produto_valor` decimal(10,0) NOT NULL,
  `produto_situacao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `produto_nome`, `produto_tipo`, `produto_quant`, `produto_valor`, `produto_situacao`) VALUES
(7, 'Pizza', 'um lanche', '100', '1000', 'é uma pizza mista'),
(8, 'Arroz e Feijão', 'um lanche', '10', '20', 'Para o almoco'),
(10, 'Pastel de Carne', 'um lanche', '5', '5', 'Pastel feito de carne'),
(111, 'Pastel de Queijo', 'Lanche', '36', '5', 'Pastel feito de queijo'),
(112, 'Pastel de Frango', 'um lanche', '40', '5', 'Pastel feito na hora'),
(113, '', '', '0', '0', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `cartao` varchar(50) NOT NULL,
  `datacartao` varchar(50) NOT NULL,
  `seguranca` varchar(50) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatorio`
--

INSERT INTO `relatorio` (`id`, `cliente`, `cartao`, `datacartao`, `seguranca`, `parcelas`, `produto`, `valor`) VALUES
(30, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(31, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(32, 'Bruno', '', '', '', 0, 'Pastel de Queijo', 5),
(33, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(34, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(35, 'Bruno', '1231231236454', '1990-04-15', '252', 1, 'Arroz e Feijão', 20),
(36, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(37, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(38, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(39, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(40, 'Bruno', '12123132132123', '', '252', 3, 'Pastel de Carne', 5),
(41, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(42, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(43, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(44, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(45, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(46, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(47, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(48, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(49, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(50, 'Bruno', '', '', '', 0, 'Arroz e Feijão', 20),
(51, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(52, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(53, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(54, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(55, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(56, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(57, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(58, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(59, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(60, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(61, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(62, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(63, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(64, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(65, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(66, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(67, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(68, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(69, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(70, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(71, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(72, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(73, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(74, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(75, 'Bruno', '', '', '', 0, 'Pastel de Carne', 5),
(76, 'Bruno', '', '', '', 0, 'Pastel de Queijo', 5),
(77, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(78, 'Bruno', '', '', '', 0, 'Pastel de Frango', 5),
(79, 'Bruno', '123132123132', '2000-04-15', '222', 1, 'Pastel de Carne', 5),
(80, 'Bruno', '3123121212', '', '1231', 1, 'Pastel de Carne', 5),
(81, 'Bruno', '1321321325646', '', '1231', 1, 'Pastel de Carne', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`);

--
-- Índices para tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
