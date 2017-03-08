-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Mar-2017 às 06:07
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercadorias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadoria`
--

CREATE TABLE `mercadoria` (
  `cod` int(11) NOT NULL,
  `tipom` varchar(40) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `tipon` varchar(40) NOT NULL,
  `cli` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mercadoria`
--

INSERT INTO `mercadoria` (`cod`, `tipom`, `nome`, `qtd`, `preco`, `tipon`, `cli`, `email`) VALUES
(1, 'periférico', 'teclado', 1, 50.00, 'Venda', 'Luciana', 'Lucy_cullen@outlook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercadoria`
--
ALTER TABLE `mercadoria`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercadoria`
--
ALTER TABLE `mercadoria`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
