-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2016 a las 16:46:45
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backups`
--

CREATE TABLE IF NOT EXISTS `backups` (
  `id_backup` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `backups`
--

INSERT INTO `backups` (`id_backup`, `fecha_hora`) VALUES
(1, '2016-10-08 08:35:22'),
(2, '2016-10-08 08:41:36'),
(3, '2016-10-08 08:44:03'),
(4, '2016-10-08 08:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_prov` int(11) NOT NULL,
  `monto` float NOT NULL,
  PRIMARY KEY (`id_compra`),
  UNIQUE KEY `id_compra` (`id_compra`),
  KEY `id_prov` (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE IF NOT EXISTS `insumos` (
  `id_insumo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_insumo` varchar(35) NOT NULL,
  `descripcion` text NOT NULL,
  `stock_min` int(11) NOT NULL,
  `stock_max` int(11) NOT NULL,
  `id_tipoinsumo` int(12) NOT NULL,
  `id_sector` int(12) NOT NULL,
  PRIMARY KEY (`id_insumo`),
  UNIQUE KEY `nombre_insumo` (`nombre_insumo`),
  KEY `id_tipoinsumo` (`id_tipoinsumo`),
  KEY `id_sector` (`id_sector`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id_insumo`, `nombre_insumo`, `descripcion`, `stock_min`, `stock_max`, `id_tipoinsumo`, `id_sector`) VALUES
(2, 'Sergio Cabral', 'jhgjhgjh', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumoxproveedor`
--

CREATE TABLE IF NOT EXISTS `insumoxproveedor` (
  `id_insumoxprov` int(12) NOT NULL AUTO_INCREMENT,
  `precio` float NOT NULL,
  `demora_dias` int(12) NOT NULL,
  `id_insumo` int(12) NOT NULL,
  `id_proveedor` int(12) NOT NULL,
  PRIMARY KEY (`id_insumoxprov`),
  UNIQUE KEY `id_insumo_2` (`id_insumo`,`id_proveedor`),
  KEY `id_proveedor` (`id_proveedor`),
  KEY `id_insumo` (`id_insumo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumo_deposito`
--

CREATE TABLE IF NOT EXISTS `insumo_deposito` (
  `id_ins_dep` int(11) NOT NULL AUTO_INCREMENT,
  `id_insumo` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  PRIMARY KEY (`id_ins_dep`),
  UNIQUE KEY `id_ins_dep` (`id_ins_dep`),
  KEY `id_insumo` (`id_insumo`,`id_compra`),
  KEY `id_insumo_2` (`id_insumo`),
  KEY `id_compra` (`id_compra`),
  KEY `id_compra_2` (`id_compra`),
  KEY `id_insumo_3` (`id_insumo`),
  KEY `id_compra_3` (`id_compra`),
  KEY `id_compra_4` (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE IF NOT EXISTS `operarios` (
  `id_operario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `foto_operario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_operario`),
  UNIQUE KEY `id_usuario` (`id_operario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(12) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(35) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `localidad` varchar(40) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  UNIQUE KEY `nombre_proveedor` (`nombre_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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

CREATE TABLE IF NOT EXISTS `sector_insumos` (
  `id_sector` int(12) NOT NULL AUTO_INCREMENT,
  `sector_deposito` varchar(35) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `foto_sector` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sector`),
  UNIQUE KEY `sector_deposito` (`sector_deposito`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `sector_insumos`
--

INSERT INTO `sector_insumos` (`id_sector`, `sector_deposito`, `latitud`, `longitud`, `foto_sector`) VALUES
(1, 'Sector de Herramientas', 21321313213, 231321321321, NULL),
(2, 'Sector de Ejes', 32123131, 5646512, NULL),
(8, 'Sector de Taladros', 1111, 2222, NULL),
(9, 'Sector de maquinaria pesada', 11111, 22222, NULL),
(10, 'Sector insumos pequeños', 213123123, 3123123123, NULL),
(11, 'Sector rodados', 982938, 9080958, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_insumo`
--

CREATE TABLE IF NOT EXISTS `tipo_insumo` (
  `id_tipoinsumo` int(12) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipoinsumo`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

--
-- Filtros para la tabla `insumo_deposito`
--
ALTER TABLE `insumo_deposito`
  ADD CONSTRAINT `fk_idcompra` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`),
  ADD CONSTRAINT `fk_idinsumo` FOREIGN KEY (`id_insumo`) REFERENCES `insumos` (`id_insumo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
