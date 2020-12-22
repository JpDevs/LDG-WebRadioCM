-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2020 às 15:58
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
-- Banco de dados: `ldg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `Id` int(75) NOT NULL,
  `Img_URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`Id`, `Img_URL`) VALUES
(0, 'http://localhost/img/600x100.png'),
(1, 'http://localhost/img/200x550.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Musica` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`ID`, `Nome`, `Email`, `Musica`) VALUES
(0000000001, 'JohnDoe', 'jd@ldg.com.br', 'Pisadinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `radio_settings`
--

CREATE TABLE `radio_settings` (
  `ID` int(2) UNSIGNED ZEROFILL NOT NULL,
  `shoutcast_url` varchar(255) NOT NULL,
  `centova_url` varchar(255) NOT NULL,
  `centova_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `radio_settings`
--

INSERT INTO `radio_settings` (`ID`, `shoutcast_url`, `centova_url`, `centova_login`) VALUES
(01, 'http://192.99.4.205:8432/;', 'http://stream.jpdevs.host:2199/', 'radiole1');

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
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `auth_key` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `site_settings`
--

INSERT INTO `site_settings` (`id`, `titulo`, `logo`, `background`, `auth_key`) VALUES
(01, 'Rádio Level', './img/logo.png', './img/bg.png', 'null');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Area` set('radio','marketing') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`ID`, `Nome`, `Email`, `Area`) VALUES
(0000000001, 'JohnDoe', 'jd@lgd.com.br', 'radio');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`Id`,`Img_URL`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `radio_settings`
--
ALTER TABLE `radio_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`Instagram`,`Twitter`,`GooglePlay`);

--
-- Índices para tabela `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `radio_settings`
--
ALTER TABLE `radio_settings`
  MODIFY `ID` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
