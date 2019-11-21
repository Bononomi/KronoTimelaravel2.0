-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 00:38
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kronodb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronometragem`
--

CREATE TABLE `cronometragem` (
  `codCro` int(11) NOT NULL,
  `codEle` int(11) NOT NULL,
  `codTom` int(11) NOT NULL,
  `tempo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

CREATE TABLE `elemento` (
  `codEle` int(11) NOT NULL,
  `codOp` int(11) NOT NULL,
  `nomeEle` varchar(60) NOT NULL,
  `ritmo` double NOT NULL,
  `interferencia` double NOT NULL,
  `concessao` double NOT NULL,
  `qntVezes` int(11) NOT NULL,
  `porPeca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE `operacao` (
  `codOp` int(11) NOT NULL,
  `nomeOp` varchar(60) NOT NULL,
  `codPro` int(11) NOT NULL,
  `maquinaOp` varchar(120) NOT NULL,
  `tipoEstudoOp` varchar(120) NOT NULL,
  `cronometrista` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codPro` int(11) NOT NULL,
  `nomPro` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codPro`, `nomPro`) VALUES
(1, 'Toalha'),
(2, 'Lençol');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tomada_tempo`
--

CREATE TABLE `tomada_tempo` (
  `codTom` int(11) NOT NULL,
  `codOp` int(11) NOT NULL,
  `dataTom` datetime NOT NULL,
  `numLeitura` int(20) NOT NULL,
  `turnoTom` varchar(45) NOT NULL,
  `operadorTom` varchar(120) NOT NULL,
  `obsTom` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsu` int(11) NOT NULL,
  `emailUsu` varchar(120) NOT NULL,
  `senhaUsu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cronometragem`
--
ALTER TABLE `cronometragem`
  ADD PRIMARY KEY (`codCro`,`codEle`,`codTom`),
  ADD KEY `fk_Cronometragem_Elemento1` (`codEle`),
  ADD KEY `fk_Cronometragem_Tomada_Tempo1` (`codTom`);

--
-- Índices para tabela `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`codEle`,`codOp`),
  ADD KEY `fk_Elemento_Operacao1` (`codOp`);

--
-- Índices para tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`codOp`,`codPro`),
  ADD KEY `fk_Operacao_Produto` (`codPro`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codPro`);

--
-- Índices para tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  ADD PRIMARY KEY (`codTom`,`codOp`),
  ADD KEY `fk_Tomada_Tempo_Operacao1` (`codOp`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `elemento`
--
ALTER TABLE `elemento`
  MODIFY `codEle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `codOp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  MODIFY `codTom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cronometragem`
--
ALTER TABLE `cronometragem`
  ADD CONSTRAINT `fk_Cronometragem_Elemento1` FOREIGN KEY (`codEle`) REFERENCES `elemento` (`codEle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cronometragem_Tomada_Tempo1` FOREIGN KEY (`codTom`) REFERENCES `tomada_tempo` (`codTom`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_Elemento_Operacao1` FOREIGN KEY (`codOp`) REFERENCES `operacao` (`codOp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `operacao`
--
ALTER TABLE `operacao`
  ADD CONSTRAINT `fk_Operacao_Produto` FOREIGN KEY (`codPro`) REFERENCES `produto` (`codPro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  ADD CONSTRAINT `fk_Tomada_Tempo_Operacao1` FOREIGN KEY (`codOp`) REFERENCES `operacao` (`codOp`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
