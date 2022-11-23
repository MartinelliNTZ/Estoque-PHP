/**

*/
CREATE database php_estoque;
use php_estoque;

CREATE TABLE `estoque_compra` (
  `id` int UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `fornecedor` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) UNSIGNED NOT NULL
) ;


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

CREATE TABLE `estoque_venda` (
  `id` int UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `quantidade` int UNSIGNED NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `valorUnitario` decimal(20,2) NOT NULL
);

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


ALTER TABLE `estoque_compra`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `estoque_venda`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `estoque_compra`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE `estoque_venda`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

