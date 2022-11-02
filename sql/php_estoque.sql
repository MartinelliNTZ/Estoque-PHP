-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2022 às 01:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

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
  `data` int(10) NOT NULL,
  `quantidade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_compra`
--

INSERT INTO `estoque_compra` (`id`, `data`, `quantidade`) VALUES
(0000000001, 2022, 38),
(0000000002, 2022, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_venda`
--

CREATE TABLE `estoque_venda` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(30) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_venda`
--

INSERT INTO `estoque_venda` (`id`, `data`, `quantidade`) VALUES
(0000000001, '2022-11-01', 15),
(0000000002, '2022-11-01', 85),
(0000000003, '2022-11-01', 65),
(0000000004, '2022-11-01', 88);

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
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estoque_venda`
--
ALTER TABLE `estoque_venda`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
