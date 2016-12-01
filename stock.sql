-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2016 a las 11:14:51
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
-- Estructura de tabla para la tabla `backups`
--

CREATE TABLE `backups` (
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
(4, '2016-10-08 08:45:15'),
(0, '2016-11-30 08:14:10'),
(0, '2016-12-01 09:06:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `numero_oc` int(11) NOT NULL,
  `estado` enum('Enviada','Recibida','Cancelada','') NOT NULL,
  `fecha` date NOT NULL,
  `id_prov` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `numero_oc`, `estado`, `fecha`, `id_prov`, `monto`) VALUES
(7, 1, 'Enviada', '2016-11-11', 13, 71500),
(8, 1, 'Enviada', '2016-11-11', 13, 23727),
(9, 1, 'Enviada', '2016-11-18', 13, 750);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id_insumo` int(11) NOT NULL,
  `nombre_insumo` varchar(35) NOT NULL,
  `descripcion` text NOT NULL,
  `stock_min` int(11) NOT NULL,
  `stock_max` int(11) NOT NULL,
  `id_tipoinsumo` int(12) NOT NULL,
  `id_sector` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id_insumo`, `nombre_insumo`, `descripcion`, `stock_min`, `stock_max`, `id_tipoinsumo`, `id_sector`) VALUES
(2, 'Tornillos', 'jhgjhgjh', 0, 0, 1, 1),
(3, 'Faroles', 'faros para acoplados', 12, 33, 1, 1);

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

--
-- Volcado de datos para la tabla `insumoxproveedor`
--

INSERT INTO `insumoxproveedor` (`id_insumoxprov`, `precio`, `demora_dias`, `id_insumo`, `id_proveedor`) VALUES
(4, 143, 0, 2, 13),
(5, 250, 0, 3, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumo_deposito`
--

CREATE TABLE `insumo_deposito` (
  `id_ins_dep` int(11) NOT NULL,
  `id_insumo` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumo_deposito`
--

INSERT INTO `insumo_deposito` (`id_ins_dep`, `id_insumo`, `id_compra`) VALUES
(24, 2, 7),
(25, 2, 7),
(26, 2, 7),
(27, 2, 7),
(28, 2, 7),
(29, 2, 7),
(30, 2, 7),
(31, 2, 7),
(32, 2, 7),
(33, 2, 7),
(34, 2, 7),
(35, 2, 7),
(36, 2, 7),
(37, 2, 7),
(38, 2, 7),
(39, 2, 7),
(40, 2, 7),
(41, 2, 7),
(42, 2, 7),
(43, 2, 7),
(44, 2, 7),
(45, 2, 7),
(46, 2, 7),
(47, 2, 7),
(48, 2, 7),
(49, 2, 7),
(50, 2, 7),
(51, 2, 7),
(52, 2, 7),
(53, 2, 7),
(54, 2, 7),
(55, 2, 7),
(56, 2, 7),
(57, 2, 7),
(58, 2, 7),
(59, 2, 7),
(60, 2, 7),
(61, 2, 7),
(62, 2, 7),
(63, 2, 7),
(64, 2, 7),
(65, 2, 7),
(66, 2, 7),
(67, 2, 7),
(68, 2, 7),
(69, 2, 7),
(70, 2, 7),
(71, 2, 7),
(72, 2, 7),
(73, 2, 7),
(74, 2, 7),
(75, 2, 7),
(76, 2, 7),
(77, 2, 7),
(78, 2, 7),
(79, 2, 7),
(80, 2, 7),
(81, 2, 7),
(82, 2, 7),
(83, 2, 7),
(84, 2, 7),
(85, 2, 7),
(86, 2, 7),
(87, 2, 7),
(88, 2, 7),
(89, 2, 7),
(90, 2, 7),
(91, 2, 7),
(92, 2, 7),
(93, 2, 7),
(94, 2, 7),
(95, 2, 7),
(96, 2, 7),
(97, 2, 7),
(98, 2, 7),
(99, 2, 7),
(100, 2, 7),
(101, 2, 7),
(102, 2, 7),
(103, 2, 7),
(104, 2, 7),
(105, 2, 7),
(106, 2, 7),
(107, 2, 7),
(108, 2, 7),
(109, 2, 7),
(110, 2, 7),
(111, 2, 7),
(112, 2, 7),
(113, 2, 7),
(114, 2, 7),
(115, 2, 7),
(116, 2, 7),
(117, 2, 7),
(118, 2, 7),
(119, 2, 7),
(120, 2, 7),
(121, 2, 7),
(122, 2, 7),
(123, 2, 7),
(124, 2, 7),
(125, 2, 7),
(126, 2, 7),
(127, 2, 7),
(128, 2, 7),
(129, 2, 7),
(130, 2, 7),
(131, 2, 7),
(132, 2, 7),
(133, 2, 7),
(134, 2, 7),
(135, 2, 7),
(136, 2, 7),
(137, 2, 7),
(138, 2, 7),
(139, 2, 7),
(140, 2, 7),
(141, 2, 7),
(142, 2, 7),
(143, 2, 7),
(144, 2, 7),
(145, 2, 7),
(146, 2, 7),
(147, 2, 7),
(148, 2, 7),
(149, 2, 7),
(150, 2, 7),
(151, 2, 7),
(152, 2, 7),
(153, 2, 7),
(154, 2, 7),
(155, 2, 7),
(156, 2, 7),
(157, 2, 7),
(158, 2, 7),
(159, 2, 7),
(160, 2, 7),
(161, 2, 7),
(162, 2, 7),
(163, 2, 7),
(164, 2, 7),
(165, 2, 7),
(166, 2, 7),
(167, 2, 7),
(168, 2, 7),
(169, 2, 7),
(170, 2, 7),
(171, 2, 7),
(172, 2, 7),
(173, 2, 7),
(174, 2, 7),
(175, 2, 7),
(176, 2, 7),
(177, 2, 7),
(178, 2, 7),
(179, 2, 7),
(180, 2, 7),
(181, 2, 7),
(182, 2, 7),
(183, 2, 7),
(184, 2, 7),
(185, 2, 7),
(186, 2, 7),
(187, 2, 7),
(188, 2, 7),
(189, 2, 7),
(190, 2, 7),
(191, 2, 7),
(192, 2, 7),
(193, 2, 7),
(194, 2, 7),
(195, 2, 7),
(196, 2, 7),
(197, 2, 7),
(198, 2, 7),
(199, 2, 7),
(200, 2, 7),
(201, 2, 7),
(202, 2, 7),
(203, 2, 7),
(204, 2, 7),
(205, 2, 7),
(206, 2, 7),
(207, 2, 7),
(208, 2, 7),
(209, 2, 7),
(210, 2, 7),
(211, 2, 7),
(212, 2, 7),
(213, 2, 7),
(214, 2, 7),
(215, 2, 7),
(216, 2, 7),
(217, 2, 7),
(218, 2, 7),
(219, 2, 7),
(220, 2, 7),
(221, 2, 7),
(222, 2, 7),
(223, 2, 7),
(224, 2, 7),
(225, 2, 7),
(226, 2, 7),
(227, 2, 7),
(228, 2, 7),
(229, 2, 7),
(230, 2, 7),
(231, 2, 7),
(232, 2, 7),
(233, 2, 7),
(234, 2, 7),
(235, 2, 7),
(236, 2, 7),
(237, 2, 7),
(238, 2, 7),
(239, 2, 7),
(240, 2, 7),
(241, 2, 7),
(242, 2, 7),
(243, 2, 7),
(244, 2, 7),
(245, 2, 7),
(246, 2, 7),
(247, 2, 7),
(248, 2, 7),
(249, 2, 7),
(250, 2, 7),
(251, 2, 7),
(252, 2, 7),
(253, 2, 7),
(254, 2, 7),
(255, 2, 7),
(256, 2, 7),
(257, 2, 7),
(258, 2, 7),
(259, 2, 7),
(260, 2, 7),
(261, 2, 7),
(262, 2, 7),
(263, 2, 7),
(264, 2, 7),
(265, 2, 7),
(266, 2, 7),
(267, 2, 7),
(268, 2, 7),
(269, 2, 7),
(270, 2, 7),
(271, 2, 7),
(272, 2, 7),
(273, 2, 7),
(274, 2, 7),
(275, 2, 7),
(276, 2, 7),
(277, 2, 7),
(278, 2, 7),
(279, 2, 7),
(280, 2, 7),
(281, 2, 7),
(282, 2, 7),
(283, 2, 7),
(284, 2, 7),
(285, 2, 7),
(286, 2, 7),
(287, 2, 7),
(288, 2, 7),
(289, 2, 7),
(290, 2, 7),
(291, 2, 7),
(292, 2, 7),
(293, 2, 7),
(294, 2, 7),
(295, 2, 7),
(296, 2, 7),
(297, 2, 7),
(298, 2, 7),
(299, 2, 7),
(300, 2, 7),
(301, 2, 7),
(302, 2, 7),
(303, 2, 7),
(304, 2, 7),
(305, 2, 7),
(306, 2, 7),
(307, 2, 7),
(308, 2, 7),
(309, 2, 7),
(310, 2, 7),
(311, 2, 7),
(312, 2, 7),
(313, 2, 7),
(314, 2, 7),
(315, 2, 7),
(316, 2, 7),
(317, 2, 7),
(318, 2, 7),
(319, 2, 7),
(320, 2, 7),
(321, 2, 7),
(322, 2, 7),
(323, 2, 7),
(324, 2, 7),
(325, 2, 7),
(326, 2, 7),
(327, 2, 7),
(328, 2, 7),
(329, 2, 7),
(330, 2, 7),
(331, 2, 7),
(332, 2, 7),
(333, 2, 7),
(334, 2, 7),
(335, 2, 7),
(336, 2, 7),
(337, 2, 7),
(338, 2, 7),
(339, 2, 7),
(340, 2, 7),
(341, 2, 7),
(342, 2, 7),
(343, 2, 7),
(344, 2, 7),
(345, 2, 7),
(346, 2, 7),
(347, 2, 7),
(348, 2, 7),
(349, 2, 7),
(350, 2, 7),
(351, 2, 7),
(352, 2, 7),
(353, 2, 7),
(354, 2, 7),
(355, 2, 7),
(356, 2, 7),
(357, 2, 7),
(358, 2, 7),
(359, 2, 7),
(360, 2, 7),
(361, 2, 7),
(362, 2, 7),
(363, 2, 7),
(364, 2, 7),
(365, 2, 7),
(366, 2, 7),
(367, 2, 7),
(368, 2, 7),
(369, 2, 7),
(370, 2, 7),
(371, 2, 7),
(372, 2, 7),
(373, 2, 7),
(374, 2, 7),
(375, 2, 7),
(376, 2, 7),
(377, 2, 7),
(378, 2, 7),
(379, 2, 7),
(380, 2, 7),
(381, 2, 7),
(382, 2, 7),
(383, 2, 7),
(384, 2, 7),
(385, 2, 7),
(386, 2, 7),
(387, 2, 7),
(388, 2, 7),
(389, 2, 7),
(390, 2, 7),
(391, 2, 7),
(392, 2, 7),
(393, 2, 7),
(394, 2, 7),
(395, 2, 7),
(396, 2, 7),
(397, 2, 7),
(398, 2, 7),
(399, 2, 7),
(400, 2, 7),
(401, 2, 7),
(402, 2, 7),
(403, 2, 7),
(404, 2, 7),
(405, 2, 7),
(406, 2, 7),
(407, 2, 7),
(408, 2, 7),
(409, 2, 7),
(410, 2, 7),
(411, 2, 7),
(412, 2, 7),
(413, 2, 7),
(414, 2, 7),
(415, 2, 7),
(416, 2, 7),
(417, 2, 7),
(418, 2, 7),
(419, 2, 7),
(420, 2, 7),
(421, 2, 7),
(422, 2, 7),
(423, 2, 7),
(424, 2, 7),
(425, 2, 7),
(426, 2, 7),
(427, 2, 7),
(428, 2, 7),
(429, 2, 7),
(430, 2, 7),
(431, 2, 7),
(432, 2, 7),
(433, 2, 7),
(434, 2, 7),
(435, 2, 7),
(436, 2, 7),
(437, 2, 7),
(438, 2, 7),
(439, 2, 7),
(440, 2, 7),
(441, 2, 7),
(442, 2, 7),
(443, 2, 7),
(444, 2, 7),
(445, 2, 7),
(446, 2, 7),
(447, 2, 7),
(448, 2, 7),
(449, 2, 7),
(450, 2, 7),
(451, 2, 7),
(452, 2, 7),
(453, 2, 7),
(454, 2, 7),
(455, 2, 7),
(456, 2, 7),
(457, 2, 7),
(458, 2, 7),
(459, 2, 7),
(460, 2, 7),
(461, 2, 7),
(462, 2, 7),
(463, 2, 7),
(464, 2, 7),
(465, 2, 7),
(466, 2, 7),
(467, 2, 7),
(468, 2, 7),
(469, 2, 7),
(470, 2, 7),
(471, 2, 7),
(472, 2, 7),
(473, 2, 7),
(474, 2, 7),
(475, 2, 7),
(476, 2, 7),
(477, 2, 7),
(478, 2, 7),
(479, 2, 7),
(480, 2, 7),
(481, 2, 7),
(482, 2, 7),
(483, 2, 7),
(484, 2, 7),
(485, 2, 7),
(486, 2, 7),
(487, 2, 7),
(488, 2, 7),
(489, 2, 7),
(490, 2, 7),
(491, 2, 7),
(492, 2, 7),
(493, 2, 7),
(494, 2, 7),
(495, 2, 7),
(496, 2, 7),
(497, 2, 7),
(498, 2, 7),
(499, 2, 7),
(500, 2, 7),
(501, 2, 7),
(502, 2, 7),
(503, 2, 7),
(504, 2, 7),
(505, 2, 7),
(506, 2, 7),
(507, 2, 7),
(508, 2, 7),
(509, 2, 7),
(510, 2, 7),
(511, 2, 7),
(512, 2, 7),
(513, 2, 7),
(514, 2, 7),
(515, 2, 7),
(516, 2, 7),
(517, 2, 7),
(518, 2, 7),
(519, 2, 7),
(520, 2, 7),
(521, 2, 7),
(522, 2, 7),
(523, 2, 7),
(524, 2, 8),
(525, 2, 8),
(526, 2, 8),
(527, 2, 8),
(528, 2, 8),
(529, 2, 8),
(530, 2, 8),
(531, 2, 8),
(532, 2, 8),
(533, 2, 8),
(534, 2, 8),
(535, 2, 8),
(536, 2, 8),
(537, 2, 8),
(538, 2, 8),
(539, 2, 8),
(540, 2, 8),
(541, 2, 8),
(542, 2, 8),
(543, 2, 8),
(544, 2, 8),
(545, 2, 8),
(546, 2, 8),
(547, 2, 8),
(548, 2, 8),
(549, 2, 8),
(550, 2, 8),
(551, 2, 8),
(552, 2, 8),
(553, 2, 8),
(554, 2, 8),
(555, 2, 8),
(556, 2, 8),
(557, 2, 8),
(558, 2, 8),
(559, 2, 8),
(560, 2, 8),
(561, 2, 8),
(562, 2, 8),
(563, 2, 8),
(564, 2, 8),
(565, 2, 8),
(566, 2, 8),
(567, 2, 8),
(568, 2, 8),
(569, 2, 8),
(570, 2, 8),
(571, 2, 8),
(572, 2, 8),
(573, 2, 8),
(574, 2, 8),
(575, 2, 8),
(576, 2, 8),
(577, 2, 8),
(578, 2, 8),
(579, 2, 8),
(580, 2, 8),
(581, 2, 8),
(582, 2, 8),
(583, 2, 8),
(584, 2, 8),
(585, 2, 8),
(586, 2, 8),
(587, 2, 8),
(588, 2, 8),
(589, 2, 8),
(590, 2, 8),
(591, 2, 8),
(592, 2, 8),
(593, 2, 8),
(594, 2, 8),
(595, 2, 8),
(596, 2, 8),
(597, 2, 8),
(598, 2, 8),
(599, 2, 8),
(600, 2, 8),
(601, 2, 8),
(602, 2, 8),
(603, 2, 8),
(604, 2, 8),
(605, 2, 8),
(606, 2, 8),
(607, 2, 8),
(608, 2, 8),
(609, 2, 8),
(610, 2, 8),
(611, 2, 8),
(612, 2, 8),
(613, 3, 8),
(614, 3, 8),
(615, 3, 8),
(616, 3, 8),
(617, 3, 8),
(618, 3, 8),
(619, 3, 8),
(620, 3, 8),
(621, 3, 8),
(622, 3, 8),
(623, 3, 8),
(624, 3, 8),
(625, 3, 8),
(626, 3, 8),
(627, 3, 8),
(628, 3, 8),
(629, 3, 8),
(630, 3, 8),
(631, 3, 8),
(632, 3, 8),
(633, 3, 8),
(634, 3, 8),
(635, 3, 8),
(636, 3, 8),
(637, 3, 8),
(638, 3, 8),
(639, 3, 8),
(640, 3, 8),
(641, 3, 8),
(642, 3, 8),
(643, 3, 8),
(644, 3, 8),
(645, 3, 8),
(646, 3, 8),
(647, 3, 8),
(648, 3, 8),
(649, 3, 8),
(650, 3, 8),
(651, 3, 8),
(652, 3, 8),
(653, 3, 8),
(654, 3, 8),
(655, 3, 8),
(656, 3, 8),
(657, 3, 9),
(658, 3, 9),
(659, 3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE `operarios` (
  `id_operario` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `foto_operario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, 'Sergio Cabral', '21321321', 'Concepcion del Uruguay', 'rocamora 1199', 'sergio_396@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_insumos`
--

CREATE TABLE `sector_insumos` (
  `id_sector` int(12) NOT NULL,
  `sector_deposito` varchar(35) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `foto_sector` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector_insumos`
--

INSERT INTO `sector_insumos` (`id_sector`, `sector_deposito`, `latitud`, `longitud`, `foto_sector`) VALUES
(1, 'Sector de Herramientas', 21321313213, 231321321321, NULL),
(2, 'Sector de Ejes', 32123131, 5646512, NULL),
(10, 'Sector insumos pequeños', 213123123, 3123123123, NULL),
(11, 'Sector rodados', 982938, 9080958, NULL),
(12, 'Casa de Esteban', -32.485824594181636, -58.269491866303724, NULL),
(13, 'Casa leopoldillo', -32.49451220840749, -58.3121711781132, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres_usuario` varchar(35) NOT NULL,
  `apellido_usuario` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres_usuario`, `apellido_usuario`, `email`, `contrasenia`) VALUES
(10, 'Sergio', 'Cabral', 'sergiocabral.1990@gmail.com', '$2y$10$WCY92FPqfHRFnqA8lQ/n.O3a19s0Ec92YhNzxnl./eltpWGJHuVvG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD UNIQUE KEY `id_compra` (`id_compra`),
  ADD KEY `id_prov` (`id_prov`);

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
-- Indices de la tabla `insumo_deposito`
--
ALTER TABLE `insumo_deposito`
  ADD PRIMARY KEY (`id_ins_dep`),
  ADD UNIQUE KEY `id_ins_dep` (`id_ins_dep`),
  ADD KEY `id_insumo` (`id_insumo`,`id_compra`),
  ADD KEY `id_insumo_2` (`id_insumo`),
  ADD KEY `id_compra` (`id_compra`),
  ADD KEY `id_compra_2` (`id_compra`),
  ADD KEY `id_insumo_3` (`id_insumo`),
  ADD KEY `id_compra_3` (`id_compra`),
  ADD KEY `id_compra_4` (`id_compra`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id_insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `insumoxproveedor`
--
ALTER TABLE `insumoxproveedor`
  MODIFY `id_insumoxprov` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `insumo_deposito`
--
ALTER TABLE `insumo_deposito`
  MODIFY `id_ins_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660;
--
-- AUTO_INCREMENT de la tabla `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id_operario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `sector_insumos`
--
ALTER TABLE `sector_insumos`
  MODIFY `id_sector` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tipo_insumo`
--
ALTER TABLE `tipo_insumo`
  MODIFY `id_tipoinsumo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_idprov` FOREIGN KEY (`id_prov`) REFERENCES `proveedores` (`id_proveedor`);

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
  ADD CONSTRAINT `fk_insumo` FOREIGN KEY (`id_insumo`) REFERENCES `insumos` (`id_insumo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proveedorinsumo` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `insumo_deposito`
--
ALTER TABLE `insumo_deposito`
  ADD CONSTRAINT `fk_idcompra` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idinsumo` FOREIGN KEY (`id_insumo`) REFERENCES `insumos` (`id_insumo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
