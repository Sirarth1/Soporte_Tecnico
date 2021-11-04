-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2021 a las 19:42:24
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soportetecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosequipos`
--

CREATE TABLE `datosequipos` (
  `dap_sis` varchar(20) NOT NULL,
  `tip_eq` varchar(25) NOT NULL,
  `modl_eq` varchar(50) NOT NULL,
  `marca_eq` varchar(50) NOT NULL,
  `noSerie_eq` varchar(60) NOT NULL,
  `modl_mothb` varchar(50) DEFAULT NULL,
  `socket_mothb` varchar(10) DEFAULT NULL,
  `pVideo_mothb` varchar(100) DEFAULT NULL,
  `pPCI_mothb` varchar(100) DEFAULT NULL,
  `noRAM_mothb` varchar(100) DEFAULT NULL,
  `noPNVMe_mothb` varchar(100) DEFAULT NULL,
  `modl_procdr` varchar(100) DEFAULT NULL,
  `vel_procdr` varchar(100) DEFAULT NULL,
  `cap_dsk` varchar(100) DEFAULT NULL,
  `type_dsk` varchar(100) DEFAULT NULL,
  `capa_RAM` varchar(100) DEFAULT NULL,
  `vel_RAM` varchar(100) DEFAULT NULL,
  `graficos` varchar(100) DEFAULT NULL,
  `modl_sourcepw` varchar(100) DEFAULT NULL,
  `monitor` varchar(100) DEFAULT NULL,
  `keyboard` varchar(100) DEFAULT NULL,
  `timeUse_monitor` varchar(50) DEFAULT NULL,
  `timeUse_kybrd` varchar(50) DEFAULT NULL,
  `mouse` varchar(50) DEFAULT NULL,
  `timeUse_mouse` varchar(50) DEFAULT NULL,
  `dvd_cd` varchar(5) DEFAULT NULL,
  `sd` varchar(5) DEFAULT NULL,
  `dir_IP` int(11) NOT NULL,
  `MAC_et` varchar(50) NOT NULL,
  `MAC_wifi` varchar(50) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `sopor` varchar(200) DEFAULT NULL,
  `max_RAM` varchar(200) DEFAULT NULL,
  `soprt_graph` varchar(200) DEFAULT NULL,
  `user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosequipos`
--

INSERT INTO `datosequipos` (`dap_sis`, `tip_eq`, `modl_eq`, `marca_eq`, `noSerie_eq`, `modl_mothb`, `socket_mothb`, `pVideo_mothb`, `pPCI_mothb`, `noRAM_mothb`, `noPNVMe_mothb`, `modl_procdr`, `vel_procdr`, `cap_dsk`, `type_dsk`, `capa_RAM`, `vel_RAM`, `graficos`, `modl_sourcepw`, `monitor`, `keyboard`, `timeUse_monitor`, `timeUse_kybrd`, `mouse`, `timeUse_mouse`, `dvd_cd`, `sd`, `dir_IP`, `MAC_et`, `MAC_wifi`, `observaciones`, `sopor`, `max_RAM`, `soprt_graph`, `user`) VALUES
('1', 'PC', 'HP-Inkjet', 'HP', '23215165151632156', NULL, NULL, 'asdas', 'dsfsdf', '2 ranuras', 'asdfasdf', 'sadasdfas', 'asdfasf', 'asdfsfsd', 'SSD', '4GB', 'asdfsfsd', '', 'asdfsf', 'sdfsdfgd', 'menor a 1 año', '', 'menor a 1 año', 'asdfsf', 'menor a 1 año', NULL, NULL, 1, '', 'asdsdfds', 'asdsfs', 'asdas', 'asdas', 'asdfs', 'Alan'),
('2', 'LAPTOP', 'asdasd', 'asdasd', 'asdasdasfas', 'asdasdas', 'asdasdasd', 'asdasfdsfas', 'asdasdfsf', '2 ranuras', 'asdfaf', 'asfsd', 'asdfsfgd', 'asdfsf', 'SSD', '16GB', 'asdfsfsd', 'asdsdfs', 'asdsdfsd', 'asdfsf', 'de 3 a 6 años', 'asdsfsd', 'de 1 a 3 años', 'assdfsd', 'de 1 a 3 años', 's', '', 6, 'asdsfdfsd', 'asdsfsd', 'asdsfsdfsdasd', 'asdsafsd', 'asdasfsdf', 'asdasdf asfdasf asf', 'Alan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id_IP` int(11) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id_IP`, `IP`, `estado`) VALUES
(1, '132.149.1.2', 1),
(2, '132.149.1.3', 0),
(3, '132.149.1.4', 0),
(4, '132.149.1.5', 0),
(5, '132.149.1.6', 0),
(6, '132.149.1.7', 1),
(7, '132.149.1.8', 0),
(8, '132.149.1.9', 0),
(9, '132.149.1.10', 0),
(10, '132.149.1.11', 0),
(11, '132.149.1.12', 0),
(12, '132.149.1.13', 0),
(13, '132.149.1.14', 0),
(14, '132.149.1.15', 0),
(15, '132.149.1.16', 0),
(16, '132.149.1.17', 0),
(17, '132.149.1.18', 0),
(18, '132.149.1.19', 0),
(19, '132.149.1.20', 0),
(20, '132.149.1.21', 0),
(21, '132.149.1.22', 0),
(22, '132.149.1.23', 0),
(23, '132.149.1.24', 0),
(24, '132.149.1.25', 0),
(25, '132.149.1.26', 0),
(26, '132.149.1.27', 0),
(27, '132.149.1.28', 0),
(28, '132.149.1.29', 0),
(29, '132.149.1.30', 0),
(30, '132.149.1.31', 0),
(31, '132.149.1.32', 0),
(32, '132.149.1.33', 0),
(33, '132.149.1.34', 0),
(34, '132.149.1.35', 0),
(35, '132.149.1.36', 0),
(36, '132.149.1.37', 0),
(37, '132.149.1.38', 0),
(38, '132.149.1.39', 0),
(39, '132.149.1.40', 0),
(40, '132.149.1.41', 0),
(41, '132.149.1.42', 0),
(42, '132.149.1.43', 0),
(43, '132.149.1.44', 0),
(44, '132.149.1.45', 0),
(45, '132.149.1.46', 0),
(46, '132.149.1.47', 0),
(47, '132.149.1.48', 0),
(48, '132.149.1.49', 0),
(49, '132.149.1.50', 0),
(50, '132.149.1.51', 0),
(51, '132.149.1.52', 0),
(52, '132.149.1.53', 0),
(53, '132.149.1.54', 0),
(54, '132.149.1.55', 0),
(55, '132.149.1.56', 0),
(56, '132.149.1.57', 0),
(57, '132.149.1.58', 0),
(58, '132.149.1.59', 0),
(59, '132.149.1.60', 0),
(60, '132.149.1.61', 0),
(61, '132.149.1.62', 0),
(62, '132.149.1.63', 0),
(63, '132.149.1.64', 0),
(64, '132.149.1.65', 0),
(65, '132.149.1.66', 0),
(66, '132.149.1.67', 0),
(67, '132.149.1.68', 0),
(68, '132.149.1.69', 0),
(69, '132.149.1.70', 0),
(70, '132.149.1.71', 0),
(71, '132.149.1.72', 0),
(72, '132.149.1.73', 0),
(73, '132.149.1.74', 0),
(74, '132.149.1.75', 0),
(75, '132.149.1.76', 0),
(76, '132.149.1.77', 0),
(77, '132.149.1.78', 0),
(78, '132.149.1.79', 0),
(79, '132.149.1.80', 0),
(80, '132.149.1.81', 0),
(81, '132.149.1.82', 0),
(82, '132.149.1.83', 0),
(83, '132.149.1.84', 0),
(84, '132.149.1.85', 0),
(85, '132.149.1.86', 0),
(86, '132.149.1.87', 0),
(87, '132.149.1.88', 0),
(88, '132.149.1.89', 0),
(89, '132.149.1.90', 0),
(90, '132.149.1.91', 0),
(91, '132.149.1.92', 0),
(92, '132.149.1.93', 0),
(93, '132.149.1.94', 0),
(94, '132.149.1.95', 0),
(95, '132.149.1.96', 0),
(96, '132.149.1.97', 0),
(97, '132.149.1.98', 0),
(98, '132.149.1.99', 0),
(99, '132.149.1.100', 0),
(100, '132.149.1.101', 0),
(101, '132.149.1.102', 0),
(102, '132.149.1.103', 0),
(103, '132.149.1.104', 0),
(104, '132.149.1.105', 0),
(105, '132.149.1.106', 0),
(106, '132.149.1.107', 0),
(107, '132.149.1.108', 0),
(108, '132.149.1.109', 0),
(109, '132.149.1.110', 0),
(110, '132.149.1.111', 0),
(111, '132.149.1.112', 0),
(112, '132.149.1.113', 0),
(113, '132.149.1.114', 0),
(114, '132.149.1.115', 0),
(115, '132.149.1.116', 0),
(116, '132.149.1.117', 0),
(117, '132.149.1.118', 0),
(118, '132.149.1.119', 0),
(119, '132.149.1.120', 0),
(120, '132.149.1.121', 0),
(121, '132.149.1.122', 0),
(122, '132.149.1.123', 0),
(123, '132.149.1.124', 0),
(124, '132.149.1.125', 0),
(125, '132.149.1.126', 0),
(126, '132.149.1.127', 0),
(127, '132.149.1.128', 0),
(128, '132.149.1.129', 0),
(129, '132.149.1.130', 0),
(130, '132.149.1.131', 0),
(131, '132.149.1.132', 0),
(132, '132.149.1.133', 0),
(133, '132.149.1.134', 0),
(134, '132.149.1.135', 0),
(135, '132.149.1.136', 0),
(136, '132.149.1.137', 0),
(137, '132.149.1.138', 0),
(138, '132.149.1.139', 0),
(139, '132.149.1.140', 0),
(140, '132.149.1.141', 0),
(141, '132.149.1.142', 0),
(142, '132.149.1.143', 0),
(143, '132.149.1.144', 0),
(144, '132.149.1.145', 0),
(145, '132.149.1.146', 0),
(146, '132.149.1.147', 0),
(147, '132.149.1.148', 0),
(148, '132.149.1.149', 0),
(149, '132.149.1.150', 0),
(150, '132.149.1.151', 0),
(151, '132.149.1.152', 0),
(152, '132.149.1.153', 0),
(153, '132.149.1.154', 0),
(154, '132.149.1.155', 0),
(155, '132.149.1.156', 0),
(156, '132.149.1.157', 0),
(157, '132.149.1.158', 0),
(158, '132.149.1.159', 0),
(159, '132.149.1.160', 0),
(160, '132.149.1.161', 0),
(161, '132.149.1.162', 0),
(162, '132.149.1.163', 0),
(163, '132.149.1.164', 0),
(164, '132.149.1.165', 0),
(165, '132.149.1.166', 0),
(166, '132.149.1.167', 0),
(167, '132.149.1.168', 0),
(168, '132.149.1.169', 0),
(169, '132.149.1.170', 0),
(170, '132.149.1.171', 0),
(171, '132.149.1.172', 0),
(172, '132.149.1.173', 0),
(173, '132.149.1.174', 0),
(174, '132.149.1.175', 0),
(175, '132.149.1.176', 0),
(176, '132.149.1.177', 0),
(177, '132.149.1.178', 0),
(178, '132.149.1.179', 0),
(179, '132.149.1.180', 0),
(180, '132.149.1.181', 0),
(181, '132.149.1.182', 0),
(182, '132.149.1.183', 0),
(183, '132.149.1.184', 0),
(184, '132.149.1.185', 0),
(185, '132.149.1.186', 0),
(186, '132.149.1.187', 0),
(187, '132.149.1.188', 0),
(188, '132.149.1.189', 0),
(189, '132.149.1.190', 0),
(190, '132.149.1.191', 0),
(191, '132.149.1.192', 0),
(192, '132.149.1.193', 0),
(193, '132.149.1.194', 0),
(194, '132.149.1.195', 0),
(195, '132.149.1.196', 0),
(196, '132.149.1.197', 0),
(197, '132.149.1.198', 0),
(198, '132.149.1.199', 0),
(199, '132.149.1.200', 0),
(200, '132.149.1.201', 0),
(201, '132.149.1.202', 0),
(202, '132.149.1.203', 0),
(203, '132.149.1.204', 0),
(204, '132.149.1.205', 0),
(205, '132.149.1.206', 0),
(206, '132.149.1.207', 0),
(207, '132.149.1.208', 0),
(208, '132.149.1.209', 0),
(209, '132.149.1.210', 0),
(210, '132.149.1.211', 0),
(211, '132.149.1.212', 0),
(212, '132.149.1.213', 0),
(213, '132.149.1.214', 0),
(214, '132.149.1.215', 0),
(215, '132.149.1.216', 0),
(216, '132.149.1.217', 0),
(217, '132.149.1.218', 0),
(218, '132.149.1.219', 0),
(219, '132.149.1.220', 0),
(220, '132.149.1.221', 0),
(221, '132.149.1.222', 0),
(222, '132.149.1.223', 0),
(223, '132.149.1.224', 0),
(224, '132.149.1.225', 0),
(225, '132.149.1.226', 0),
(226, '132.149.1.227', 0),
(227, '132.149.1.228', 0),
(228, '132.149.1.229', 0),
(229, '132.149.1.230', 0),
(230, '132.149.1.231', 0),
(231, '132.149.1.232', 0),
(232, '132.149.1.233', 0),
(233, '132.149.1.234', 0),
(234, '132.149.1.235', 0),
(235, '132.149.1.236', 0),
(236, '132.149.1.237', 0),
(237, '132.149.1.238', 0),
(238, '132.149.1.239', 0),
(239, '132.149.1.240', 0),
(240, '132.149.1.241', 0),
(241, '132.149.1.242', 0),
(242, '132.149.1.243', 0),
(243, '132.149.1.244', 0),
(244, '132.149.1.245', 0),
(245, '132.149.1.246', 0),
(246, '132.149.1.247', 0),
(247, '132.149.1.248', 0),
(248, '132.149.1.249', 0),
(249, '132.149.1.250', 0),
(250, '132.149.1.251', 0),
(251, '132.149.1.252', 0),
(252, '132.149.1.253', 0),
(253, '132.149.1.254', 0),
(254, '132.149.1.255', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `dap` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nom_reporta` varchar(60) NOT NULL,
  `fech_reporte` date NOT NULL,
  `obser_reporte` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables`
--

CREATE TABLE `responsables` (
  `id_respons` int(11) NOT NULL,
  `nom_respons` varchar(100) NOT NULL,
  `area_respons` varchar(100) NOT NULL,
  `cargo_respons` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `responsables`
--

INSERT INTO `responsables` (`id_respons`, `nom_respons`, `area_respons`, `cargo_respons`) VALUES
(1, 'Alan', 'Soporte Tecnico', 'Servicio Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `respons`) VALUES
('Alan', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosequipos`
--
ALTER TABLE `datosequipos`
  ADD PRIMARY KEY (`dap_sis`),
  ADD UNIQUE KEY `dir_IP` (`dir_IP`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id_IP`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `dap` (`dap`);

--
-- Indices de la tabla `responsables`
--
ALTER TABLE `responsables`
  ADD PRIMARY KEY (`id_respons`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user`),
  ADD KEY `respons` (`respons`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ips`
--
ALTER TABLE `ips`
  MODIFY `id_IP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responsables`
--
ALTER TABLE `responsables`
  MODIFY `id_respons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosequipos`
--
ALTER TABLE `datosequipos`
  ADD CONSTRAINT `datosequipos_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usuarios` (`user`),
  ADD CONSTRAINT `datosequipos_ibfk_2` FOREIGN KEY (`dir_IP`) REFERENCES `ips` (`id_IP`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`dap`) REFERENCES `datosequipos` (`dap_sis`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`respons`) REFERENCES `responsables` (`id_respons`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
