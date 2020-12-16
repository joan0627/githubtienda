-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 01:29:21
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

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
(295, 566, 'Wilson masajes', 3, '', '#0de068', '#a30015', '2020-12-30 12:06:00', '2020-12-30 13:06:00', 1),
(296, 566, 'Wilson masajes', 1, '', '#073ded', '#000000', '2020-12-13 23:32:00', '2020-12-13 23:33:00', 3),
(297, 2, 'Vacunación contra la rabia', 1, '', '#f08502', '#04214f', '0000-00-00 00:00:00', '2020-12-13 23:48:00', 5),
(298, 566, 'Wilson masajes', 1, '', '#ed0000', '#000000', '2020-12-14 12:15:00', '2020-12-14 13:15:00', 4),
(299, 3, 'Tratamiento antipulgas', 3, 'g', '#5e0270', '#f0f8fa', '2020-12-14 12:21:00', '2020-12-14 12:36:00', 1),
(300, 2, 'Vacunación contra la rabia', 3, '', '#073ded', '#000000', '2020-12-13 13:09:00', '2020-12-13 13:10:00', 3),
(301, 2, 'Vacunación contra la rabia', 1, 'jj', '#073ded', '#000000', '2020-12-13 15:05:00', '2020-12-13 15:06:00', 3),
(302, 566, 'Wilson masajes', 2, 'Todo bien', '#073ded', '#000000', '2020-12-13 12:41:00', '2020-12-13 12:42:00', 3);

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
('qm3lr6rhkdof00b62sgfnihg9eb6qhn2', '::1', 1673684249, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637333638343234393b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('hk28ikus9nb6tiedrkgv2a63ntt3vn46', '::1', 1673684250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637333638343234393b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('8jf4m2aobn3m46tap5p042mb2vrt619h', '::1', 1607938934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373933383933343b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('jf9leg8nf531eq5gethh6ncvfbu8vpmv', '::1', 1607939238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373933393233383b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('ag5mh9nl4d1rgjkgh62o5fti2f7jtm7o', '::1', 1607940524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934303532343b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('nom1e93d4rh082ls20gump517si79huu', '::1', 1607940924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934303932343b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('7gqajn5elpjqjv42n0octufefq30lmrd', '::1', 1607941269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934313236393b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('isjvt88aqmpt2qp34r4fnohlbllrfold', '::1', 1607941654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934313635343b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('qddegr8h7en5dqon8hd7i5e51eook5al', '::1', 1607942135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934323133353b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('clsgro8nkknhmrufjj8h05s1alftnrdo', '::1', 1607942462, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934323436323b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('gc07urf9nt1n7ivjpvemeapktnqdvh4v', '::1', 1607942815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934323831353b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('0km5jj4rj854qn1964fjuogllr78dfei', '::1', 1607943460, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934333436303b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('39ok7ka8gk0483feh6fsgi8efgfmc9ea', '::1', 1607943802, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934333830323b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('2jh742frel1fn04p1t07jpsoaec8420a', '::1', 1607945163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934353136333b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('pma3docsjcs423r2dt6skqjo7dpnkqbu', '::1', 1607945472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934353437323b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('vk3gm1mpf2h5u34lb73hhn3cn3rv2fhg', '::1', 1607945781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934353738313b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('o5mosj2r1tcneo7o6rtgh50t4dp2kigk', '::1', 1607946198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934363139383b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('72av68aifu15e2dbln96lf1il35hjqjj', '::1', 1607946605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373934363630353b69645573756172696f7c733a313a2231223b6e6f6d6272655573756172696f7c733a353a2261646d696e223b6e6f6d6272657c733a363a225469656e6461223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('1rn27or2if27k99qme3ftrdpoavc469b', '::1', 1607952306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935323330363b),
('9sus4gc243k958rrk08cls66qn4i5kei', '::1', 1607952932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935323933323b),
('klr9v19f9773069sfcmgra0f75jb0rn9', '::1', 1607954199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935343139393b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('n1bk1vvn11didbghnm339bkdet8nnoai', '::1', 1607953894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935333839343b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b62757371756564617c733a303a22223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226e6577223b7d),
('tvp8dtq2fmaipnj5c9aud1utbue343d0', '::1', 1607954511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935343531313b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('pieiq874u8dnje961g4ng0jvdoumaeon', '::1', 1607954832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935343833323b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('lg6f7tugskml2mnvrvi3m7eagotvq2r5', '::1', 1607956725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935363732353b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('gvkqm20cfvtdjjif1qf49cj9l53av5al', '::1', 1607957029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935373032393b69645573756172696f7c733a313a2237223b6e6f6d6272655573756172696f7c733a31303a22636174656f736f72696f223b6e6f6d6272657c733a31373a224361746572696e6520526573747265706f223b65737461646f7c733a313a2231223b6964526f6c7c733a333a22313030223b6c6f67696e7c623a313b),
('9s1jpfaarrt3jg2lnndchb9dpf0en0d5', '::1', 1607957030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373935373033303b),
('t3v3o57p9tc7njjmj5vndg3tn937h78c', '::1', 1608072032, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383037323033323b);

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
(1, '12369', 'Luis David Sánchez Cano ', '018000114424', '3003456789', 'Crr 80', 'ddfd@gmail.com', 1, 1),
(1, '203562', 'Magnolia', '521235', '625356565', 'Clla  50', 'ddfd@gmail.com', 0, 3),
(2, '2322', 'fsdfsdf', 'sdfsdf', 'fsdfsdf', 'dfsfsd', '', 0, 3),
(2, '25352', 'Robin cano', '22115', '74787445', 'Cll 80', '', 0, 2),
(1, '32131', 'Juan Pérez', '018000114424', '3003456789', ' Carrera 42 # 33 - 80', '', 1, 2),
(1, '43258533', 'lina restrepo sorio', '', '3057804832', '', 'katy1324-1@hotmail.com', 0, 1);

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
(1, '23132', 1, '2525', '2019-01-02', '', 250000, 1, '2020-12-14 10:16:44'),
(2, '23132', 1, '2353', '2020-05-07', '', 20000, 1, '2020-12-14 07:19:18'),
(3, '3242342', 1, '2252', '2020-09-19', '', 500000, 1, '2020-12-14 07:28:15'),
(4, '2541', 1, '20244', '2020-02-08', '', 255221, 1, '2020-12-14 07:21:19'),
(5, '2541', 1, '3636', '2020-12-14', '', 90000, 1, '2020-12-14 07:28:23'),
(6, '2541', 1, '35244', '2020-08-12', '', 500000, 1, '2020-12-14 07:49:10'),
(7, '2541', 1, '4224242', '2020-11-18', '', 325000, 1, '2020-12-14 07:28:34'),
(8, '2541', 1, '888', '2020-06-10', '', 50000, 1, '2020-12-14 07:25:25'),
(9, '2541', 1, '2552', '2020-12-14', '', 20000, 1, '2020-12-14 07:26:19'),
(10, '2541', 1, '3222', '2020-10-20', '', 1000000, 1, '2020-12-14 07:28:45'),
(11, '3242342', 1, '5235', '2020-07-23', '', 1000000, 1, '2020-12-14 07:29:40'),
(12, '2541', 1, '8888', '2020-05-14', '', 525555, 1, '2020-12-14 07:30:03'),
(13, '2541', 1, '555', '2020-03-13', '', 500000, 1, '2020-12-14 07:30:51'),
(14, '2541', 1, '222', '2020-06-20', '', 50000, 1, '2020-12-14 07:31:17'),
(15, '2541', 1, '2424', '2020-03-05', '', 600000, 1, '2020-12-14 07:33:30'),
(16, '3242342', 1, '52252', '2020-04-15', '', 900000, 1, '2020-12-14 07:32:31'),
(17, '2541', 1, '2525', '2020-01-09', '', 15222, 1, '2020-12-14 10:16:31');

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
(18, 1, '100100', 1, 250000, 0),
(19, 2, '100100', 1, 20000, 0),
(20, 3, '333', 20, 25000, 0),
(21, 3, '563', 1, 55422, 0),
(22, 4, '333', 1, 255221, 0),
(23, 5, '333', 2, 450000, 0),
(24, 6, '333', 1, 22222, 0),
(25, 7, '333', 1, 3252323, 0),
(26, 8, '333', 1, 50000, 0),
(27, 9, '333', 1, 20000, 0),
(28, 10, '563', 10, 200000, 0),
(29, 10, '333', 1, 10000, 0),
(30, 11, '333', 1, 1000000, 0),
(31, 12, '333', 1, 525555, 0),
(32, 13, '333', 1, 500000, 0),
(33, 14, '333', 1, 50000, 0),
(34, 15, '333', 1, 10000, 0),
(35, 16, '333', 1, 900000, 0),
(36, 17, '333', 1, 15222, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallehistorialmascota`
--

CREATE TABLE `detallehistorialmascota` (
  `idDetalleHistorialMascota` int(11) NOT NULL,
  `idservicio` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `idProducto` varchar(45) NOT NULL,
  `dosis` int(11) NOT NULL,
  `idUnidadmedida` int(11) NOT NULL,
  `fechaAplicacion` date NOT NULL,
  `fechaProxima` date NOT NULL,
  `observaciones` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallehistorialmascota`
--

INSERT INTO `detallehistorialmascota` (`idDetalleHistorialMascota`, `idservicio`, `idMascota`, `idProducto`, `dosis`, `idUnidadmedida`, `fechaAplicacion`, `fechaProxima`, `observaciones`) VALUES
(37, 2, 1, '1231', 1, 6, '2020-12-09', '2021-01-15', ''),
(38, 2, 1, '1231', 1, 6, '2020-12-09', '2021-01-15', ''),
(39, 2, 1, '1231', 1, 6, '2020-12-09', '2021-01-14', ''),
(40, 2, 1, '34234', 1, 6, '2020-12-09', '2021-02-11', ''),
(41, 2, 1, '1231', 1, 6, '2020-12-09', '2021-01-20', '20 enero no quizo cita.'),
(42, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-03', ''),
(43, 2, 1, '1231', 1, 6, '2020-12-10', '0000-00-00', ''),
(44, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-16', ''),
(45, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-08', ''),
(46, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-17', ''),
(47, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-22', ''),
(48, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-22', ''),
(49, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-15', ''),
(50, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-16', 'Comportamiento de antidoto uv-h Ok - Status glicerina 8.2 ML Auto \nPresión 90-78.1 alta positiva para el canino , celuctosa Formada en la superficie d'),
(51, 2, 1, '1231', 1, 6, '2020-12-10', '2020-12-19', ''),
(52, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-15', 'fdsfsdfsd'),
(53, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-16', 'adsds'),
(54, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-22', ''),
(55, 2, 1, '1231', 1, 6, '2020-12-10', '2020-12-26', ''),
(56, 2, 1, '1231', 1, 6, '2020-12-10', '2021-01-08', ''),
(57, 2, 1, '1231', 1, 6, '2020-12-10', '2020-12-26', ''),
(58, 2, 1, '1231', 1, 6, '2020-12-10', '2020-12-25', ''),
(59, 3, 8, '3030', 23, 2, '2020-12-13', '2020-12-30', 'gfgfgf'),
(60, 2, 3, '3030', 44, 1, '2020-12-13', '2020-12-23', '44'),
(61, 2, 1, '1231', 0, 2, '2020-12-13', '2020-12-29', 'u');

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
(12, '2541', 2),
(16, '23132', 1),
(18, 'gb4', 1),
(20, 'g9859', 1),
(21, '23132', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventaproducto`
--

CREATE TABLE `detalleventaproducto` (
  `idDetalleproductofactura` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleventaproducto`
--

INSERT INTO `detalleventaproducto` (`idDetalleproductofactura`, `factura`, `producto`, `cantidad`, `precioVenta`) VALUES
(14, 4, '333', 2, 40000),
(15, 4, '563', 1, 100000),
(16, 4, '889', 3, 5000),
(17, 5, '563', 1, 2500),
(18, 5, '333', 1, 44444),
(19, 6, '333', 1, 44444),
(20, 6, '889', 1, 2500),
(21, 6, '563', 1, 2500),
(22, 7, '333', 1, 44444),
(23, 7, '563', 1, 2500),
(24, 8, '333', 1, 44444),
(25, 9, '563', 1, 2500),
(26, 9, '333', 1, 44444),
(27, 10, '333', 1, 44444),
(28, 10, '563', 1, 2500);

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
(8, 'No disponible', '2020-12-19 14:00:00', '2020-12-19 17:30:00', ''),
(9, 'No disponible', '2020-12-11 12:00:00', '2020-12-11 17:00:00', ''),
(10, 'No disponible', '2020-12-12 08:00:00', '2020-12-12 14:00:00', ''),
(11, 'No disponible', '2020-12-05 08:00:00', '2020-12-05 13:00:00', ''),
(12, 'No disponible', '2020-12-15 08:00:00', '2020-12-15 13:00:00', ''),
(13, 'No disponible', '2020-12-18 08:00:00', '2020-12-18 14:00:00', ''),
(15, 'No disponible', '2020-12-24 15:00:00', '2020-12-24 08:00:00', ''),
(16, 'No disponible', '2020-12-24 15:00:00', '2020-12-24 16:00:00', ''),
(17, 'No disponible', '2020-12-25 08:00:00', '2020-12-25 08:00:00', ''),
(18, 'No disponible', '2020-12-30 09:00:00', '2020-12-30 11:29:00', ''),
(19, 'No disponible', '2020-12-30 09:10:00', '2020-12-30 10:29:00', '');

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
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `descripcionMarca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcionMarca`) VALUES
(1, 'Purina'),
(2, 'Soya'),
(3, 'Nesgar'),
(4, 'Mascotorro');

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
(1, 2, 'Rufo', '12369', 'Macho', 2, 20, 1, '2019-10-16', '1', NULL, 0, ''),
(2, 1, 'Dulce', '32131', 'Hembra', 2, 20, 2, '2020-11-02', '1', 'ddd', 0, 'años'),
(3, 1, 'Pacha', '12369', 'Hembra', 1, 20, 1, '2019-10-16', '1', 'asadas', 0, 'años'),
(4, 2, 'Caroline R', '25352', 'Hembra', 1, 25, 2, '2020-12-17', '250', 'Actualizada', 0, 'Dia(s)'),
(5, 2, 'Peluche', '25352', 'Macho', 2, 2, 1, '2020-12-12', '10', 'Nada', 0, 'Mes(es)'),
(6, 2, 'Pepe', '203562', 'Macho', 5, 2.5, 2, '2020-12-24', '1', 'Nada', 0, 'Año(s)'),
(7, 1, 'Chichi', '203562', 'Macho', 15, 5, 1, '2020-12-15', '3', 'N/A', 0, 'Semana(s)'),
(8, 2, 'quintano', '203562', 'Hembra', 1, 5, 1, '2020-12-24', '12', 'N/A', 0, 'Dia(s)'),
(9, 2, 'gfddd', '2322', 'Macho', 2, 3, 1, '2021-01-01', '3', '33', 0, 'Semana(s)'),
(10, 2, 'dsfsd', '2322', 'Desconocido', 2, 3, 2, '2020-12-09', '3', '33', 0, 'Semana(s)'),
(11, 2, 'oooo', '2322', 'Desconocido', 2, 33, 1, '2020-12-24', '33', '333', 0, 'Dia(s)'),
(12, 2, 'sahory', '43258533', 'Hembra', 4, 24, 1, '0000-00-00', '9', '', 0, 'Año(s)');

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
  `peso` double DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `idCategoria`, `marca`, `idPresentacion`, `valorMedida`, `idUnidadMedida`, `existencia`, `idEspecieProducto`, `indicaciones`, `contraindicaciones`, `peso`, `precio`, `fechaRegistro`, `estado`) VALUES
('1', 'agility', 'para piel', 4, 2, 3, 1, 1, 3, 3, '', '', 0, 26000, '2020-12-14 14:01:51', 1),
('1001', 'ghg', 'hghg', 3, 2, 1, 555, 2, 555, 1, 'hghg', 'hghghg', 454, 55555, '2020-12-13 03:36:42', 1),
('100100', 'rrrr', 'rrrr', 3, 1, 1, 0, 1, 39, 2, '', '', 0, 333333, '2020-12-14 07:19:18', 1),
('1002', 'ytytry', 'yrtytry', 3, 1, 1, 5555, 1, 556, 1, '', '', 0, 5555, '2020-12-14 07:07:22', 1),
('1003', 'hgjhgj', 'gjhghj', 2, 1, 3, 0, 1, 666, 1, '666', '666', 666, 6666, '2020-12-13 03:41:25', 1),
('1231', 'Parvovirus Vacuna', 'contra rabia', 1, 3, 5, 1, 6, 12, 1, '121312', 'sdsada', NULL, 12000, '2020-12-10 19:28:45', 1),
('3030', 'fdfg', 'fdgfd', 1, 3, 1, 4, 1, 4, 1, '4', '4', 45.2, 44444, '2020-12-13 01:49:26', 1),
('333', 'sfsefe', 'fesfse', 2, 1, 2, 3, 3, 367, 1, '333', '333', 33, 44444, '2020-12-14 11:38:59', 1),
('34234', 'Antirabia', 'Vacuna', 1, 3, 5, 1, 6, 12, 3, '', '', NULL, 10000, '2020-12-11 02:50:40', 0),
('4444', 'dsfsdf', 'sdfsd', 1, 4, 1, 33, 2, 44, 1, '444', '444', 0, 44, '2020-12-13 21:00:38', 1),
('5050', 'ssss', 'sss', 1, 1, 2, 222, 1, 22, 1, 'ss', 'sss', 22, 2222, '2020-12-13 03:34:13', 1),
('563', 'Chunky Adulto', 'Cuido de la caneca 50 kg', 4, 1, 3, 1, 1, 57, 1, '', '', NULL, 2500, '2020-12-14 11:38:59', 1),
('889', 'Chunky  Cachorro Libra', 'Bolsa de cuido chunky x 500g', 4, 1, 3, 500, 2, 9, 1, '', '', NULL, 2500, '2020-12-14 11:35:55', 1),
('8900', 'Concentrado para gatos ', 'Concentrado para gatos cachorros', 4, 1, 2, 1, 1, 17, 1, NULL, NULL, NULL, 2500, '2020-12-12 22:06:52', 1),
('hjghjgh', 'jghjgh', 'jghjgh', 1, 3, 1, 4, 3, 55, 1, '55', '55', 555, 555, '2020-12-13 04:17:45', 0);

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
('23132', 2, 'Wilson', '', '3002564569', '', '', 'Junior David', 'Marteshhhh', '', '2020-12-12 22:05:52', 1),
('2541', 2, 'Wilson', '', '3002564569', '', '', 'Junior David', 'Martes', 'pROVEEDOR MAS BARATO', '2020-12-12 07:36:17', 1),
('3242342', 2, 'Eduardo Perez', '1111111', '3003456789', '1111111', '11111@gmail.com', 'Pedro', 'Lunes', '', '2020-12-01 16:37:02', 1),
('g9859', 1, 'ghjgh', 'jghjgh', 'jjghjgh', 'jghjgh', '', 'ghjgh', 'jghjgh', 'jghjgh', '2020-12-12 22:04:58', 1),
('gb4', 2, '44rg', 'fdgdfg', 'dfgfdg', 'gfdgfd', '', 'fgdg', 'fgdf', 'dfg', '2020-12-13 04:17:49', 0);

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
(3, 6, 3, '2020'),
(4, 6, 4, '2020'),
(5, 5, 7, 'sahory');

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
(566, 'Wilson masajes', 2, 'Wilson da el masaje', 'Venir sin ropa', 'NInguna', 30000, 0, '2020-12-12 22:08:42'),
(567, 'peluqueria mediano ', 2, 'baño,corte de uñas ', 'problemas de piel', 'baño con jabon medicado ', 30, 1, '2020-12-14 14:07:12');

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
(6, 'Mililitro(s)'),
(7, 'Onza(s)'),
(8, 'Centimetro(s)'),
(9, 'sadsa');

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
(1, 'Tienda', '0000000000', 'admin', '25f9e794323b453885f5181f1b624d0b', 100, '2020-11-18', 1, '2020-11-19 03:56:27', 83),
(2, 'Katerine', '0000000000', 'kate2020', '25d55ad283aa400af464c76d713c07ad', 100, '2020-12-01', 1, '2020-12-01 17:40:22', 28),
(3, 'Norberto', '3002564569', 'norbe', '25d55ad283aa400af464c76d713c07ad', 200, '2020-12-03', 1, '2020-12-03 07:33:17', 5),
(4, 'Juan Castano', '3002564569', 'juan123', '25d55ad283aa400af464c76d713c07ad', 200, '2020-12-04', 0, '2020-12-04 21:33:29', 2),
(5, 'Werwerwerw', '333', '333', '25f9e794323b453885f5181f1b624d0b', 100, '2020-12-13', 1, '2020-12-13 20:19:55', 0),
(6, 'Gjgjyjy', 'jtyjty', 'yyyty', '25f9e794323b453885f5181f1b624d0b', 100, '2020-12-13', 1, '2020-12-13 20:34:37', 0),
(7, 'Caterine Restrepo', '3053662027', 'cateosorio', '5050dfd12f66f716148a60f50f8a1355', 100, '2020-12-14', 1, '2020-12-14 13:39:59', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idFactura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vendedor` int(11) NOT NULL,
  `totalGlobal` int(11) NOT NULL,
  `descuentoTotal` int(11) NOT NULL,
  `formaPago` int(11) NOT NULL,
  `nComprobante` varchar(45) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idFactura`, `fecha`, `vendedor`, `totalGlobal`, `descuentoTotal`, `formaPago`, `nComprobante`, `observaciones`, `fechahora`, `estado`) VALUES
(1, '2020-12-01', 1, 90000, 0, 1, '', '', '2020-10-01 15:27:36', 1),
(2, '2020-12-01', 1, 25000, 0, 2, '5623-9602', 'Pago con transferencia', '2020-12-01 15:28:15', 1),
(3, '2020-12-01', 1, 4500, 0, 2, '12020-5245', 'N/A', '2019-12-01 16:38:14', 0),
(4, '2019-12-14', 1, 195000, 0, 1, '', '', '2020-12-14 02:15:28', 0),
(5, '2020-12-14', 1, 41780, 11, 1, '', '', '2020-12-14 11:31:11', 1),
(6, '2020-12-14', 1, 44500, 10, 1, '', '', '2020-12-14 11:35:55', 1),
(7, '2020-12-14', 1, 46944, 0, 1, '', '', '2020-12-14 11:36:35', 1),
(8, '2020-12-14', 1, 40000, 10, 1, '', '', '2020-12-14 11:37:56', 1),
(9, '2020-12-14', 1, 46944, 0, 1, '', '', '2020-12-14 11:38:33', 1),
(10, '2020-12-14', 1, 46944, 0, 1, '', '', '2020-12-14 11:38:59', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaservicio`
--

CREATE TABLE `ventaservicio` (
  `idFactura` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vendedor` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `idcliente` varchar(20) NOT NULL,
  `descuento` int(11) NOT NULL,
  `totalGlobal` int(11) NOT NULL,
  `formaPago` int(11) NOT NULL,
  `nComprobante` varchar(45) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventaservicio`
--

INSERT INTO `ventaservicio` (`idFactura`, `fecha`, `vendedor`, `idServicio`, `idcliente`, `descuento`, `totalGlobal`, `formaPago`, `nComprobante`, `observaciones`, `fechahora`, `estado`) VALUES
(47, '2020-12-14', 1, 2, '12369', 2, 14700, 1, '', 'jj', '2020-12-14 11:08:39', 1),
(48, '2020-12-14', 1, 566, '32131', 20, 24000, 1, '', 'Todo bien', '2020-12-14 11:44:44', 1);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `ventaservicio`
--
ALTER TABLE `ventaservicio`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `fk_ventaServicio_Vendedor` (`vendedor`),
  ADD KEY `fk_ventaServicio_idServicio` (`idServicio`),
  ADD KEY `fk_ventaServicio_formaPago` (`formaPago`),
  ADD KEY `fk_ventaServicio_cliente` (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `citaprueba`
--
ALTER TABLE `citaprueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `idDetalleCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `detallehistorialmascota`
--
ALTER TABLE `detallehistorialmascota`
  MODIFY `idDetalleHistorialMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  MODIFY `idDetalleProveedorMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  MODIFY `idDetalleproductofactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `idDisponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idraza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventaservicio`
--
ALTER TABLE `ventaservicio`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE,
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

--
-- Filtros para la tabla `ventaservicio`
--
ALTER TABLE `ventaservicio`
  ADD CONSTRAINT `fk_ventaServicio_Vendedor` FOREIGN KEY (`vendedor`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ventaServicio_cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ventaServicio_formaPago` FOREIGN KEY (`formaPago`) REFERENCES `formapago` (`idFormaPago`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ventaServicio_idServicio` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
