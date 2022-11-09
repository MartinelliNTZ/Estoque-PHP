-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2022 às 15:43
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_compra`
--

CREATE TABLE `estoque_compra` (
  `id` int UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `fornecedor` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estoque_compra`
--

INSERT INTO `estoque_compra` (`id`, `data`, `quantidade`, `fornecedor`, `valorUnitario`) VALUES
(4, '2022-11-03', 15, 'Mario', '126.00'),
(5, '2022-11-03', 18, 'Mario', '87.00'),
(6, '2022-11-01', 1500, 'M', '79.00'),
(7, '2022-11-03', 89, 'M', '135.78'),
(8, '2022-11-03', 89, 'M', '135.78'),
(9, '2022-11-03', 89, 'M', '135.78'),
(10, '2022-11-03', 89, 'M', '135.78'),
(11, '2022-11-03', 89, 'M', '135.78'),
(12, '2022-11-03', 89, 'M', '135.78'),
(13, '2022-11-03', 78, 'MK', '177.89'),
(15, '2022-11-03', 582, 'MI Electrics', '112.89'),
(16, '2022-11-03', 582, 'MI Electrics', '112.89'),
(17, '2022-11-03', 582, 'MI Electrics', '112.89'),
(18, '2022-11-03', 582, 'MI Electrics', '112.89'),
(19, '2022-11-08', 9000, 'Xima', '97.00'),
(20, '2022-11-08', 1500, 'Black Friday', '75.00'),
(21, '2022-11-09', 50, 'gg', '77.00'),
(22, '2022-11-09', 50, 'gg', '77.00'),
(23, '2022-11-09', 800, 'Tivira', '90.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_venda`
--

CREATE TABLE `estoque_venda` (
  `id` int UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estoque_venda`
--

INSERT INTO `estoque_venda` (`id`, `data`, `quantidade`, `cliente`, `valorUnitario`) VALUES
(26, '2022-10-01', 2500, 'Pedro Gas', '150.66'),
(27, '2022-11-03', 40, 'TY', '400.00'),
(28, '2022-11-01', 400, 'TY', '200.00'),
(29, '2022-11-03', 4000, 'PI', '180.00'),
(33, '2022-11-03', 4, 'gg', '200.00'),
(34, '2022-11-03', 4, 'T', '38.00'),
(35, '2022-11-03', 4, 'T', '38.00'),
(36, '2022-11-03', 18, 'T', '38.00'),
(37, '2022-11-03', 18, 'T', '38.00'),
(38, '2022-11-03', 18, 'T', '38.00'),
(39, '2022-11-03', 7, 'T', '38.00'),
(40, '2022-11-03', 7, 'MM', '789.00'),
(41, '2022-11-03', 7, 'MM', '789.00'),
(42, '2022-11-03', 7, 'MM', '789.00'),
(43, '2022-11-08', 3000, 'UltraGasz', '150.00'),
(44, '2022-11-08', 1800, 'Otario', '280.00'),
(45, '2022-11-08', 1800, 'Otario', '280.00'),
(46, '2022-11-09', 2, 't', '189.00'),
(47, '2022-11-09', 12, 'TY', '261.00'),
(48, '2022-11-09', 1800, 'X', '220.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque_compra`
--
ALTER TABLE `estoque_compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque_venda`
--
ALTER TABLE `estoque_venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque_compra`
--
ALTER TABLE `estoque_compra`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `estoque_venda`
--
ALTER TABLE `estoque_venda`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
