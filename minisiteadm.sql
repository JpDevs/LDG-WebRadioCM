-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2020 às 05:55
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `minisiteadm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `Id` int(75) NOT NULL,
  `Img_URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`Id`, `Img_URL`) VALUES
(0, 'http://localhost/img/600x100.png'),
(1, 'http://localhost/img/200x550.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `radio_configs`
--

CREATE TABLE `radio_configs` (
  `id` int(75) NOT NULL,
  `shoutcast_url` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `porta` varchar(75) NOT NULL,
  `login_centova` varchar(255) NOT NULL,
  `link_centovacast` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `radio_configs`
--

INSERT INTO `radio_configs` (`id`, `shoutcast_url`, `ip`, `porta`, `login_centova`, `link_centovacast`) VALUES
(0, 'http://192.99.4.205:8047/;', 'ip', 'porta', 'radiotop', 'http://stream.jpdevs.host:2199/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Twitter` varchar(255) NOT NULL,
  `GooglePlay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `redes_sociais`
--

INSERT INTO `redes_sociais` (`id`, `Instagram`, `Twitter`, `GooglePlay`) VALUES
(0, 'https://instagram.com', 'https://twitter.com', 'https://play.google.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_settings`
--

CREATE TABLE `site_settings` (
  `Id` int(75) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `Altura` int(255) NOT NULL,
  `Largura` int(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `site_settings`
--

INSERT INTO `site_settings` (`Id`, `logourl`, `Altura`, `Largura`, `background`, `titulo`) VALUES
(0, 'http://localhost/painel/images/jpdevspanel.png', 100, 200, '#404040', 'Rádio Top Emoção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(2) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`) VALUES
(01, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`Id`,`Img_URL`);

--
-- Índices para tabela `radio_configs`
--
ALTER TABLE `radio_configs`
  ADD PRIMARY KEY (`ip`,`porta`);

--
-- Índices para tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`Instagram`,`Twitter`,`GooglePlay`);

--
-- Índices para tabela `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`Id`,`logourl`,`background`,`titulo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
