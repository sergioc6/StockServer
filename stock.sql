-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2016 a las 14:13:24
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id_insumo` int(11) NOT NULL,
  `nombre_insumo` varchar(35) NOT NULL,
  `descripcion` text NOT NULL,
  `id_tipoinsumo` int(12) NOT NULL,
  `id_sector` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id_insumo`, `nombre_insumo`, `descripcion`, `id_tipoinsumo`, `id_sector`) VALUES
(2, 'Sergio Cabral', 'jhgjhgjh', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumoxproveedor`
--

CREATE TABLE `insumoxproveedor` (
  `id_insumoxprov` int(12) NOT NULL,
  `precio` float NOT NULL,
  `demora_dias` int(12) NOT NULL,
  `id_insumo` int(12) NOT NULL,
  `id_proveedor` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE `operarios` (
  `id_operario` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operarios`
--

INSERT INTO `operarios` (`id_operario`, `email`, `pass`, `apellido`, `nombre`) VALUES
(1, 'educmack@gmail.com', 'contra22', 'Leiva', 'Nahuel'),
(2, 'sergiocabral.1990@gmail.com', 'montoto', 'Cabral', 'Sergio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(12) NOT NULL,
  `nombre_proveedor` varchar(35) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `localidad` varchar(40) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `telefono`, `localidad`, `direccion`, `email`) VALUES
(13, 'Sergio Cabral', '21321321', 'Concepcion del Uruguay', 'rocamora 1199', 'sergio_396@hotmail.com'),
(15, 'Pichicho Flores', '435589', 'Gchu', 'Jujuy 1575', 'edu.lei50@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_insumos`
--

CREATE TABLE `sector_insumos` (
  `id_sector` int(12) NOT NULL,
  `sector_deposito` varchar(35) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector_insumos`
--

INSERT INTO `sector_insumos` (`id_sector`, `sector_deposito`, `latitud`, `longitud`) VALUES
(1, 'Sector de Herramientas', 21321313213, 231321321321),
(2, 'Sector de Ejes', 32123131, 5646512);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_insumo`
--

CREATE TABLE `tipo_insumo` (
  `id_tipoinsumo` int(12) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_insumo`
--

INSERT INTO `tipo_insumo` (`id_tipoinsumo`, `tipo`) VALUES
(1, 'Electrónica'),
(2, 'Ferretería'),
(4, 'Gran porte'),
(3, 'Pinturas'),
(5, 'Terminaciones');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id_insumo`),
  ADD UNIQUE KEY `nombre_insumo` (`nombre_insumo`),
  ADD KEY `id_tipoinsumo` (`id_tipoinsumo`),
  ADD KEY `id_sector` (`id_sector`);

--
-- Indices de la tabla `insumoxproveedor`
--
ALTER TABLE `insumoxproveedor`
  ADD PRIMARY KEY (`id_insumoxprov`),
  ADD UNIQUE KEY `id_insumo_2` (`id_insumo`,`id_proveedor`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_insumo` (`id_insumo`);

--
-- Indices de la tabla `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`id_operario`),
  ADD UNIQUE KEY `id_usuario` (`id_operario`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `nombre_proveedor` (`nombre_proveedor`);

--
-- Indices de la tabla `sector_insumos`
--
ALTER TABLE `sector_insumos`
  ADD PRIMARY KEY (`id_sector`),
  ADD UNIQUE KEY `sector_deposito` (`sector_deposito`);

--
-- Indices de la tabla `tipo_insumo`
--
ALTER TABLE `tipo_insumo`
  ADD PRIMARY KEY (`id_tipoinsumo`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id_insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `insumoxproveedor`
--
ALTER TABLE `insumoxproveedor`
  MODIFY `id_insumoxprov` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id_operario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `sector_insumos`
--
ALTER TABLE `sector_insumos`
  MODIFY `id_sector` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_insumo`
--
ALTER TABLE `tipo_insumo`
  MODIFY `id_tipoinsumo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD CONSTRAINT `fk_sectorinsumo` FOREIGN KEY (`id_sector`) REFERENCES `sector_insumos` (`id_sector`),
  ADD CONSTRAINT `fk_tipoinsumo` FOREIGN KEY (`id_tipoinsumo`) REFERENCES `tipo_insumo` (`id_tipoinsumo`);

--
-- Filtros para la tabla `insumoxproveedor`
--
ALTER TABLE `insumoxproveedor`
  ADD CONSTRAINT `fk_insumo` FOREIGN KEY (`id_insumo`) REFERENCES `insumos` (`id_insumo`),
  ADD CONSTRAINT `fk_proveedorinsumo` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
