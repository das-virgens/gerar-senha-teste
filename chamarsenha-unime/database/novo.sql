-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para chamarsenha
CREATE DATABASE IF NOT EXISTS `chamarsenha` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `chamarsenha`;

-- Copiando estrutura para tabela chamarsenha.coordenadores
CREATE TABLE IF NOT EXISTS `coordenadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `coord` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cursos` text NOT NULL,
  `username` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela chamarsenha.coordenadores: ~8 rows (aproximadamente)
INSERT IGNORE INTO `coordenadores` (`id`, `foto`, `coord`, `status`, `name`, `cursos`, `username`) VALUES
	(1, 'images/victor.png', 'victor', 'DISPONIVEL', 'Victor', 'EAD - 100% ONLINE, EAD - SEMIPRESENCIAL', 'victor'),
	(2, 'images/thamyris.png', 'pyCheck', 'DISPONIVEL', 'Thamyris', 'ODONTOLOGIA - PRESENCIAL', 'thamyris'),
	(3, 'images/osmundo.png', 'osmundoCheck', 'DISPONIVEL', 'Osmundo', 'ADMINISTRAÇÃO - PRESENCIAL, C COMPUTAÇÃO - PRESENCIAL, DIREITO - PRESENCIAL', 'osmundo'),
	(4, 'images/lucas.png', 'LucasCheck', 'DISPONIVEL', 'Lucas', 'NUTRIÇÃO - PRESENCIAL', 'lucas'),
	(5, 'images/jose.png', 'joseCheckCoord', 'INDISPONIVEL', 'José Gustavo', 'COORDENADOR ACADEMICO', 'jose'),
	(6, 'images/jack.png', 'jackCheck', 'DISPONIVEL', 'Jackeline', 'ENFERMAGEM - PRESENCIAL, FARMÁCIA - PRESENCIAL', 'jackeline'),
	(7, 'images/dani.png', 'joseCheck', 'DISPONIVEL', 'Daniela', 'EDUCAÇÃO FÍSICA - PRESENCIAL, FISIOTERAPIA - PRESENCIAL, PSICOLOGIA - PRESENCIAL', 'daniela'),
	(8, 'images/bruno.png', 'brunoCheck', 'DISPONIVEL', 'Bruno', 'ARQUITETURA - Presencial,AGRONOMIA - Presencial,ENGENHARIAS - Presencial', 'bruno');

-- Copiando estrutura para tabela chamarsenha.horario_coord
CREATE TABLE IF NOT EXISTS `horario_coord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `segunda_inicio` time DEFAULT NULL,
  `segunda_fim` time DEFAULT NULL,
  `terca_inicio` time DEFAULT NULL,
  `terca_fim` time DEFAULT NULL,
  `quarta_inicio` time DEFAULT NULL,
  `quarta_fim` time DEFAULT NULL,
  `quinta_inicio` time DEFAULT NULL,
  `quinta_fim` time DEFAULT NULL,
  `sexta_inicio` time DEFAULT NULL,
  `sexta_fim` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela chamarsenha.horario_coord: ~8 rows (aproximadamente)
INSERT IGNORE INTO `horario_coord` (`id`, `username`, `segunda_inicio`, `segunda_fim`, `terca_inicio`, `terca_fim`, `quarta_inicio`, `quarta_fim`, `quinta_inicio`, `quinta_fim`, `sexta_inicio`, `sexta_fim`) VALUES
	(1, 'jose', '19:00:00', '21:30:00', '16:00:00', '20:30:00', '18:00:00', '21:30:00', '23:58:00', '23:59:00', '23:58:00', '23:59:00'),
	(2, 'thamyris', '19:00:00', '20:30:00', '18:00:00', '20:30:00', '18:00:00', '20:30:00', '11:00:00', '11:00:00', '23:58:00', '23:59:00'),
	(3, 'bruno', '19:00:00', '21:00:00', '15:00:00', '18:00:00', '19:00:00', '21:00:00', '18:00:00', '22:00:00', '11:00:00', '21:00:00'),
	(4, 'victor', '21:00:00', '21:00:00', '18:00:00', '21:00:00', '09:00:00', '21:00:00', '14:00:00', '21:00:00', '09:00:00', '20:00:00'),
	(5, 'osmundo', '18:00:00', '20:00:00', '19:00:00', '20:00:00', '23:58:00', '23:59:00', '18:00:00', '20:00:00', '23:58:00', '23:59:00'),
	(6, 'jack', '19:00:00', '21:00:00', '19:00:00', '21:00:00', '19:00:00', '21:00:00', '23:58:00', '23:59:00', '23:58:00', '23:59:00'),
	(7, 'lucas', '23:58:00', '23:59:00', '23:58:00', '23:59:00', '18:30:00', '21:50:00', '23:58:00', '23:59:00', '23:58:00', '23:59:00'),
	(8, 'daniela', '08:00:00', '21:00:00', '18:00:00', '21:00:00', '09:00:00', '21:00:00', '23:58:00', '21:00:00', '23:58:00', '23:58:00');

-- Copiando estrutura para tabela chamarsenha.senhas
CREATE TABLE IF NOT EXISTS `senhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `coordenador` varchar(255) DEFAULT NULL,
  `data_geracao` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela chamarsenha.senhas: ~7 rows (aproximadamente)
INSERT IGNORE INTO `senhas` (`id`, `numero`, `coordenador`, `data_geracao`) VALUES
	(6, 0, 'Jackeline', '2024-03-27 22:33:09'),
	(7, 9, 'Bruno', '2024-03-27 23:03:03'),
	(8, 0, 'Osmundo', '2024-04-01 21:59:29'),
	(9, 10, 'Victor', '2024-04-01 22:46:58'),
	(10, 0, 'Daniela', '2024-04-01 23:14:59'),
	(11, 0, 'Thamirys', '2024-04-01 23:29:58'),
	(12, 0, 'Lucas', '2024-04-10 21:41:59');

-- Copiando estrutura para tabela chamarsenha.senhas_chamadas
CREATE TABLE IF NOT EXISTS `senhas_chamadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coordenador` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela chamarsenha.senhas_chamadas: ~128 rows (aproximadamente)
INSERT IGNORE INTO `senhas_chamadas` (`id`, `coordenador`, `senha`, `data_hora`) VALUES
	(100, 'victor', '1', '2024-04-01 23:09:44'),
	(101, 'victor', '2', '2024-04-01 23:14:24'),
	(102, 'victor', '3', '2024-04-01 23:14:24'),
	(103, 'victor', '4', '2024-04-01 23:14:24'),
	(104, 'victor', '5', '2024-04-01 23:14:24'),
	(105, 'victor', '6', '2024-04-01 23:14:25'),
	(106, 'victor', '7', '2024-04-01 23:14:25'),
	(107, 'victor', '8', '2024-04-01 23:14:26'),
	(108, 'victor', '9', '2024-04-01 23:14:27'),
	(109, 'victor', '1', '2024-04-08 22:35:51'),
	(110, 'victor', '2', '2024-04-08 22:35:51'),
	(111, 'victor', '3', '2024-04-08 22:44:28'),
	(112, 'victor', '4', '2024-04-08 22:46:01'),
	(113, 'victor', '5', '2024-04-08 23:14:55'),
	(114, 'victor', '6', '2024-04-08 23:19:24'),
	(115, 'victor', '7', '2024-04-08 23:21:42'),
	(116, 'victor', '8', '2024-04-08 23:27:35'),
	(117, 'victor', '1', '2024-04-09 22:42:28'),
	(118, 'victor', '1', '2024-04-25 22:40:04'),
	(119, 'victor', '2', '2024-04-25 22:40:05'),
	(120, 'victor', '1', '2024-04-30 22:24:37'),
	(121, 'victor', '2', '2024-04-30 22:26:30'),
	(122, 'victor', '3', '2024-04-30 22:26:30'),
	(123, 'victor', '4', '2024-04-30 22:33:37'),
	(124, 'daniela', '1', '2024-04-30 22:45:47'),
	(125, 'daniela', '2', '2024-04-30 22:45:48'),
	(126, 'victor', '5', '2024-04-30 22:56:46'),
	(127, 'victor', '6', '2024-04-30 23:04:01'),
	(128, 'victor', '7', '2024-04-30 23:11:53'),
	(129, 'victor', '8', '2024-04-30 23:25:01'),
	(130, 'daniela', '3', '2024-04-30 23:31:34'),
	(131, 'victor', '9', '2024-04-30 23:34:25'),
	(132, 'victor', '10', '2024-04-30 23:38:15'),
	(133, 'victor', '1', '2024-05-02 22:16:07'),
	(134, 'victor', '2', '2024-05-02 22:19:03'),
	(135, 'osmundo', '1', '2024-05-02 22:21:17'),
	(136, 'osmundo', '2', '2024-05-02 22:21:33'),
	(137, 'osmundo', '3', '2024-05-02 22:21:39'),
	(138, 'osmundo', '4', '2024-05-02 22:21:43'),
	(139, 'osmundo', '5', '2024-05-02 22:39:54'),
	(140, 'victor', '1', '2024-05-07 23:48:16'),
	(141, 'victor', '2', '2024-05-07 23:48:16'),
	(142, 'victor', '3', '2024-05-07 23:48:16'),
	(143, 'victor', '4', '2024-05-07 23:48:17'),
	(144, 'victor', '5', '2024-05-07 23:48:17'),
	(145, 'victor', '1', '2024-05-09 21:56:22'),
	(146, 'victor', '2', '2024-05-09 21:56:35'),
	(147, 'victor', '3', '2024-05-09 21:56:35'),
	(148, 'victor', '4', '2024-05-09 21:56:37'),
	(149, 'victor', '5', '2024-05-09 22:05:00'),
	(150, 'victor', '6', '2024-05-09 22:20:36'),
	(151, 'victor', '7', '2024-05-09 23:40:05'),
	(152, 'victor', '1', '2024-05-13 22:36:27'),
	(153, 'victor', '2', '2024-05-13 22:36:28'),
	(154, 'victor', '3', '2024-05-13 22:44:15'),
	(155, 'victor', '4', '2024-05-13 22:56:06'),
	(156, 'victor', '5', '2024-05-13 22:56:14'),
	(157, 'victor', '1', '2024-06-11 22:41:46'),
	(158, 'victor', '2', '2024-06-11 22:41:46'),
	(159, 'victor', '3', '2024-06-11 22:41:47'),
	(160, 'victor', '4', '2024-06-11 22:41:47'),
	(161, 'victor', '5', '2024-06-11 22:41:47'),
	(162, 'victor', '6', '2024-06-11 22:41:47'),
	(163, 'victor', '7', '2024-06-11 22:41:48'),
	(164, 'victor', '8', '2024-06-11 22:41:48'),
	(165, 'victor', '1', '2024-06-13 14:30:04'),
	(166, 'victor', '2', '2024-06-13 14:30:04'),
	(167, 'victor', '3', '2024-06-13 14:30:05'),
	(168, 'victor', '4', '2024-06-13 15:23:13'),
	(169, 'victor', '5', '2024-06-13 15:36:30'),
	(170, 'victor', '6', '2024-06-13 15:37:33'),
	(171, 'victor', '7', '2024-06-13 15:40:38'),
	(172, 'victor', '8', '2024-06-13 15:40:52'),
	(173, 'victor', '9', '2024-06-13 15:41:38'),
	(174, 'victor', '1', '2024-06-13 15:44:49'),
	(175, 'victor', '2', '2024-06-13 15:44:53'),
	(176, 'victor', '3', '2024-06-13 15:47:39'),
	(177, 'victor', '4', '2024-06-13 15:47:42'),
	(178, 'victor', '5', '2024-06-13 16:09:56'),
	(179, 'victor', '1', '2024-06-13 16:10:04'),
	(180, 'victor', '2', '2024-06-13 18:02:09'),
	(181, 'victor', '1', '2024-06-13 18:16:03'),
	(182, 'victor', '2', '2024-06-13 18:16:14'),
	(183, 'victor', '3', '2024-06-13 18:16:23'),
	(184, 'victor', '4', '2024-06-13 18:17:12'),
	(185, 'victor', '1', '2024-06-13 18:18:27'),
	(186, 'victor', '2', '2024-06-13 18:18:30'),
	(187, 'victor', '3', '2024-06-13 18:19:19'),
	(188, 'victor', '4', '2024-06-13 18:19:23'),
	(189, 'victor', '5', '2024-06-13 18:19:29'),
	(190, 'victor', '6', '2024-06-13 18:19:33'),
	(191, 'victor', '7', '2024-06-13 18:19:36'),
	(192, 'victor', '8', '2024-06-13 18:19:40'),
	(193, 'victor', '9', '2024-06-13 18:19:46'),
	(194, 'victor', '1', '2024-06-13 18:37:48'),
	(195, 'victor', '2', '2024-06-13 18:37:58'),
	(196, 'victor', '3', '2024-06-13 18:38:01'),
	(197, 'victor', '4', '2024-06-13 18:38:03'),
	(198, 'victor', '1', '2024-06-13 18:55:31'),
	(199, 'victor', '2', '2024-06-13 18:55:32'),
	(200, 'victor', '3', '2024-06-13 18:55:32'),
	(201, 'victor', '4', '2024-06-13 18:55:33'),
	(202, 'victor', '5', '2024-06-13 18:55:33'),
	(203, 'victor', '6', '2024-06-13 18:55:33'),
	(204, 'victor', '7', '2024-06-13 18:55:34'),
	(205, 'victor', '8', '2024-06-13 18:55:51'),
	(206, 'victor', '9', '2024-06-13 18:55:51'),
	(207, 'victor', '10', '2024-06-13 18:55:51'),
	(208, 'victor', '11', '2024-06-13 18:55:52'),
	(209, 'victor', '12', '2024-06-13 18:55:52'),
	(210, 'victor', '13', '2024-06-13 18:55:52'),
	(211, 'victor', '1', '2024-06-13 19:10:59'),
	(212, 'victor', '1', '2024-06-13 19:35:47'),
	(213, 'victor', '2', '2024-06-13 19:35:50'),
	(214, 'victor', '1', '2024-06-14 20:02:00'),
	(215, 'victor', '2', '2024-06-14 20:02:01'),
	(216, 'victor', '3', '2024-06-14 20:02:02'),
	(217, 'victor', '4', '2024-06-14 20:02:03'),
	(218, 'victor', '5', '2024-06-14 20:02:05'),
	(219, 'victor', '6', '2024-06-14 20:02:06'),
	(220, 'victor', '7', '2024-06-14 20:02:07'),
	(221, 'victor', '8', '2024-06-14 20:02:09'),
	(222, 'victor', '9', '2024-06-14 20:02:10'),
	(223, 'victor', '10', '2024-06-14 20:02:12'),
	(224, 'victor', '11', '2024-06-14 20:02:13'),
	(225, 'victor', '12', '2024-06-14 20:02:14'),
	(226, 'victor', '13', '2024-06-14 20:02:15'),
	(227, 'victor', '14', '2024-06-14 20:02:16'),
	(228, 'victor', '15', '2024-06-14 20:02:17'),
	(229, 'victor', '16', '2024-06-14 20:02:17'),
	(230, 'victor', '17', '2024-06-14 20:02:18'),
	(231, 'victor', '18', '2024-06-14 20:02:18'),
	(232, 'victor', '19', '2024-06-14 20:02:19'),
	(233, 'victor', '20', '2024-06-14 20:02:20'),
	(234, 'victor', '21', '2024-06-14 20:02:20'),
	(235, 'victor', '22', '2024-06-14 20:02:20'),
	(236, 'victor', '23', '2024-06-14 20:02:21'),
	(237, 'victor', '24', '2024-06-14 20:02:21'),
	(238, 'victor', '25', '2024-06-14 20:02:21'),
	(239, 'victor', '26', '2024-06-14 20:02:22'),
	(240, 'victor', '27', '2024-06-14 20:15:55'),
	(241, 'victor', '28', '2024-06-14 20:15:55'),
	(242, 'victor', '29', '2024-06-14 20:15:56'),
	(243, 'victor', '1', '2024-06-14 20:59:24'),
	(244, 'victor', '2', '2024-06-14 20:59:25'),
	(245, 'victor', '3', '2024-06-14 20:59:25'),
	(246, 'victor', '4', '2024-06-14 20:59:28'),
	(247, 'victor', '1', '2024-06-14 21:06:56'),
	(248, 'victor', '2', '2024-06-14 21:06:58');

-- Copiando estrutura para tabela chamarsenha.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contador` int(11) DEFAULT 0,
  `disponibilidade` int(11) DEFAULT 0,
  `limite` int(11) DEFAULT 0,
  `palavra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela chamarsenha.usuarios: ~7 rows (aproximadamente)
INSERT IGNORE INTO `usuarios` (`id`, `username`, `password`, `contador`, `disponibilidade`, `limite`, `palavra`) VALUES
	(1, 'victor', '123', 2, 1, 150, 'eu'),
	(9, 'bruno', 'Cogna@12345', 0, 1, 10, 'Cogna'),
	(10, 'osmundo', '123', 0, 1, 15, '123'),
	(11, 'thamyris', '220208manu', 0, 1, 0, 'manu'),
	(12, 'daniela', '123', 0, 1, 0, 'eu'),
	(13, 'lucas', '123', 0, 1, 0, 'eu'),
	(14, 'jackeline', '123', 0, 1, 15, 'eu');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
