-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2020 a las 18:30:28
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

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
(1, 'Aseo'),
(2, 'Alimento'),
(3, 'Acesorios'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `servicio` int(11) NOT NULL,
  `fechaCita` date NOT NULL,
  `HoraCita` time NOT NULL,
  `observaciones` varchar(45) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `idDetalleMascotaCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('39b7435b221edb922afe658595f3e0e5d088ecdc', '::1', 1597814864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373831343836343b),
('952a747601426876938f61b9b0bad3b5104171b9', '::1', 1597814877, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373831343836343b),
('8dd747dba5a99b1f221af5fa97734407ae88ca9a', '::1', 1597851405, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835313430353b),
('ac78c0e625ed3f8177590cfad07da4f803eb1bfd', '::1', 1597852911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835323931313b),
('177d9164c6f011d897907d66909d9d8aea0eb306', '::1', 1597854451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835343435313b),
('6ed1b1ec5fc8d8f7ca4f41e195d6ee19a97c0ca2', '::1', 1597855823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835353832333b),
('77481565d5ee055e2b46f624f9536e5ea6dc2e2f', '::1', 1597856339, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835363333393b),
('39a083f0f80f978f1fccfacc24d111bc206129a6', '::1', 1597861144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373836313134343b),
('2e14743776fb6dbb6095a48f9da9c75a435ac7f7', '::1', 1597861461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373836313436313b),
('bcf2f980aedb21d209f14085cbef7e152edc6851', '::1', 1597861474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373836313436313b),
('0a482f0f1e6675b54b8f296f096e6980d10d8c8f', '::1', 1597887881, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373838373838313b),
('99ec68ad530e6fe06a3e2c7b7863eec4dc9f3f0b', '::1', 1597888610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373838383631303b),
('f9d3475c8510706230cf51596ff3e9e1eab92446', '::1', 1597888927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373838383932373b),
('220f81184f54a813f2c389161cf8671bd8ad8c92', '::1', 1597890202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839303230323b),
('4d87ca587def1e66e4d8f0cdb81aa38156cf5a15', '::1', 1597890609, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839303630393b),
('03f49cc5082044477e5e55b3055bdbf3fb4e6166', '::1', 1597890957, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839303935373b),
('7abfe5cdbd9da5bbfe8ed25b14c7fb81a4897f4c', '::1', 1597891283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839313238333b),
('0e2fa3c61591594436af191bce33d05ad3a80323', '::1', 1597891817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839313831373b),
('eabd22b34a39dae51c6dea23935f773b995945a9', '::1', 1597892461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839323436313b),
('818cea75c55edcfa0da5f6afae2b8fb4ea995fa9', '::1', 1597893411, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839333431313b),
('7f228e5afa0c8436ae5947236ef17aa995e4845e', '::1', 1597893961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839333936313b),
('c1fe4d025af83a0043e91b60cfe759ee96b32348', '::1', 1597894310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839343331303b),
('0e022d3f3a4871348f7b793b981235420ef99062', '::1', 1597894718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839343731383b),
('c33aba68465fba3daf748ba7c3babed62f1ffe37', '::1', 1597895324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839353332343b),
('abe1e1daa41d025eb44e13c9c856996a0e9272b8', '::1', 1597896379, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839363337393b),
('050b98598d40410c1466a29893114a45ae7df95c', '::1', 1597896703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839363730333b),
('6b40434bc035e80fe455ca70a2ebf4ed6f5822ce', '::1', 1597897041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839373034313b),
('39f5a317c1b9482f721f09a712c6cab2b3391420', '::1', 1597897342, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839373334323b),
('8acae7af33f993ad2595b31e1569f61bd74be1c1', '::1', 1597897947, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839373934373b),
('8d1440587bec4c928c49f3f5e90ef5877c63a178', '::1', 1597897950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839373934373b),
('ab4bd7f622efcd9b53238e6423e640bbb7c38238', '::1', 1597898539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839383533393b),
('aeec8a051fb646c9e79206f79b1b2eb9c8dbca2c', '::1', 1597898553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839383533393b),
('ffbb5621324ea17ddb768eed35f08d24a6510d37', '::1', 1597898643, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839383536333b),
('4cd441a138d252010c78612ac92e5b7424c9d323', '::1', 1597898870, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839383634393b),
('82bf82e7715c924014c60c2bdcc8651bd9d2e2c5', '::1', 1597899160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839393131313b),
('3c82afcbd27ede3fd3311452d7c802e6aff04553', '::1', 1597899206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839393137383b),
('b7f21544ec6bb660b3743db7f61aa68a233ac6c2', '::1', 1597899592, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839393539323b),
('e1c0abaa425a92c46a0de63d02ac327a06f5c7cc', '::1', 1597899924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373839393932343b),
('f72bc709214368e28d2da7ad8375d355f9e1214f', '::1', 1597900666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930303636363b),
('2076a213152a3d9483bd846e40a90c709995d87f', '::1', 1597901063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930313036333b),
('3b52a9d32a475b64ba0a69d24a3ed8861a718491', '::1', 1597901366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930313336363b),
('8b81b2fb4af7a4fd863f10439525d7578bb17551', '::1', 1597902725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930323732353b),
('5c4f44a38ed8d3e1e5be7319a1072863615d13da', '::1', 1597903349, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930333334393b),
('16f767b67bee3f66d7eb4d70c6c7a549922dcf41', '::1', 1597903698, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930333639383b61637475616c697a61727c733a37303a22456c2070726f766565646f72204361726e69636f73206465206d6173636f74617320532e412073652068612061637475616c697a61646f20636f7272656374616d656e74652e223b5f5f63695f766172737c613a313a7b733a31303a2261637475616c697a6172223b733a333a226f6c64223b7d),
('b7fd36386e5438209cf8a751a384b8e2de8e4cee', '::1', 1597905523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930353532333b),
('26bc0f794b75e9d1111c4d44a27d246344cb1748', '::1', 1597906338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930363333383b),
('b2bd3abbee0f2d7d96d82222e82b7ee8f097870b', '::1', 1597906659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930363635393b),
('c9ad75efa048af7d48200799786515ffe671da34', '::1', 1597906981, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930363938313b),
('64f3ffbd090dfc472f297c9bc7be01dff840b9a8', '::1', 1597907109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373930373030323b),
('88526cb37f423416dee40396d16521d69e0a92fa', '::1', 1597938796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373933383739363b),
('73abac8234d4eb1187f15011c0b8a453b9975ea6', '::1', 1597938857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373933383739363b);

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
  `direccion` varchar(45) DEFAULT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompras` int(11) NOT NULL,
  `documentoProveedor` varchar(45) NOT NULL,
  `facturaProveedor` varchar(45) NOT NULL,
  `fechaFacturaProveedor` date NOT NULL,
  `fechaRegistroCompra` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idCompras`, `documentoProveedor`, `facturaProveedor`, `fechaFacturaProveedor`, `fechaRegistroCompra`, `estado`) VALUES
(1, '1234567', '4435', '2020-08-12', '2020-08-07', '1'),
(2, '123123121sdadsd2', '44243', '2020-08-27', '2020-08-06', '1');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallemascotacliente`
--

CREATE TABLE `detallemascotacliente` (
  `idDetalleMascotaCliente` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `documentoCliente` varchar(20) NOT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallevacunamascota`
--

CREATE TABLE `detallevacunamascota` (
  `idDetalleVacunaMascota` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `idVacuna` varchar(45) NOT NULL,
  `dosis` int(11) NOT NULL,
  `fechaAplicacion` date NOT NULL,
  `fechaProxima` date NOT NULL,
  `observaciones` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especieproducto`
--

CREATE TABLE `especieproducto` (
  `idEspecieProducto` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `idFormaPago` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcion`) VALUES
(1, 'Zenú'),
(2, 'Nutrican');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `idTipoMascota` int(11) NOT NULL,
  `nombreMascota` varchar(45) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `idraza` int(11) NOT NULL,
  `peso` double DEFAULT NULL,
  `fechaCumpleanos` date DEFAULT NULL,
  `edad` varchar(20) NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `idPresentacion` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idPresentacion`, `descripcion`) VALUES
(1, 'Caja'),
(2, 'Paquete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(45) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `idPresentacion` int(11) NOT NULL,
  `valorMedida` double NOT NULL,
  `idUnidadMedida` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `idEspecieProducto` int(11) NOT NULL,
  `indicaciones` varchar(45) DEFAULT NULL,
  `contradindicaciones` varchar(45) DEFAULT NULL,
  `edadAplicacion` varchar(45) DEFAULT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`documento`, `idTipoDocumento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `nombreContacto`, `diaVisita`, `observaciones`, `fechaRegistro`) VALUES
('02535', 4, 'Cassady', '095-401-7146', '08 86 37 31 54', '2500 Nulla. Calle', 'id.magna.et@ultricesVivamusrhoncus.net', 'Alan P. Velazquez', 'Jueves', 'Tomsk Oblast', '2020-08-20 06:56:37'),
('02919', 6, 'Basia', '031-980-7998', '07 42 52 22 42', 'Apdo.:596-7165 Laoreet C.', 'convallis.erat@non.net', 'Roanna X. Carney', 'Martes', 'Ank', '2020-08-20 06:53:41'),
('03634', 3, 'Karly', '090-881-2784', '04 12 52 49 67', '3404 Ante Carretera', 'tellus@risus.org', 'Winifred W. Newman', 'Miercoles', 'SIC', '2020-08-20 06:56:37'),
('03774', 4, 'Darrel', '059-619-3724', '04 70 01 06 59', '8475 Interdum. C.', 'augue.ut.lacus@felisorci.edu', 'Joel N. Nash', 'Jueves', 'NO', '2020-08-20 06:53:41'),
('04010', 5, 'Mufutau', '059-538-9815', '05 40 46 30 08', 'Apartado núm.: 846, 6257 Vestibulum ', 'vulputate@mieleifend.co.uk', 'Orla V. Dean', 'Lunes', 'Tamaulipas', '2020-08-20 06:56:37'),
('07022', 3, 'Alec', '015-215-0812', '09 94 60 42 86', 'Apdo.:177-1900 Velit Calle', 'mi.lorem@idrisus.net', 'Kiona E. Hurley', 'Martes', 'LA', '2020-08-20 06:56:37'),
('07431', 3, 'Jeanette', '001-193-7444', '08 04 65 94 03', '8596 Lorem Avda.', 'vitae.odio.sagittis@natoque.ca', 'Laith G. Maxwell', 'Jueves', 'Wie', '2020-08-20 06:53:41'),
('07446', 1, 'Tyrone', '020-695-7615', '06 56 77 77 05', '843-8077 Consectetuer Carretera', 'sapien@enim.ca', 'Kalia W. Luna', 'Miercoles', 'Quebec', '2020-08-20 06:53:41'),
('08485', 1, 'Tallulah', '084-966-8892', '06 08 66 37 35', 'Apartado núm.: 301, 2756 Non, Avenida', 'dictum.augue@faucibusid.edu', 'Jolie E. Rivera', 'Jueves', 'Balochistan', '2020-08-20 06:56:37'),
('08922', 3, 'Phyllis', '005-850-5289', '04 98 93 90 70', '263-4295 Pretium Calle', 'gravida.sit.amet@Nullamvitaediam.org', 'Callum Y. Brady', 'Sabado', 'Katsina', '2020-08-20 06:56:37'),
('09608', 3, 'Lareina', '055-089-1356', '09 24 00 53 95', '231-6621 Lacus. Av.', 'purus.mauris@pede.edu', 'Jordan V. Combs', 'Miercoles', 'U', '2020-08-20 06:53:41'),
('10184', 1, 'Jamalia', '006-226-1999', '05 22 20 65 61', '323-1890 Semper ', 'Vestibulum@diamProindolor.ca', 'Ian O. Petty', 'Viernes', 'ORL', '2020-08-20 06:56:37'),
('10256', 3, 'Kelsey', '072-926-7826', '05 37 16 67 59', 'Apartado núm.: 256, 5374 Porttitor Calle', 'sem.magna.nec@nullaIntegerurna.org', 'Clare K. Summers', 'Jueves', 'Gl', '2020-08-20 06:53:41'),
('10424', 2, 'Linus', '050-468-7856', '04 19 04 32 45', 'Apdo.:708-273 Pellentesque Carretera', 'Quisque.tincidunt@ultricesVivamusrhoncus.net', 'Price H. Cortez', 'Jueves', 'JT', '2020-08-20 06:56:37'),
('123123121sdadsd2', 1, 'Alimentos', '4444021', '3218976756', '', '', 'Fredy', 'Lunes', '', '2020-08-19 05:21:56'),
('1234567', 4, 'Carnicos de mascotas S.A', '4444021', '123123123', 'Avenida 33 # 20 - 14', '132@hotmail.com', 'David Sánchez', 'Lunes', '', '2020-08-20 03:17:16'),
('13048', 3, 'Brock', '023-503-5084', '04 93 86 40 88', '6058 Odio. Av.', 'Nulla.interdum.Curabitur@eros.edu', 'Malachi H. Head', 'Martes', 'LAZ', '2020-08-20 06:53:41'),
('13355', 3, 'Kennedy', '056-091-3826', '07 88 32 67 71', '9060 Enim. Avenida', 'nisl.Nulla@tortordictum.org', 'Forrest A. Mcdowell', 'Jueves', 'Stockholms län', '2020-08-20 06:56:37'),
('13635', 3, 'Joshua', '049-518-6661', '07 07 27 80 75', 'Apartado núm.: 137, 5505 Sed, Calle', 'semper@imperdietornare.com', 'Tate B. Lynn', 'Jueves', 'Missouri', '2020-08-20 06:53:41'),
('14578', 5, 'Jackson', '067-496-0033', '03 71 06 14 05', 'Apartado núm.: 964, 4311 Gravida Avenida', 'a.malesuada@acturpis.net', 'Ross O. Sosa', 'Lunes', 'WO', '2020-08-20 06:56:37'),
('14696', 5, 'Stella', '029-426-1214', '09 20 91 69 05', 'Apdo.:712-740 Vel, Calle', 'Sed@luctusetultrices.ca', 'Ivan D. Grant', 'Miercoles', 'Valparaíso', '2020-08-20 06:56:37'),
('14888', 4, 'Beatrice', '058-856-7526', '05 52 58 50 03', '533-6674 Ut Avenida', 'elit.sed.consequat@nonummyipsum.ca', 'Darius J. Allison', 'Sabado', 'Gye', '2020-08-20 06:52:06'),
('16216', 4, 'Macon', '055-487-4865', '06 89 07 18 49', '1816 Augue C/', 'pede@odio.edu', 'Sierra D. Prince', 'Martes', 'South Gyeongsang', '2020-08-20 06:56:37'),
('16244', 3, 'Tatyana', '004-217-8813', '09 34 46 92 52', 'Apartado núm.: 439, 6810 Urna Calle', 'mi.lorem.vehicula@arcuAliquamultrices.net', 'Emery I. Gilbert', 'Viernes', 'HB', '2020-08-20 06:53:41'),
('17168', 5, 'Craig', '096-278-9479', '09 55 99 66 01', 'Apartado núm.: 423, 4791 Purus, ', 'primis.in.faucibus@orci.ca', 'Hadley M. Potts', 'Jueves', 'MA', '2020-08-20 06:53:41'),
('18586', 6, 'Hollee', '068-148-4733', '03 64 61 87 21', '2686 Facilisis Calle', 'odio.tristique@blandit.com', 'Nita U. Shields', 'Sabado', 'CN', '2020-08-20 06:53:41'),
('19280', 6, 'Phillip', '079-648-2721', '01 99 08 76 81', '4026 Sagittis. Ctra.', 'In@laciniaSed.ca', 'Tashya Z. Petty', 'Sabado', 'Provence-Alpes-Côte d\'Azur', '2020-08-20 06:56:37'),
('21457', 2, 'Colin', '065-287-3469', '05 39 50 41 53', 'Apartado núm.: 441, 290 Nec Avenida', 'nec.ante.blandit@consectetueradipiscing.ca', 'Cooper P. Stokes', 'Martes', 'Bur', '2020-08-20 06:56:37'),
('22284', 6, 'Jessica', '044-331-0116', '05 49 30 02 54', '6376 Felis Avda.', 'dolor@ornarelectus.ca', 'Kylee Y. Miles', 'Lunes', 'Gyeonggi', '2020-08-20 06:53:41'),
('26828', 4, 'Sonya', '078-585-3659', '08 67 07 56 16', 'Apartado núm.: 464, 5260 Aliquet Carretera', 'pharetra.ut@eget.com', 'Timothy N. Cooke', 'Jueves', 'Atlántico', '2020-08-20 06:53:41'),
('28532', 3, 'Beatrice', '026-748-8865', '07 76 08 52 11', 'Apartado núm.: 284, 1984 Aliquam ', 'Nullam.vitae@ornare.org', 'Demetria T. Sutton', 'Lunes', 'PA', '2020-08-20 06:53:41'),
('30177', 1, 'Coby', '075-106-3475', '09 99 56 31 80', '9691 Vulputate, C/', 'lacinia.orci.consectetuer@Duisatlacus.edu', 'Sarah V. Caldwell', 'Viernes', 'KGN', '2020-08-20 06:53:41'),
('30931', 2, 'Riley', '051-766-4359', '09 94 09 33 25', '234-4434 Ut, Av.', 'justo@porttitor.ca', 'Carolyn F. Cantrell', 'Viernes', 'Gl', '2020-08-20 06:56:37'),
('32585', 2, 'Paran', '026-266-7372', '09 30 40 37 98', 'Apdo.:954-5178 Dis Ctra.', 'Etiam@enim.ca', 'Francis F. Anderson', 'Martes', 'Alajuela', '2020-08-20 06:59:38'),
('34184', 5, 'Kasper', '098-852-5752', '01 22 33 84 33', 'Apdo.:482-4954 Sagittis ', 'Praesent.eu.nulla@Integeraliquamadipiscing.com', 'Arsenio F. Morin', 'Jueves', 'Alabama', '2020-08-20 06:54:18'),
('34238', 6, 'Fritz', '015-498-1406', '09 69 45 55 04', 'Apartado núm.: 614, 1999 Praesent Avda.', 'porttitor.vulputate@augueeu.com', 'Nola V. Dixon', 'Sabado', 'Galicia', '2020-08-20 06:53:41'),
('37433', 5, 'Kitra', '061-800-0181', '05 24 61 39 88', '471 Rhoncus C.', 'orci.Ut@urnanecluctus.co.uk', 'Harlan L. Sears', 'Viernes', 'PUG', '2020-08-20 06:56:37'),
('40018', 6, 'Gabriel', '030-802-6239', '06 51 91 80 72', 'Apdo.:630-9044 Est, Av.', 'Cras.eget.nisi@eueuismodac.net', 'Murphy L. Waters', 'Viernes', 'Nizhny Novgorod Oblast', '2020-08-20 06:52:06'),
('41635', 5, 'Alexander', '005-288-3993', '02 39 18 84 49', 'Apdo.:840-5473 Proin Avda.', 'Suspendisse.sed.dolor@maurisut.net', 'Zachary O. Horn', 'Lunes', 'EX', '2020-08-20 06:56:37'),
('42919', 4, 'Connor', '026-318-2766', '07 45 73 78 91', '1298 Lobortis Ctra.', 'Duis@nibh.ca', 'Lacy U. Carver', 'Martes', 'Astrakhan Oblast', '2020-08-20 06:56:37'),
('43159', 5, 'Declan', '019-794-8543', '01 57 88 47 50', '259-9198 Rutrum ', 'auctor@justo.edu', 'Evangeline X. Bass', 'Viernes', 'Jönköpings län', '2020-08-20 06:56:37'),
('43824', 1, 'Sierra', '075-096-2812', '03 31 37 63 18', 'Apdo.:763-4233 Tristique Av.', 'amet.nulla@luctuslobortis.com', 'Linus D. Wheeler', 'Jueves', 'Leinster', '2020-08-20 06:53:41'),
('45536', 5, 'Beatrice', '046-395-4883', '07 68 42 93 41', 'Apartado núm.: 848, 1425 Nunc C/', 'eget.metus@Integer.org', 'Justine R. Cotton', 'Lunes', 'Alajuela', '2020-08-20 06:56:37'),
('45816', 4, 'Daniel', '059-339-8076', '01 75 27 62 15', '126-3064 In C/', 'imperdiet.erat@miDuis.com', 'Patrick R. Randall', 'Jueves', 'AK', '2020-08-20 06:56:37'),
('46564', 3, 'Gage', '053-958-9948', '09 73 47 10 65', 'Apartado núm.: 170, 708 Fermentum Ctra.', 'Nullam.scelerisque.neque@Nuncquis.ca', 'Hector W. Shaw', 'Miercoles', 'WY', '2020-08-20 06:56:37'),
('47161', 6, 'Sylvia', '013-485-1220', '05 68 98 84 92', '245-3241 Et Avenida', 'commodo.ipsum.Suspendisse@Integersem.ca', 'Abra A. Figueroa', 'Lunes', 'Niger', '2020-08-20 06:53:41'),
('47521', 4, 'Colton', '031-035-2474', '03 91 56 32 29', 'Apartado núm.: 953, 7089 Cursus Avda.', 'magna.Nam@laciniamattisInteger.net', 'Tamekah T. Adkins', 'Lunes', 'Vienna', '2020-08-20 06:52:06'),
('47627', 5, 'Omar', '064-711-7080', '06 59 57 65 69', '9538 Quisque Ctra.', 'Maecenas.malesuada@Praesentluctus.co.uk', 'Myles J. Estrada', 'Lunes', 'Nord-Pas-de-Calais', '2020-08-20 06:56:37'),
('49112', 5, 'Lisandra', '032-442-2780', '05 54 53 80 18', 'Apartado núm.: 999, 6419 Semper Avenida', 'eleifend.egestas@ornare.com', 'Amir Y. Lloyd', 'Viernes', 'North Island', '2020-08-20 06:53:41'),
('49248', 1, 'Keelie', '079-606-2148', '06 68 78 20 31', 'Apartado núm.: 519, 2048 Commodo ', 'Aenean.gravida@nullavulputatedui.ca', 'Whilemina G. Dalton', 'Viernes', 'Munster', '2020-08-20 06:52:06'),
('50224', 6, 'Melinda', '019-944-0080', '05 59 93 05 45', 'Apartado núm.: 898, 1842 Ligula Av.', 'amet@antelectus.ca', 'Amery U. Ryan', 'Martes', 'South Jeolla', '2020-08-20 06:56:37'),
('50406', 1, 'Scarlett', '049-099-7757', '01 75 07 24 51', 'Apdo.:227-2954 Cras Avda.', 'natoque.penatibus.et@Aliquamornare.com', 'Hannah Z. May', 'Sabado', 'Wie', '2020-08-20 06:53:41'),
('50485', 3, 'Asher', '028-000-2934', '09 52 76 70 27', '9285 Pharetra ', 'eu.neque.pellentesque@Curabitur.com', 'Rebekah T. Welch', 'Martes', 'Ist', '2020-08-20 06:53:41'),
('50600', 5, 'Amanda', '009-009-9743', '09 56 32 57 65', 'Apartado núm.: 745, 2361 Cras Av.', 'Sed.id.risus@amet.ca', 'Suki N. Whitfield', 'Viernes', 'Nord-Pas-de-Calais', '2020-08-20 06:53:41'),
('51340', 6, 'Ella', '063-363-5595', '09 34 32 34 77', 'Apartado núm.: 656, 5358 Nunc C/', 'pulvinar.arcu.et@egetvarius.ca', 'Sawyer H. Oneal', 'Sabado', 'Gan', '2020-08-20 06:53:41'),
('51743', 5, 'Octavius', '062-640-9462', '01 92 05 65 06', 'Apartado núm.: 568, 9751 Dui Carretera', 'orci.lobortis.augue@quis.co.uk', 'Timon L. Burt', 'Viernes', 'ANT', '2020-08-20 06:53:41'),
('51958', 3, 'Kaseem', '091-883-3622', '04 47 58 44 21', 'Apartado núm.: 424, 2005 Eu, Calle', 'dolor.dolor.tempus@neque.com', 'Myles H. Jones', 'Miercoles', 'Carmarthenshire', '2020-08-20 06:53:41'),
('52244', 3, 'Kenyon', '048-893-2789', '09 35 99 87 31', 'Apartado núm.: 947, 257 Metus. Av.', 'sed@sit.edu', 'Alika X. Bradley', 'Martes', 'MA', '2020-08-20 06:53:41'),
('52933', 1, 'Cullen', '084-896-4143', '04 53 15 65 97', 'Apdo.:926-5919 Inceptos ', 'nibh.Aliquam.ornare@erat.org', 'Dakota F. Carney', 'Jueves', 'V', '2020-08-20 06:53:41'),
('53102', 2, 'Caryn', '066-973-4328', '07 54 93 76 35', '7021 Tempor Ctra.', 'Vestibulum.ante.ipsum@sitametmassa.com', 'Jeanette W. Neal', 'Lunes', 'Tennessee', '2020-08-20 06:52:06'),
('55339', 5, 'Hunter', '029-678-6555', '05 27 31 99 44', '984-3493 Ante Carretera', 'Donec.nibh.Quisque@Utsemper.org', 'Gannon J. Barber', 'Miercoles', 'NI', '2020-08-20 06:56:37'),
('55580', 1, 'Ryan', '019-486-6757', '07 57 79 31 24', 'Apartado núm.: 548, 1561 Accumsan ', 'Pellentesque.ut.ipsum@interdumfeugiat.net', 'Willa V. Newton', 'Jueves', 'Ontario', '2020-08-20 06:56:37'),
('56167', 3, 'Wyatt', '064-179-2692', '06 34 48 64 97', 'Apdo.:731-8958 Ac Av.', 'augue.porttitor@anteipsumprimis.co.uk', 'Bree J. Lindsey', 'Viernes', 'ON', '2020-08-20 06:53:41'),
('59447', 6, 'Kimberly', '019-953-5260', '03 07 13 79 78', '9346 Consectetuer Carretera', 'volutpat.nunc@felisullamcorperviverra.com', 'Plato G. Keith', 'Miercoles', 'JI', '2020-08-20 06:53:41'),
('60401', 6, 'Gavin', '033-913-7534', '04 17 71 91 37', '2177 Tellus. C/', 'sed.dui.Fusce@lectuspedeet.org', 'Jocelyn P. Mack', 'Lunes', 'SL', '2020-08-20 06:56:37'),
('62144', 3, 'Griffith', '096-661-7072', '01 06 18 58 50', 'Apartado núm.: 381, 3182 Ultrices Avenida', 'quam@mitempor.org', 'Barbara E. Oliver', 'Lunes', 'Ank', '2020-08-20 06:52:06'),
('62256', 6, 'Morgan', '059-348-6763', '06 05 63 35 81', '5366 Scelerisque Carretera', 'Sed.congue.elit@euultrices.com', 'Martin Z. Leonard', 'Jueves', 'Omsk Oblast', '2020-08-20 06:56:37'),
('62753', 2, 'Randall', '056-853-9331', '03 61 75 74 09', 'Apdo.:670-2174 Ligula. Carretera', 'sapien@molestiepharetranibh.edu', 'Blake H. Cervantes', 'Viernes', 'Oregon', '2020-08-20 06:53:41'),
('64400', 1, 'Jasmine', '045-309-5479', '01 72 44 39 35', '597-4380 Massa. C/', 'tempus@risusIn.ca', 'Glenna C. Mcleod', 'Sabado', 'SI', '2020-08-20 06:56:37'),
('65272', 6, 'Amos', '077-446-9563', '02 01 50 30 43', '242-7243 Curabitur Ctra.', 'eros@necligulaconsectetuer.com', 'Debra D. Hensley', 'Sabado', 'WI', '2020-08-20 06:56:37'),
('67579', 4, 'Harper', '014-078-9690', '04 96 91 50 18', '4842 Montes, Avda.', 'Nam@sociisnatoquepenatibus.org', 'Fleur I. Davenport', 'Jueves', 'NI', '2020-08-20 06:53:41'),
('67858', 5, 'Kim', '066-150-3397', '07 28 66 21 70', 'Apartado núm.: 225, 5124 Nunc ', 'Morbi.non.sapien@eteuismod.org', 'Patrick Z. Donaldson', 'Jueves', 'LE', '2020-08-20 06:56:37'),
('67912', 3, 'Armand', '069-669-7535', '09 33 56 52 39', '624-3956 Ligula. C.', 'ac.turpis.egestas@nondui.com', 'Hanae F. Boyd', 'Viernes', 'Lazio', '2020-08-20 06:56:37'),
('68804', 3, 'Germane', '058-191-8505', '02 48 58 54 68', '7312 Risus Carretera', 'ultrices.a.auctor@velpedeblandit.co.uk', 'Levi Q. Blanchard', 'Viernes', 'Antwerpen', '2020-08-20 06:53:41'),
('69051', 6, 'Raymond', '042-044-2515', '09 94 56 29 01', '135-9903 Feugiat Carretera', 'Vivamus.euismod@ultricesa.co.uk', 'Martina M. Reynolds', 'Sabado', 'Atlántico', '2020-08-20 06:52:06'),
('69608', 1, 'Evangeline', '007-338-0458', '08 73 10 91 80', '983-6709 Quam C/', 'Donec.est@Nullam.net', 'Hedy W. Vinson', 'Martes', 'O', '2020-08-20 06:56:37'),
('70152', 6, 'Zeus', '077-060-4509', '02 86 78 63 54', '6215 Ornare, C/', 'vel.faucibus.id@nullavulputatedui.com', 'Dana H. Collins', 'Martes', 'łódzkie', '2020-08-20 06:53:41'),
('71558', 1, 'Daniel', '081-619-3545', '01 34 13 98 81', '1871 Sem. C.', 'neque.non.quam@quispedePraesent.net', 'Stephen M. Medina', 'Viernes', 'South Island', '2020-08-20 06:52:06'),
('72498', 5, 'Ignacia', '090-297-8243', '08 51 67 75 71', '9517 Ut Calle', 'sollicitudin.a@utpharetra.com', 'Jillian Z. Luna', 'Sabado', 'SJ', '2020-08-20 06:56:37'),
('73785', 1, 'Acton', '099-057-4064', '06 25 73 12 67', 'Apartado núm.: 895, 8311 Felis Av.', 'egestas.blandit@interdumSed.co.uk', 'Buckminster E. Ortiz', 'Martes', 'ML', '2020-08-20 06:56:37'),
('74186', 3, 'Hamilton', '043-001-4363', '08 42 07 37 63', '205-1314 Purus Av.', 'Duis@egestasblanditNam.com', 'Jonah J. Morrison', 'Viernes', 'Lubuskie', '2020-08-20 06:52:06'),
('74441', 4, 'Kyra', '085-336-4135', '06 79 84 40 50', '272-9808 Elit. Ctra.', 'dictum@turpis.edu', 'Tatyana J. Maddox', 'Martes', 'CAM', '2020-08-20 06:53:41'),
('75630', 5, 'Bert', '090-736-9664', '02 41 51 02 78', '8692 Faucibus C/', 'fringilla.est.Mauris@risusat.ca', 'Grace H. Velasquez', 'Viernes', 'Gilgit Baltistan', '2020-08-20 06:53:41'),
('76012', 1, 'Jonas', '321465464', '05 27 61 88 78', 'Apartado núm.: 596, 2046 In Av.', 'Sed@etnetus.co.uk', 'Benjamin U. Boyd', 'Sabado', 'TAS', '2020-08-20 07:04:11'),
('77383', 1, 'Hedy', '078-352-5715', '07 31 04 55 26', '897-9327 Est Av.', 'Nam@nuncsed.net', 'Aquila A. Hester', 'Miercoles', 'Antioquia', '2020-08-20 06:53:41'),
('79402', 6, 'Xanthus', '091-951-6063', '07 94 51 48 97', '303-8235 Magna. ', 'arcu.Vestibulum.ante@dis.co.uk', 'Harding Z. Dunlap', 'Jueves', 'Lincolnshire', '2020-08-20 06:53:41'),
('80278', 2, 'Brody', '093-697-6813', '05 51 02 31 04', 'Apdo.:805-1298 Rutrum C/', 'est.mauris@id.co.uk', 'Stewart U. Dixon', 'Miercoles', 'SJ', '2020-08-20 06:53:41'),
('80290', 4, 'Maggie', '097-359-7453', '08 24 89 73 81', 'Apdo.:423-3090 Aliquam ', 'lectus.pede.ultrices@ametdapibus.org', 'Britanni K. Blanchard', 'Sabado', 'Henegouwen', '2020-08-20 06:53:41'),
('80636', 2, 'Tanisha', '065-337-8676', '05 78 11 22 24', 'Apdo.:313-8187 Lacus. Avda.', 'sit.amet.faucibus@mattisCraseget.org', 'Eric G. Mcknight', 'Viernes', 'SP', '2020-08-20 06:56:37'),
('81315', 4, 'Acton', '082-806-7372', '06 97 65 33 58', '9873 Dui. Calle', 'placerat.Cras@cubiliaCurae.co.uk', 'Kyla I. Browning', 'Sabado', 'Luxemburg', '2020-08-20 06:53:41'),
('82183', 5, 'Allen', '092-491-8709', '06 70 62 69 99', '252-5257 Est. C.', 'dis.parturient@aliquet.co.uk', 'Gay Y. Flynn', 'Miercoles', 'QC', '2020-08-20 06:56:37'),
('84387', 3, 'Colette', '023-981-6916', '08 83 24 00 00', 'Apdo.:155-7488 Ligula C/', 'vehicula@hendreritconsectetuer.com', 'Abra I. Brock', 'Miercoles', 'VIC', '2020-08-20 06:52:06'),
('84647', 3, 'Drake', '054-236-0875', '04 49 64 41 18', 'Apartado núm.: 659, 4707 Tincidunt Calle', 'pharetra@Aliquamadipiscinglobortis.co.uk', 'Jael E. Douglas', 'Martes', 'Andhra Pradesh', '2020-08-20 06:53:41'),
('85728', 4, 'Beatrice', '081-222-3604', '05 09 64 42 86', '3182 Arcu Avda.', 'tellus.lorem@orciDonec.ca', 'Octavius O. Pennington', 'Martes', 'Metropolitana de Santiago', '2020-08-20 06:53:41'),
('85973', 4, 'Adrienne', '072-546-7041', '03 29 33 24 46', '1011 Sodales Calle', 'Nullam.velit.dui@aliquetmetus.ca', 'Quin R. Stephens', 'Miercoles', 'BE', '2020-08-20 06:56:37'),
('87303', 3, 'Gareth', '016-305-4211', '09 79 89 76 48', 'Apartado núm.: 772, 4576 Metus Calle', 'magna.malesuada@ullamcorper.edu', 'Wing Q. Michael', 'Sabado', 'Andalucía', '2020-08-20 06:53:41'),
('87437', 1, 'Louis', '037-908-7780', '06 40 79 15 65', 'Apartado núm.: 385, 1301 At Avenida', 'vel.lectus@loremtristiquealiquet.net', 'Hop N. Burke', 'Sabado', 'New Brunswick', '2020-08-20 06:53:41'),
('88170', 5, 'Amal', '012-171-9460', '04 36 62 50 04', 'Apartado núm.: 708, 4012 Donec C.', 'dui@dui.ca', 'Devin B. Williams', 'Viernes', 'U.', '2020-08-20 06:56:37'),
('88636', 5, 'Orla', '044-408-1413', '04 59 77 20 49', 'Apartado núm.: 348, 3818 Penatibus ', 'Donec.est.mauris@tortorInteger.ca', 'Basil W. Combs', 'Martes', 'KN', '2020-08-20 06:56:37'),
('90855', 4, 'Desiree', '053-943-8654', '03 21 83 11 35', 'Apartado núm.: 162, 6419 Proin Calle', 'consectetuer.cursus@elementumdui.org', 'Leslie T. Williamson', 'Martes', 'South Gyeongsang', '2020-08-20 06:56:37'),
('91115', 6, 'David', '010-228-6363', '02 12 19 77 73', '9207 Egestas C/', 'Quisque@vestibulumMauris.edu', 'Noelle Q. Bean', 'Miercoles', 'Haryana', '2020-08-20 06:56:37'),
('91116', 6, 'Benjamin', '004-643-6337', '06 39 91 32 81', 'Apdo.:503-3185 Nibh. Carretera', 'purus.sapien@Suspendissenonleo.edu', 'Shelby J. Fields', 'Martes', 'QLD', '2020-08-20 06:53:41'),
('92656', 6, 'Amelia', '024-996-0440', '09 70 20 21 32', '427-2696 Felis. Ctra.', 'vitae.sodales@necluctus.org', 'Declan C. Sims', 'Martes', 'JI', '2020-08-20 06:53:41'),
('92664', 1, 'Galvin', '069-414-4456', '03 46 76 89 56', '9095 Magna. ', 'dolor.vitae@consectetueradipiscingelit.ca', 'Ebony H. Larsen', 'Sabado', 'Veracruz', '2020-08-20 06:53:41'),
('92694', 5, 'Constance', '024-742-8546', '07 00 02 30 24', 'Apartado núm.: 228, 8631 Nec ', 'ipsum.Suspendisse.sagittis@pedePraesent.ca', 'Fredericka W. Buckner', 'Sabado', 'Delta', '2020-08-20 06:56:37'),
('93971', 4, 'Caldwell', '060-274-1989', '06 40 40 90 49', 'Apdo.:355-8627 Sed Carretera', 'lobortis.quis.pede@lacusQuisque.edu', 'Yuri X. Raymond', 'Lunes', 'MP', '2020-08-20 06:53:41'),
('95405', 3, 'Trevor', '075-474-6226', '06 61 81 05 17', '3661 Porttitor Ctra.', 'tincidunt.nibh.Phasellus@Cras.edu', 'Kirestin Q. Anderson', 'Jueves', 'Alajuela', '2020-08-20 06:56:37'),
('97131', 6, 'Keiko', '004-043-6547', '08 09 70 18 60', '1242 Cursus Av.', 'dolor.tempus.non@necenim.edu', 'Cade C. Kirk', 'Jueves', 'CT', '2020-08-20 06:56:37'),
('97505', 3, 'Ryder', '022-759-6845', '09 29 38 73 59', '520-9159 Auctor Av.', 'egestas.ligula@atiaculisquis.ca', 'Hu Y. Gonzales', 'Jueves', 'Central Java', '2020-08-20 06:56:37'),
('97779', 4, 'Jamal', '009-653-0308', '02 04 08 17 69', '315-3823 Mi. Avenida', 'purus.gravida@sitametnulla.edu', 'Britanney T. Horne', 'Jueves', 'East Java', '2020-08-20 06:56:37'),
('99230', 1, 'Nathaniel', '062-546-1805', '01 36 73 92 95', '7430 Consectetuer Ctra.', 'lorem.Donec@sociosquadlitora.ca', 'Odysseus I. Barnes', 'Viernes', 'South Island', '2020-08-20 06:56:37'),
('99890', 1, 'Amber', '097-361-8324', '01 48 64 71 29', 'Apartado núm.: 466, 3634 Magnis Carretera', 'vestibulum@laoreetlectusquis.com', 'Eaton E. English', 'Martes', 'Quebec', '2020-08-20 06:53:41');

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
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(45) NOT NULL,
  `idTipoServicio` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `recomendacionesPrevias` varchar(80) NOT NULL,
  `recomendacionesPosteriores` varchar(80) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'Cédula de extranjería'),
(4, 'Nit'),
(5, 'Dni'),
(6, 'RUT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomascota`
--

CREATE TABLE `tipomascota` (
  `idTipoMascota` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE `tiposervicio` (
  `idTipoServicio` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

CREATE TABLE `unidadmedida` (
  `idUnidadMedida` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`idUnidadMedida`, `descripcion`) VALUES
(1, 'Kilogramo'),
(2, 'Gramos');

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
  `fechaRegistro` date NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idFactura` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `vendedor` int(11) NOT NULL,
  `documentoCliente` varchar(20) NOT NULL,
  `descuentoTotal` int(11) NOT NULL,
  `formaPago` int(11) NOT NULL,
  `nComprobante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_Cita_Servicio_idx` (`servicio`),
  ADD KEY `fk_Cita_Estado1_idx` (`idEstado`),
  ADD KEY `fk_Cita_DetalleMascotaCliente_idx` (`idDetalleMascotaCliente`);

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
  ADD KEY `fk_Compras_Proveedor1_idx` (`documentoProveedor`);

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
-- Indices de la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  ADD PRIMARY KEY (`idDetalleMascotaCliente`),
  ADD KEY `fk_DetalleMascotaCliente_Mascota1_idx` (`idMascota`),
  ADD KEY `fk_DetalleMascotaCliente_Cliente1_idx` (`documentoCliente`);

--
-- Indices de la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  ADD PRIMARY KEY (`idDetalleProveedorMarca`),
  ADD KEY `fk_DetalleProveedorMarca_Marca1_idx` (`idMarca`),
  ADD KEY `fk_DetalleProveedorMarca_Proveedor1_idx` (`documentoProveedor`);

--
-- Indices de la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  ADD PRIMARY KEY (`idDetalleVacunaMascota`),
  ADD KEY `fk_DetalleVacunaMascota_Mascota1_idx` (`idMascota`),
  ADD KEY `fk_DetalleVacunaMascota_Producto_idx` (`idVacuna`);

--
-- Indices de la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  ADD PRIMARY KEY (`idDetalleproductofactura`),
  ADD KEY `Fk_detalleproductofactura_Producto_idx` (`producto`),
  ADD KEY `fk_detalleproductofactura_Factura_idx` (`factura`);

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
  ADD KEY `fk_Mascota_TipoMascota1_idx` (`idTipoMascota`);

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
  ADD UNIQUE KEY `contrasena_UNIQUE` (`contrasena`),
  ADD KEY `fk_Usuario_Rol1_idx` (`idRol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `fk_Factura_Vendedor_idx` (`vendedor`),
  ADD KEY `fk_Factura_FormaPago_idx` (`formaPago`),
  ADD KEY `fk_Factura_Cliente1_idx` (`documentoCliente`);

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
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  MODIFY `idDetalleMascotaCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  MODIFY `idDetalleProveedorMarca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  MODIFY `idDetalleVacunaMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especieproducto`
--
ALTER TABLE `especieproducto`
  MODIFY `idEspecieProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `idFormaPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mision`
--
ALTER TABLE `mision`
  MODIFY `idmision` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntaseguridad`
--
ALTER TABLE `preguntaseguridad`
  MODIFY `idPreguntaSeguridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `idPresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `idquienesSomos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idraza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  MODIFY `idTipoMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `idTipoServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vision`
--
ALTER TABLE `vision`
  MODIFY `idvision` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_Cita_DetalleMascotaCliente` FOREIGN KEY (`idDetalleMascotaCliente`) REFERENCES `detallemascotacliente` (`idDetalleMascotaCliente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Cita_Estado` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cita_Servicio` FOREIGN KEY (`servicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_TipoDocumento1` FOREIGN KEY (`TipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_Compras_Proveedor1` FOREIGN KEY (`documentoProveedor`) REFERENCES `proveedor` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `fk_DetalleCompra_Compras1` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompras`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleCompra_Producto1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  ADD CONSTRAINT `fk_DetalleMascotaCliente_Cliente1` FOREIGN KEY (`documentoCliente`) REFERENCES `cliente` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleMascotaCliente_Mascota1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleproveedormarca`
--
ALTER TABLE `detalleproveedormarca`
  ADD CONSTRAINT `fk_DetalleProveedorMarca_Marca1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleProveedorMarca_Proveedor1` FOREIGN KEY (`documentoProveedor`) REFERENCES `proveedor` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Mascota` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Producto` FOREIGN KEY (`idVacuna`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_Mascota_Raza` FOREIGN KEY (`idraza`) REFERENCES `raza` (`idraza`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mascota_TipoMascota` FOREIGN KEY (`idTipoMascota`) REFERENCES `tipomascota` (`idTipoMascota`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_Marca` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_Presentacion` FOREIGN KEY (`idPresentacion`) REFERENCES `presentacion` (`idPresentacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_UnidadMedida1` FOREIGN KEY (`idUnidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto_especieproducto1` FOREIGN KEY (`idEspecieProducto`) REFERENCES `especieproducto` (`idEspecieProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_Factura_Cliente` FOREIGN KEY (`documentoCliente`) REFERENCES `cliente` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Factura_FormaPago` FOREIGN KEY (`formaPago`) REFERENCES `formapago` (`idFormaPago`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Factura_Vendedor` FOREIGN KEY (`vendedor`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
