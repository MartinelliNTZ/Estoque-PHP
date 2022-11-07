-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 22:14
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
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `fornecedor` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estoque_compra`
--

INSERT INTO `estoque_compra` (`id`, `data`, `quantidade`, `fornecedor`, `valorUnitario`) VALUES
(0000000003, '2022-11-03', 10, NULL, '0.00'),
(0000000004, '2022-11-03', 15, 'Mario', '126.00'),
(0000000005, '2022-11-03', 18, 'Mario', '78787.00'),
(0000000006, '2022-11-03', 78, 'M', '79.00'),
(0000000007, '2022-11-03', 89, 'M', '135.78'),
(0000000008, '2022-11-03', 89, 'M', '135.78'),
(0000000009, '2022-11-03', 89, 'M', '135.78'),
(0000000010, '2022-11-03', 89, 'M', '135.78'),
(0000000011, '2022-11-03', 89, 'M', '135.78'),
(0000000012, '2022-11-03', 89, 'M', '135.78'),
(0000000013, '2022-11-03', 78, 'MK', '7.89'),
(0000000014, '2022-11-03', 78, 'MK', '7.89'),
(0000000015, '2022-11-03', 582, 'MI Electrics', '112.89'),
(0000000016, '2022-11-03', 582, 'MI Electrics', '112.89'),
(0000000017, '2022-11-03', 582, 'MI Electrics', '112.89'),
(0000000018, '2022-11-03', 582, 'MI Electrics', '112.89');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_venda`
--

CREATE TABLE `estoque_venda` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estoque_venda`
--

INSERT INTO `estoque_venda` (`id`, `data`, `quantidade`, `cliente`, `valorUnitario`) VALUES
(0000000026, '2022-11-03', 4, NULL, '0.00'),
(0000000027, '2022-11-03', 4, NULL, '0.00'),
(0000000028, '2022-11-03', 4, NULL, '0.00'),
(0000000029, '2022-11-03', 4, NULL, '0.00'),
(0000000030, '2022-11-03', 4, NULL, '0.00'),
(0000000031, '2022-11-03', 4, NULL, '0.00'),
(0000000032, '2022-11-03', 4, NULL, '0.00'),
(0000000033, '2022-11-03', 4, NULL, '0.00'),
(0000000034, '2022-11-03', 4, 'T', '38.00'),
(0000000035, '2022-11-03', 4, 'T', '38.00'),
(0000000036, '2022-11-03', 18, 'T', '38.00'),
(0000000037, '2022-11-03', 18, 'T', '38.00'),
(0000000038, '2022-11-03', 18, 'T', '38.00'),
(0000000039, '2022-11-03', 7, 'T', '38.00'),
(0000000040, '2022-11-03', 7, 'MM', '789.00'),
(0000000041, '2022-11-03', 7, 'MM', '789.00'),
(0000000042, '2022-11-03', 7, 'MM', '789.00');

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
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `estoque_venda`
--
ALTER TABLE `estoque_venda`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
