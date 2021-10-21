-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 16:28:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soporte_tecnico`
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
  `dir_IP` varchar(20) NOT NULL,
  `MAC_et` varchar(50) NOT NULL,
  `MAC_wifi` varchar(50) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `sopor` varchar(200) DEFAULT NULL,
  `max_RAM` varchar(200) DEFAULT NULL,
  `soprt_graph` varchar(200) DEFAULT NULL,
  `user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id_IP` int(11) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id_IP`, `IP`, `estado`) VALUES
(1, '192.168.100.2', 1);

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
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id_IP`);

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
  MODIFY `id_IP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `datosequipos_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usuarios` (`user`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`respons`) REFERENCES `responsables` (`id_respons`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
