-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2017 às 23:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `idEmprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `leitor` varchar(30) NOT NULL,
  `livro` varchar(30) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEmprestimo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`idEmprestimo`, `leitor`, `livro`, `data`) VALUES
(1, '1', '7', '2017-09-13 23:38:13'),
(2, '1', '1', '2017-09-14 01:27:12'),
(3, '1', '2', '2017-09-14 01:27:35'),
(4, '1', '3', '2017-09-14 01:27:53'),
(5, '1', '6', '2017-09-14 01:35:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `nome`, `foto`) VALUES
(1, 'Teste', '1496964674.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE IF NOT EXISTS `leitor` (
  `idLeitor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idLeitor`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nome_2` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`idLeitor`, `nome`, `telefone`, `email`) VALUES
(1, 'Gabriel de Macedo Silva', '9999-9999', 'gabriel@demacedo.silva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `idLivro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `editora` varchar(25) CHARACTER SET latin1 NOT NULL,
  `autor` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idLivro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`idLivro`, `nome`, `editora`, `autor`) VALUES
(1, '72 Horas para Morrer', 'Novo SÃ©culo', 'Ricardo Ragazzo'),
(2, 'AlÃ´, CHICS!', 'Ediouro', 'Gloria Kalil'),
(3, 'As Aventuras de Huckleberry Finn', 'Brasiliense', 'Mark Twain'),
(4, 'Aprenda a Operar no Mercado de aÃ§Ãµes', 'Elsevier', 'John Wiley'),
(5, 'Malcom X uma vida de reinvenÃ§Ãµes', 'Viking Press', 'Manning Marable'),
(6, 'Autobiografia de Malcolm X', 'Alex Haley', 'Malcolm X, Alex Haley'),
(7, 'Dreams from My Father', ' Times Books Three Rivers', 'Barack Obama'),
(8, 'Da PrÃ³xima Vez, O Fogo - Racismo nos EUA', 'Dial Press', 'James Baldwin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `foto`) VALUES
(3, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1505158988.jpg'),
(5, 'admin', 'admin2', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user.jpg'),
(7, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
