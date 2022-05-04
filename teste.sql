-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Abr-2022 às 06:37
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

DROP TABLE IF EXISTS `teste`;
CREATE TABLE IF NOT EXISTS `teste` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `nascimento` date NOT NULL,
  `genero` enum('O','F','M') NOT NULL,
  `renda` varchar(15) NOT NULL,
  `lazer` varchar(5) NOT NULL,
  `investimento` varchar(5) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `celular` (`celular`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=8;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `sobrenome`, `email`, `celular`, `cpf`, `nascimento`, `genero`, `renda`, `lazer`, `investimento`, `senha`) VALUES
(6, 'teste', 'teste', 'teste@teste.com', '(11) 11111-1111', '111.111.111-11', '1111-11-11', 'O', '11.111,11', '11', '11', '$2y$10$qeG6eFBnxNFRmhAJ1Nmd.O1LPPkQxxjmFR4zy1cf6/6C9j6WGhKUS'),
(7, 'JUAN', 'FERREIRA', 'jplferreira27@gmail.com', '(27) 99908-3749', '128.921.777-74', '2003-07-02', 'M', '1.500,00', '10', '25', '$2y$10$x9SLUlnILJgDqkz2CvJb8.e2T6sH/NPOvORipStkcEwmuqOmoVTYe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
