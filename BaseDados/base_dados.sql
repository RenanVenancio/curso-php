-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Ago-2018 às 15:10
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `meus_produtos`
--

DROP TABLE IF EXISTS `meus_produtos`;
CREATE TABLE IF NOT EXISTS `meus_produtos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(50) DEFAULT NULL,
  `preco_compra` double(10,2) DEFAULT '0.00',
  `preco_venda` double(10,2) DEFAULT '0.00',
  `unid_medida` varchar(5) DEFAULT 'UN',
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `meus_produtos`
--

INSERT INTO `meus_produtos` (`id_prod`, `nome_prod`, `preco_compra`, `preco_venda`, `unid_medida`) VALUES
(1, 'BANANA', 1.25, 2.29, 'UN'),
(2, 'LARANJA', 0.85, 1.20, 'UN'),
(6, 'COENTRO', 4.15, 8.89, 'UN'),
(7, 'MELAO', 3.16, 4.87, 'UN'),
(8, 'AIPIM', 9.15, 10.00, 'UN'),
(13, 'KIBE', 1.05, 2.22, 'UN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
