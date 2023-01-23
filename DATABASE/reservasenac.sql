-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2023 às 01:30
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reservasenac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dia` date NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Acionadores `agendamentos`
--
DELIMITER $$
CREATE TRIGGER `verifica_disponibilidade` BEFORE INSERT ON `agendamentos` FOR EACH ROW IF(NEW.id_sala NOT IN (SELECT * FROM agendamentos)) THEN
	INSERT INTO `agendamentos`(id_sala,id_usuario,dia,inicio,fim)VALUES(NEW.id_sala,NEW.id_usuario,NEW.dia,NEW.inicio,NEW.fim);
    
ELSEIF(NEW.dia NOT IN (SELECT * FROM agendamentos WHERE id_sala = NEW.id_sala)) THEN
	INSERT INTO `agendamentos`(id_sala,id_usuario,dia,inicio,fim)VALUES(NEW.id_sala,NEW.id_usuario,NEW.dia,NEW.inicio,NEW.fim);
    
ELSEIF(NEW.id_sala NOT IN (SELECT id_sala FROM agendamentos WHERE inicio <= NEW.inicio AND fim >= NEW.inicio AND id_sala = NEW.id_sala AND dia = NEW.dia) AND NEW.id_sala NOT IN (SELECT id_sala FROM agendamentos WHERE inicio <= NEW.fim AND fim >= NEW.fim AND id_sala = NEW.id_sala AND dia = NEW.dia)) THEN
	INSERT INTO `agendamentos`(id_sala,id_usuario,dia,inicio,fim)VALUES(NEW.id_sala,NEW.id_usuario,NEW.dia,NEW.inicio,NEW.fim);
ELSE
	INSERT INTO `espera`(id_sala,id_usuario,dia,inicio,fim) VALUES (NEW.id_sala,NEW.id_usuario,NEW.dia,NEW.inicio,NEW.fim);
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `espera`
--

CREATE TABLE `espera` (
  `id` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dia` date NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `computador` int(2) NOT NULL,
  `computador_prof` int(2) NOT NULL,
  `monitor` int(2) NOT NULL,
  `mouse` int(2) NOT NULL,
  `teclado` int(2) NOT NULL,
  `mesa` int(2) NOT NULL,
  `cadeira` int(2) NOT NULL,
  `televisao` int(2) NOT NULL,
  `ar_condicionado` int(2) NOT NULL,
  `controle_ar` int(2) NOT NULL,
  `data_show` int(2) NOT NULL,
  `apagador` int(2) NOT NULL,
  `canetao_azul` int(2) NOT NULL,
  `canetao_vermelho` int(2) NOT NULL,
  `canetao_preto` int(2) NOT NULL,
  `webcam` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inventario`
--

INSERT INTO `inventario` (`id`, `id_sala`, `computador`, `computador_prof`, `monitor`, `mouse`, `teclado`, `mesa`, `cadeira`, `televisao`, `ar_condicionado`, `controle_ar`, `data_show`, `apagador`, `canetao_azul`, `canetao_vermelho`, `canetao_preto`, `webcam`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `numero` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `andar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id`, `numero`, `nome`, `andar`) VALUES
(1, 305, 'Laboratorio de Informatica', 3),
(2, 302, 'Laboratorio de montagem e manutencao de hardware', 3);

--
-- Acionadores `salas`
--
DELIMITER $$
CREATE TRIGGER `new_sala` AFTER INSERT ON `salas` FOR EACH ROW INSERT INTO `inventario`(
	id_sala,
    computador,
    computador_prof,
    monitor,
    mouse,
    teclado,
    mesa,
    cadeira,
    televisao,
    ar_condicionado,
    controle_ar,
    data_show,
    apagador,
    canetao_azul,
    canetao_vermelho,
    canetao_preto,
    webcam
) VALUES(
	NEW.id,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varbinary(255) NOT NULL,
  `email` varbinary(255) NOT NULL,
  `maticula` varbinary(255) NOT NULL,
  `senha` varbinary(255) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `permissao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `espera`
--
ALTER TABLE `espera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Índices para tabela `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `maticula` (`maticula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `espera`
--
ALTER TABLE `espera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `espera`
--
ALTER TABLE `espera`
  ADD CONSTRAINT `espera_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id`),
  ADD CONSTRAINT `espera_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id`),
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
