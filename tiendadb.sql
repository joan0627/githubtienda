-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2020 a las 02:31:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `idCarrusel` int(11) NOT NULL,
  `ruta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `descripcion`) VALUES
(1, 'Vacuna'),
(2, 'Medicamento'),
(3, 'Accesorio'),
(4, 'Alimento'),
(5, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaprueba`
--

CREATE TABLE `citaprueba` (
  `id` int(11) NOT NULL,
  `idservicio` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mascota` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citaprueba`
--

INSERT INTO `citaprueba` (`id`, `idservicio`, `title`, `mascota`, `descripcion`, `color`, `textColor`, `start`, `end`, `estado`) VALUES
(173, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-01 08:00:00', '2020-12-01 08:15:00', 3),
(174, 2, 'Vacunación contra la rabia', 1, '', '#ed0000', '#000000', '2020-12-01 08:15:00', '2020-12-01 08:30:00', 4),
(175, 1, 'Peluqueria', 2, '', '#073ded', '#000000', '2020-12-01 17:30:00', '2020-12-01 18:30:00', 3),
(176, 2, 'Vacunación contra la rabia', 2, '', '#073ded', '#000000', '2020-12-01 12:35:00', '2020-12-01 12:50:00', 3),
(177, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-01 17:55:00', '2020-12-01 18:10:00', 3),
(178, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-03 08:00:00', '2020-12-03 08:15:00', 3),
(179, 1, 'Peluqueria', 2, '', '#073ded', '#000000', '2020-12-03 09:00:00', '0000-00-00 00:00:00', 3),
(180, 2, 'Vacunación contra la rabia', 2, '', '#ed0000', '#000000', '2020-12-03 11:30:00', '0000-00-00 00:00:00', 4),
(181, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-05 08:00:00', '2020-11-30 16:57:41', 3),
(182, 1, 'Peluqueria', 2, '', '#073ded', '#000000', '2020-12-05 13:00:00', '2020-11-30 16:59:00', 3),
(183, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-10 08:30:00', '2020-12-10 08:45:00', 3),
(184, 2, 'Vacunación contra la rabia', 3, '', '#e0dd0d', '#021838', '2020-12-10 17:11:00', '2020-12-10 17:26:00', 1),
(185, 1, 'pruebaaaa', 2, 'dasasdas', '#073ded', '#000000', '2020-11-30 13:15:00', '2020-11-30 17:16:00', 3),
(186, 1, 'Peluqueria Asunto', 1, 'El lapso de peluquería es de una hora.', '#f08502', '#04214f', '2020-12-01 08:00:00', '0000-00-00 00:00:00', 5),
(187, 1, 'Peluqueria cita', 3, 'Lapso 1 hora', '#ed0000', '#000000', '2020-11-30 20:00:00', '0000-00-00 00:00:00', 4),
(188, 1, 'Peluqueria', 3, '', '#0de068', '#a30015', '2020-12-03 11:35:00', '2020-12-03 12:35:00', 1),
(190, 3, 'Tratamiento antipulgas', 3, '', '#ed0000', '#000000', '2020-12-04 08:30:00', '2020-12-04 08:45:00', 4),
(191, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-11-30 08:30:00', '2020-11-30 09:36:00', 1),
(192, 1, 'Peluqueria', 3, '', '#0de068', '#a30015', '2020-12-15 08:00:00', '2020-12-15 09:00:00', 1),
(193, 1, 'Peluqueria', 2, '', '#0de068', '#a30015', '2021-01-07 09:00:00', '2021-01-07 10:00:00', 1),
(194, 566, 'Wilson masajes', 7, '', '#0de068', '#a30015', '2020-12-18 15:30:00', '2020-12-18 16:30:00', 1),
(195, 1, 'Peluqueria', 6, '', '#073ded', '#000000', '2020-12-01 13:30:00', '2020-12-01 13:06:00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('63d9376147770213f3ce84feb54d11be70d90420', '::1', 1606947232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363934373233323b69645573756172696f7c733a313a2232223b6e6f6d6272655573756172696f7c733a363a2277696c736f6e223b6e6f6d6272657c733a363a2257696c736f6e223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22323030223b6c6f67696e7c623a313b),
('7b0a2169315de95374d39acdc077c94ca4a49cbe', '::1', 1606948020, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363934383032303b69645573756172696f7c733a313a2232223b6e6f6d6272655573756172696f7c733a363a2277696c736f6e223b6e6f6d6272657c733a363a2257696c736f6e223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22323030223b6c6f67696e7c623a313b62757371756564617c733a303a22223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226f6c64223b7d),
('a6d217dd6ae3d1c30a30d1d13dda449b98459dcb', '::1', 1606948351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363934383335313b69645573756172696f7c733a313a2232223b6e6f6d6272655573756172696f7c733a363a2277696c736f6e223b6e6f6d6272657c733a363a2257696c736f6e223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22323030223b6c6f67696e7c623a313b),
('536ab5deb51549abd8f0de302a22e949f5209c55', '::1', 1606949219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363934393231393b),
('87fc865450c3983a798cf0820c9153fc1b5d8f50', '::1', 1606949616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363934393631363b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('dff2c4eb7853ba818a7cc129bd555493f7382b9e', '::1', 1606950144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935303134343b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('268d772b908af4fe3df38a094d384abbcc8183fe', '::1', 1606952052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935323035323b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('904ef3d2e7c1db731b61a3f6f24a317b7b0ebb30', '::1', 1606952446, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935323434363b),
('7ef2cdb17f6cbaaa1bd38e1895a8c9d5be67bc08', '::1', 1606952791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935323739313b),
('ff3846d04fc4d5830a854934b2d6a3aab8a6264a', '::1', 1606953392, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935333339323b),
('f718d27a913fe04e11487216515cbe499a6997e0', '::1', 1606953980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935333938303b),
('b52ec7ad42498750a63a8ae023f3698e463d2e8b', '::1', 1606954351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935343335313b),
('19a333d332ad69f5b3434c7e8243a3b72fdb9313', '::1', 1606954703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935343730333b),
('78aa60d2fd56ea6099d88a8da384438d1afce01d', '::1', 1606955217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935353231373b),
('7d0f672b289756f06a689c021e38e394ab74c14c', '::1', 1606955648, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935353634383b),
('f14f71e20f28d28b8f862f82296d5125f1c620ca', '::1', 1606955971, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935353937313b),
('f45cf7ba1b063cc0821c5575e6f677342815c88f', '::1', 1606956309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935363330393b),
('72edce8f0b590e668429a3bb949a5320cd43fcd4', '::1', 1606956584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363935363330393b),
('de4eeb75f4eb0a7360387c04bf773dc0fd593ce4', '::1', 1606967661, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936373636313b),
('56ed397be8db8a447650907e9ab696944c11d4b1', '::1', 1606968212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936383231323b),
('bb0924066c302907c40fae5ab09924aad831e4d9', '::1', 1606968563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936383536333b),
('c4d6e103eb424ab1ca00e8d4a21ca80a4df2ceba', '::1', 1606968897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936383839373b),
('a8c535938750c7ba58734d35951ca1e189ffc623', '::1', 1606969245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936393234353b),
('64b446169a44284d83c100e29b5bb1cfcbe2f389', '::1', 1606969574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363936393537343b),
('2942cbd62b2ba0ea8a0d1ac39a06d093a2924562', '::1', 1606970655, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937303635353b),
('72e6f35c03fc7dad039a43357f97c9800c05faf8', '::1', 1606974828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937343832383b),
('9ecd015781c19d08451b4e3ce732016f6b4d4a6a', '::1', 1606975531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937353533313b),
('12457eec9a84d2f932d4f693461bb34d64d68645', '::1', 1606975936, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937353933363b),
('9789255b9aaf05b1fad5449d3214d144b0c4f0ca', '::1', 1606978743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937383734333b),
('1632f3d17ce7a83d9d4a05ca33c09bfefa4a2c04', '::1', 1606979965, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363937393936353b),
('30311b6376a64332444283307114550c5cdc3340', '::1', 1606980285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363938303238353b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('7b6d167a211b7d3d2f3bcf1ee3ccf47a4e2b10d4', '::1', 1606980730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363938303733303b69645573756172696f7c733a313a2232223b6e6f6d6272655573756172696f7c733a383a226b61746532303230223b6e6f6d6272657c733a383a224b61746572696e65223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b61757468696e6963696f736573696f6e7c733a383a224b61746572696e65223b5f5f63695f766172737c613a313a7b733a31363a2261757468696e6963696f736573696f6e223b733a333a226f6c64223b7d),
('2c116421f72b5fe1eea5d25c9cc02a47565da7a7', '::1', 1606981011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630363938313030353b69645573756172696f7c733a313a2232223b6e6f6d6272655573756172696f7c733a383a226b61746532303230223b6e6f6d6272657c733a383a224b61746572696e65223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b61757468696e6963696f736573696f6e7c733a383a224b61746572696e65223b5f5f63695f766172737c613a313a7b733a31363a2261757468696e6963696f736573696f6e223b733a333a226f6c64223b7d);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `TipoDocumento` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `numMascotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`TipoDocumento`, `documento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `estado`, `numMascotas`) VALUES
(1, '12369', 'Luis David Sánchez Cano ', '018000114424', '3003456789', NULL, '', 1, 1),
(1, '203562', 'Magnolia', '521235', '625356565', 'Clla  50', 'ddfd@gmail.com', 1, 3),
(2, '25352', 'Robin cano', '22115', '74787445', 'Cll 80', '', 1, 2),
(1, '32131', 'Juan Pérez', '018000114424', '3003456789', ' Carrera 42 # 33 - 80', '', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompras` int(11) NOT NULL,
  `documentoProveedor` varchar(45) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `facturaProveedor` varchar(45) NOT NULL,
  `fechaRegistroCompra` date NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `totalGlobal` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idCompras`, `documentoProveedor`, `idUsuario`, `facturaProveedor`, `fechaRegistroCompra`, `observaciones`, `totalGlobal`, `estado`, `fechahora`) VALUES
(1, '3242342', 1, '911', '2020-12-01', 'Entrada de cuido para gatos cachorros.', 18000, 0, '2020-12-01 09:12:57'),
(2, '3242342', 1, '15689', '2020-12-01', '', 5000, 0, '2020-12-01 15:33:27'),
(3, '3242342', 1, '1255', '2020-12-01', '', 2500, 0, '2020-12-01 15:38:36'),
(4, '2541', 1, '5456', '2020-12-01', '', 29750, 1, '2020-12-01 18:09:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `idDetalleCompra` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `idProducto` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costoProducto` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallecompra`
--

INSERT INTO `detallecompra` (`idDetalleCompra`, `idCompra`, `idProducto`, `cantidad`, `costoProducto`, `iva`) VALUES
(1, 1, '8900', 10, 1800, 0),
(2, 2, '8900', 1, 5000, 0),
(3, 3, '8900', 1, 2500, 0),
(4, 4, '8900', 10, 2500, 4750);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallehistorialmascota`
--

CREATE TABLE `detallehistorialmascota` (
  `idDetalleHistorialMascota` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `idProducto` varchar(45) NOT NULL,
  `dosis` int(11) NOT NULL,
  `idUnidadmedida` int(11) NOT NULL,
  `fechaAplicacion` date NOT NULL,
  `fechaProxima` date NOT NULL,
  `observaciones` varchar(150) NOT NULL,
  `idservicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproveedormarca`
--

CREATE TABLE `detalleproveedormarca` (
  `idDetalleProveedorMarca` int(11) NOT NULL,
  `documentoProveedor` varchar(45) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleproveedormarca`
--

INSERT INTO `detalleproveedormarca` (`idDetalleProveedorMarca`, `documentoProveedor`, `idMarca`) VALUES
(9, '3242342', 1),
(10, '3242342', 2),
(11, '2541', 1),
(12, '2541', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventaproducto`
--

CREATE TABLE `detalleventaproducto` (
  `idDetalleproductofactura` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL,
  `descuentoTotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleventaproducto`
--

INSERT INTO `detalleventaproducto` (`idDetalleproductofactura`, `factura`, `producto`, `cantidad`, `precioVenta`, `descuentoTotal`) VALUES
(3, 1, '8900', 1, 2500, 0),
(4, 2, '8900', 10, 2500, 0),
(5, 3, '8900', 2, 2500, 10),
(6, 4, '8900', 1, 5200, 10),
(7, 5, '8900', 7, 2500, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventaservicio`
--

CREATE TABLE `detalleventaservicio` (
  `idDetalleVentaServicio` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `idDisponibilidad` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `rendering` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `disponibilidad`
--

INSERT INTO `disponibilidad` (`idDisponibilidad`, `title`, `start`, `end`, `rendering`) VALUES
(3, 'No disponible', '2020-11-28 08:00:00', '2020-11-28 13:30:00', ''),
(4, 'No disponible', '2020-11-29 13:43:00', '2020-11-29 18:43:00', ''),
(6, 'No disponible', '2020-12-07 08:00:00', '2020-12-07 10:00:00', ''),
(7, 'No disponible', '2020-12-08 13:10:00', '2020-12-08 19:00:00', ''),
(8, 'No disponible', '2020-12-19 14:00:00', '2020-12-19 17:30:00', ''),
(9, 'No disponible', '2020-12-11 12:00:00', '2020-12-11 17:00:00', ''),
(10, 'No disponible', '2020-12-12 08:00:00', '2020-12-12 14:00:00', ''),
(11, 'No disponible', '2020-12-05 08:00:00', '2020-12-05 13:00:00', ''),
(12, 'No disponible', '2020-12-15 08:00:00', '2020-12-15 13:00:00', ''),
(13, 'No disponible', '2020-12-18 08:00:00', '2020-12-18 14:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especieproducto`
--

CREATE TABLE `especieproducto` (
  `idEspecieProducto` int(11) NOT NULL,
  `descripcionEspecie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especieproducto`
--

INSERT INTO `especieproducto` (`idEspecieProducto`, `descripcionEspecie`) VALUES
(1, 'Canino'),
(2, 'Felino'),
(3, 'Ambos'),
(4, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `descripcion`) VALUES
(1, 'Programada'),
(2, 'En proceso'),
(3, 'Finalizada'),
(4, 'Cancelada'),
(5, 'No asistió');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `idFormaPago` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formapago`
--

INSERT INTO `formapago` (`idFormaPago`, `descripcion`) VALUES
(1, 'Efectivo'),
(2, 'Transferencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL,
  `diaInicio` varchar(10) NOT NULL,
  `diaFin` varchar(10) NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `descripcionMarca` varchar(45) NOT NULL,
  `estadoMarca` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcionMarca`, `estadoMarca`) VALUES
(1, 'Purina', 1),
(2, 'Soya', 1),
(3, 'Nesgar', 0),
(4, 'Mascotorro', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `idTipoMascota` int(11) NOT NULL,
  `nombreMascota` varchar(45) NOT NULL,
  `documentoCliente` varchar(20) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `idraza` int(11) NOT NULL,
  `peso` double DEFAULT NULL,
  `idUnidadMedida` int(11) NOT NULL,
  `fechaCumpleanos` date DEFAULT NULL,
  `edad` varchar(20) NOT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  `estadoMascota` tinyint(1) NOT NULL DEFAULT 1,
  `tiempo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `idTipoMascota`, `nombreMascota`, `documentoCliente`, `sexo`, `idraza`, `peso`, `idUnidadMedida`, `fechaCumpleanos`, `edad`, `observaciones`, `estadoMascota`, `tiempo`) VALUES
(1, 2, 'Rufo', '12369', 'Macho', 2, 20, 1, '2019-10-16', '1', NULL, 1, ''),
(2, 1, 'Dulce', '32131', 'Hembra', 2, 20, 2, '2020-11-02', '1', 'ddd', 1, 'años'),
(3, 1, 'Pacha', '12369', 'Hembra', 1, 20, 1, '2019-10-16', '1', 'asadas', 1, 'años'),
(4, 2, 'Caroline R', '25352', 'Hembra', 1, 25, 2, '2020-12-17', '250', 'Actualizada', 0, 'Dia(s)'),
(5, 2, 'Peluche', '25352', 'Macho', 2, 2, 1, '2020-12-12', '10', 'Nada', 0, 'Mes(es)'),
(6, 2, 'Pepe', '203562', 'Macho', 5, 2.5, 2, '2020-12-24', '1', 'Nada', 1, 'Año(s)'),
(7, 1, 'Chichi', '203562', 'Macho', 15, 5, 1, '2020-12-15', '3', 'N/A', 1, 'Semana(s)'),
(8, 2, 'quintano', '203562', 'Hembra', 1, 5, 1, '2020-12-24', '12', 'N/A', 1, 'Dia(s)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision`
--

CREATE TABLE `mision` (
  `idmision` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntaseguridad`
--

CREATE TABLE `preguntaseguridad` (
  `idPreguntaSeguridad` int(11) NOT NULL,
  `pregunta` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntaseguridad`
--

INSERT INTO `preguntaseguridad` (`idPreguntaSeguridad`, `pregunta`) VALUES
(1, '¿Cuál sería tu trabajo ideal?'),
(2, '¿En qué lugar se conocieron tus padres?'),
(3, '¿Cuál era el nombre de tu primer jefe?'),
(4, '¿Cuál es el barrio de tu infancia?'),
(5, '¿Cuál es el nombre de tu primera mascota?'),
(6, 'Código secreto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `idPresentacion` int(11) NOT NULL,
  `descripcionPresentacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idPresentacion`, `descripcionPresentacion`) VALUES
(1, 'Caja'),
(2, 'Paquete'),
(3, 'Bolsa'),
(4, 'Bulto'),
(5, 'Frasco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(45) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `descripcionProducto` varchar(80) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `idPresentacion` int(11) NOT NULL,
  `valorMedida` double NOT NULL,
  `idUnidadMedida` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `idEspecieProducto` int(11) NOT NULL,
  `indicaciones` varchar(45) DEFAULT NULL,
  `contraindicaciones` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `unidadTiempo` varchar(45) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `checking` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `idCategoria`, `marca`, `idPresentacion`, `valorMedida`, `idUnidadMedida`, `existencia`, `idEspecieProducto`, `indicaciones`, `contraindicaciones`, `edad`, `unidadTiempo`, `precio`, `fechaRegistro`, `estado`, `checking`) VALUES
('8900', 'Concentrado para gatos ', 'Concentrado para gatos cachorros', 4, 1, 2, 1, 1, 17, 1, NULL, NULL, NULL, NULL, 2500, '2020-12-02 21:25:52', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `documento` varchar(45) NOT NULL,
  `idTipoDocumento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `correo` varchar(120) NOT NULL,
  `nombreContacto` varchar(45) NOT NULL,
  `diaVisita` varchar(45) DEFAULT NULL,
  `observaciones` varchar(80) DEFAULT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`documento`, `idTipoDocumento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `nombreContacto`, `diaVisita`, `observaciones`, `fechaRegistro`, `estado`) VALUES
('2541', 2, 'Wilson', '', '3002564569', '', '', 'Junior David', 'Martes', 'pROVEEDOR MAS BARATO', '2020-12-01 18:08:02', 1),
('3242342', 2, 'Eduardo Perez', '1111111', '3003456789', '1111111', '11111@gmail.com', 'Pedro', 'Lunes', '', '2020-12-01 16:37:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `idquienesSomos` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idraza` int(11) NOT NULL,
  `descripcionRaza` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`idraza`, `descripcionRaza`) VALUES
(1, 'Pitbull'),
(2, 'Chihuahua'),
(3, 'Pastor Alemán'),
(4, 'Bulldog'),
(5, 'Poodle'),
(6, 'Husky Siberiano'),
(7, 'Doberman'),
(8, 'Pincher'),
(9, 'French Poodle'),
(10, 'Persa'),
(11, 'Siamés'),
(12, 'Bengala'),
(13, 'Burmés'),
(14, 'Criollo'),
(15, 'Exótico'),
(16, 'Indefinida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `idPreguntaSeguridad` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `respuesta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `idPreguntaSeguridad`, `idUsuario`, `respuesta`) VALUES
(1, 6, 1, '2020'),
(2, 6, 2, '2020'),
(3, 6, 3, '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcion`) VALUES
(100, 'Administrador'),
(200, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(45) NOT NULL,
  `idTipoServicio` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `recomendacionesPrevias` varchar(150) NOT NULL,
  `recomendacionesPosteriores` varchar(80) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `nombreServicio`, `idTipoServicio`, `descripcion`, `recomendacionesPrevias`, `recomendacionesPosteriores`, `precio`, `estado`, `fechaRegistro`) VALUES
(1, 'Peluqueria', 2, 'Peluqueria para perros tamaño grande', 'Traer bozal', 'Mantener peinando tres veces al dia', 30000, 1, '2020-11-26 20:18:33'),
(2, 'Vacunación contra la rabia', 1, 'Vacunacion contra la rabia para perros grandes', 'Traer bozal', 'Vacunar cada año', 15000, 1, '2020-11-27 05:48:39'),
(3, 'Tratamiento antipulgas', 3, 'Trantamiento contra las pulgas', 'Traer bozal', 'Traerlo cada dos meses', 18000, 1, '2020-12-01 04:27:25'),
(566, 'Wilson masajes', 2, 'Wilson da el masaje', 'Venir sin ropa', 'NInguna', 30000, 1, '2020-12-01 17:54:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idTipoDocumento` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDocumento`, `descripcion`) VALUES
(1, 'Cédula de ciudadanía'),
(2, 'Pasaporte'),
(3, 'DNI'),
(4, 'Cédula de extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomascota`
--

CREATE TABLE `tipomascota` (
  `idTipoMascota` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipomascota`
--

INSERT INTO `tipomascota` (`idTipoMascota`, `descripcion`) VALUES
(1, 'Felino'),
(2, 'Canino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE `tiposervicio` (
  `idTipoServicio` int(11) NOT NULL,
  `descripcionTipoServicio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposervicio`
--

INSERT INTO `tiposervicio` (`idTipoServicio`, `descripcionTipoServicio`) VALUES
(1, 'Vacunación'),
(2, 'Cuidado y bienestar'),
(3, 'Desparasitación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

CREATE TABLE `unidadmedida` (
  `idUnidadMedida` int(11) NOT NULL,
  `descripcionUnidadmedida` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`idUnidadMedida`, `descripcionUnidadmedida`) VALUES
(1, 'Kilogramo(s)'),
(2, 'Gramo(s)'),
(3, 'Unidad'),
(4, 'Libra(s)'),
(5, 'Litro(s)'),
(6, 'Mililitro(s)'),
(7, 'Onza(s)'),
(8, 'Centimetro(s)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(1) NOT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `logueos` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `celular`, `nombreUsuario`, `contrasena`, `idRol`, `fechaRegistro`, `estado`, `fechahora`, `logueos`) VALUES
(1, 'Tienda', '0000000000', 'admin', '25f9e794323b453885f5181f1b624d0b', 100, '2020-11-18', 1, '2020-11-19 03:56:27', 36),
(2, 'Katerine', '0000000000', 'kate2020', '25d55ad283aa400af464c76d713c07ad', 100, '2020-12-01', 1, '2020-12-01 17:40:22', 22),
(3, 'Norberto', '3002564569', 'norbe', '25d55ad283aa400af464c76d713c07ad', 200, '2020-12-03', 1, '2020-12-03 07:33:17', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idFactura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vendedor` int(11) NOT NULL,
  `totalGlobal` int(11) NOT NULL,
  `formaPago` int(11) NOT NULL,
  `nComprobante` varchar(45) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idFactura`, `fecha`, `vendedor`, `totalGlobal`, `formaPago`, `nComprobante`, `observaciones`, `fechahora`, `estado`) VALUES
(1, '2020-12-01', 1, 2500, 1, '', '', '2020-12-01 15:27:36', 0),
(2, '2020-12-01', 1, 25000, 2, '5623-9602', 'Pago con transferencia', '2020-12-01 15:28:15', 1),
(3, '2020-12-01', 1, 4500, 2, '12020-5245', 'N/A', '2020-12-01 16:38:14', 0),
(4, '2020-12-01', 1, 4680, 1, '', 'Le di el descuento del 10%', '2020-12-01 18:03:47', 1),
(5, '2020-12-01', 1, 17500, 1, '', '', '2020-12-01 18:09:44', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision`
--

CREATE TABLE `vision` (
  `idvision` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`idCarrusel`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `citaprueba`
--
ALTER TABLE `citaprueba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_servicio_servicio` (`idservicio`),
  ADD KEY `FK_mascota_idMascota` (`mascota`),
  ADD KEY `FK_estado_idEstado` (`estado`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_Cliente_TipoDocumento1_idx` (`TipoDocumento`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompras`),
  ADD KEY `fk_Compras_Proveedor1_idx` (`documentoProveedor`),
  ADD KEY `fk_Compras_Usuarios` (`idUsuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`idDetalleCompra`),
  ADD KEY `fk_DetalleCompra_Compras1_idx` (`idCompra`),
  ADD KEY `fk_DetalleCompra_Producto1_idx` (`idProducto`);

--
-- Indices de la tabla `detallehistorialmascota`
--
ALTER TABLE `detallehistorialmascota`
  ADD PRIMARY KEY (`idDetalleHistorialMascota`),
  ADD KEY `fk_DetalleVacunaMascota_Mascota1_idx` (`idMascota`),
  ADD KEY `fk_DetalleVacunaMascota_Producto_idx` (`idProducto`),
  ADD KEY `fk_Detallehistorialmascota_Unidadmedida` (`idUnidadmedida`),
  ADD KEY `fk_Detallehistorialmascota_servicio` (`idservicio`);

--
-- Indices de la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  ADD PRIMARY KEY (`idDetalleProveedorMarca`),
  ADD KEY `fk_DetalleProveedorMarca_Marca1_idx` (`idMarca`),
  ADD KEY `fk_DetalleProveedorMarca_Proveedor1_idx` (`documentoProveedor`);

--
-- Indices de la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  ADD PRIMARY KEY (`idDetalleproductofactura`),
  ADD KEY `Fk_detalleproductofactura_Producto_idx` (`producto`),
  ADD KEY `fk_detalleproductofactura_Factura_idx` (`factura`);

--
-- Indices de la tabla `detalleventaservicio`
--
ALTER TABLE `detalleventaservicio`
  ADD PRIMARY KEY (`idDetalleVentaServicio`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`idDisponibilidad`);

--
-- Indices de la tabla `especieproducto`
--
ALTER TABLE `especieproducto`
  ADD PRIMARY KEY (`idEspecieProducto`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`idFormaPago`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `fk_Mascota_Raza1_idx` (`idraza`),
  ADD KEY `fk_Mascota_TipoMascota1_idx` (`idTipoMascota`),
  ADD KEY `fk_Mascota_Unidadmedida` (`idUnidadMedida`),
  ADD KEY `fk_Mascota_Cliente` (`documentoCliente`);

--
-- Indices de la tabla `mision`
--
ALTER TABLE `mision`
  ADD PRIMARY KEY (`idmision`);

--
-- Indices de la tabla `preguntaseguridad`
--
ALTER TABLE `preguntaseguridad`
  ADD PRIMARY KEY (`idPreguntaSeguridad`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`idPresentacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_Producto_Categoria1_idx` (`idCategoria`),
  ADD KEY `fk_Producto_UnidadMedida1_idx` (`idUnidadMedida`),
  ADD KEY `fk_Producto_Presentacion1_idx` (`idPresentacion`),
  ADD KEY `fk_Producto_Marca_idx` (`marca`),
  ADD KEY `fk_producto_especieproducto1_idx` (`idEspecieProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_Proveedor_TipoDocumento1_idx` (`idTipoDocumento`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  ADD PRIMARY KEY (`idquienesSomos`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idraza`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `fk_Respuesta_PreguntaSeguridad1_idx` (`idPreguntaSeguridad`),
  ADD KEY `fk_Respuesta_Usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `fk_Servicio_TipoServicio_idx` (`idTipoServicio`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idTipoDocumento`);

--
-- Indices de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  ADD PRIMARY KEY (`idTipoMascota`);

--
-- Indices de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  ADD PRIMARY KEY (`idTipoServicio`);

--
-- Indices de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  ADD PRIMARY KEY (`idUnidadMedida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nombreUsuario` (`nombreUsuario`),
  ADD KEY `fk_Usuario_Rol1_idx` (`idRol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `fk_Factura_Vendedor_idx` (`vendedor`),
  ADD KEY `fk_Factura_FormaPago_idx` (`formaPago`);

--
-- Indices de la tabla `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`idvision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `idCarrusel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `citaprueba`
--
ALTER TABLE `citaprueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `idDetalleCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detallehistorialmascota`
--
ALTER TABLE `detallehistorialmascota`
  MODIFY `idDetalleHistorialMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  MODIFY `idDetalleProveedorMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  MODIFY `idDetalleproductofactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalleventaservicio`
--
ALTER TABLE `detalleventaservicio`
  MODIFY `idDetalleVentaServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `idDisponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `especieproducto`
--
ALTER TABLE `especieproducto`
  MODIFY `idEspecieProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `idFormaPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mision`
--
ALTER TABLE `mision`
  MODIFY `idmision` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntaseguridad`
--
ALTER TABLE `preguntaseguridad`
  MODIFY `idPreguntaSeguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `idPresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `idquienesSomos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idraza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  MODIFY `idTipoMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `idTipoServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vision`
--
ALTER TABLE `vision`
  MODIFY `idvision` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citaprueba`
--
ALTER TABLE `citaprueba`
  ADD CONSTRAINT `FK_estado_idEstado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mascota_idMascota` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_servicio_servicio` FOREIGN KEY (`idservicio`) REFERENCES `servicio` (`idServicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_TipoDocumento1` FOREIGN KEY (`TipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_Compras_Proveedor1` FOREIGN KEY (`documentoProveedor`) REFERENCES `proveedor` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Compras_Usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `fk_DetalleCompra_Compras1` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompras`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleCompra_Producto1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallehistorialmascota`
--
ALTER TABLE `detallehistorialmascota`
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Mascota` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Detallehistorialmascota_Unidadmedida` FOREIGN KEY (`idUnidadmedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Detallehistorialmascota_servicio` FOREIGN KEY (`idservicio`) REFERENCES `servicio` (`idServicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  ADD CONSTRAINT `fk_DetalleProveedorMarca_Marca1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleProveedorMarca_Proveedor1` FOREIGN KEY (`documentoProveedor`) REFERENCES `proveedor` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  ADD CONSTRAINT `Fk_detalleproductofactura_Producto` FOREIGN KEY (`producto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detalleproductofactura_Factura` FOREIGN KEY (`factura`) REFERENCES `venta` (`idFactura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_Mascota_Cliente` FOREIGN KEY (`documentoCliente`) REFERENCES `cliente` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mascota_Raza` FOREIGN KEY (`idraza`) REFERENCES `raza` (`idraza`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mascota_TipoMascota` FOREIGN KEY (`idTipoMascota`) REFERENCES `tipomascota` (`idTipoMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mascota_Unidadmedida` FOREIGN KEY (`idUnidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_Marca` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_Presentacion` FOREIGN KEY (`idPresentacion`) REFERENCES `presentacion` (`idPresentacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_UnidadMedida1` FOREIGN KEY (`idUnidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto_especieproducto1` FOREIGN KEY (`idEspecieProducto`) REFERENCES `especieproducto` (`idEspecieProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_Proveedor_TipoDocumento1` FOREIGN KEY (`idTipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_Respuesta_PreguntaSeguridad1` FOREIGN KEY (`idPreguntaSeguridad`) REFERENCES `preguntaseguridad` (`idPreguntaSeguridad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Respuesta_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_TipoServicio` FOREIGN KEY (`idTipoServicio`) REFERENCES `tiposervicio` (`idTipoServicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_Factura_FormaPago` FOREIGN KEY (`formaPago`) REFERENCES `formapago` (`idFormaPago`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Factura_Vendedor` FOREIGN KEY (`vendedor`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
