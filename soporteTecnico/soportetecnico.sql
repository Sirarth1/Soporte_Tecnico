-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2021 a las 19:53:45
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `dir_IP` varchar(20) NOT NULL,
  `MAC_et` varchar(50) NOT NULL,
  `MAC_wifi` varchar(50) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `sopor` varchar(200) DEFAULT NULL,
  `max_RAM` varchar(200) DEFAULT NULL,
  `soprt_graph` varchar(200) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `responsables`
--
ALTER TABLE `responsables`
  ADD PRIMARY KEY (`id_respons`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `responsables`
--
ALTER TABLE `responsables`
  MODIFY `id_respons` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosequipos`
--
ALTER TABLE `datosequipos`
  ADD CONSTRAINT `datosequipos_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
