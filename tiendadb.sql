-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2020 a las 00:02:30
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
  `idcarrusel` int(11) NOT NULL,
  `ruta` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `descripcion`) VALUES
(1, 'alimento para gatos '),
(2, 'alimento para perros'),
(3, 'accesorios'),
(4, 'aseo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `asunto` varchar(45) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `observaciones` varchar(45) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `cliente`, `asunto`, `fechaCita`, `horaCita`, `observaciones`, `idServicio`, `estado`) VALUES
(14, 13, 'Peluqueria Canina 02:00 pm', '2020-06-30', '11:00:00', 'Perro grande', 2, 7),
(15, 14, 'Peluqueria Canina ', '2020-06-30', '12:00:00', 'Perro pequeño', 2, 7),
(16, 16, 'cita vacunacion', '2020-06-30', '03:31:00', 'vacunacion felina', 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompras` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `facturaProveedor` varchar(45) NOT NULL,
  `fechafacturaProveedor` date NOT NULL,
  `fechaRegistroCompra` date NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL,
  `descripcion` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `idDetalleCompra` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costoProducto` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallemascotacliente`
--

CREATE TABLE `detallemascotacliente` (
  `idDetalleMascotaCliente` int(11) NOT NULL,
  `documentoCliente` varchar(20) NOT NULL,
  `idmascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallemascotacliente`
--

INSERT INTO `detallemascotacliente` (`idDetalleMascotaCliente`, `documentoCliente`, `idmascota`) VALUES
(13, '1001661421', 3),
(14, '1001661421', 2),
(15, '71224697', 4),
(16, '71224697', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproductofactura`
--

CREATE TABLE `detalleproductofactura` (
  `idDetalleproductofactura` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleserviciofactura`
--

CREATE TABLE `detalleserviciofactura` (
  `idDetalleserviciofactura` int(11) NOT NULL,
  `factura` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallevacunamascota`
--

CREATE TABLE `detallevacunamascota` (
  `idDetalleVacunaMascota` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `idVacuna` int(11) NOT NULL,
  `dosis` int(11) NOT NULL,
  `fechaAplicacion` datetime NOT NULL,
  `fechaProxima` datetime NOT NULL,
  `observaciones` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `descripcion`) VALUES
(1, 'Atendido'),
(2, 'Cancelado'),
(3, 'No asistio'),
(4, 'En proceso'),
(7, 'Programado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `vendedor` int(11) NOT NULL,
  `descuentoTotal` int(11) NOT NULL,
  `formaPago` int(11) NOT NULL,
  `nComprobante` int(11) DEFAULT NULL,
  `cita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `idFormaPago` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formapago`
--

INSERT INTO `formapago` (`idFormaPago`, `descripcion`) VALUES
(1, 'Efectivo'),
(2, 'tarjeta de credito'),
(3, 'transferencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL,
  `diaInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `diaFin` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcion`) VALUES
(1, 'IPRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `tipoMascota` int(11) NOT NULL,
  `nombreMascota` varchar(45) NOT NULL,
  `raza` int(11) NOT NULL,
  `sexo` varchar(11) NOT NULL,
  `fechaCumpleanos` date NOT NULL,
  `peso` float NOT NULL,
  `unidadMedida` int(11) NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `tipoMascota`, `nombreMascota`, `raza`, `sexo`, `fechaCumpleanos`, `peso`, `unidadMedida`, `observaciones`, `estado`) VALUES
(1, 2, 'Popi', 3, 'Hembra', '2020-05-01', 4, 1, 'felino joven enfermo moquillo', '1'),
(2, 1, 'Rambu', 1, 'Macho', '2020-04-01', 10, 1, 'perro grande enfermo de gripa', '1'),
(3, 2, 'pelos', 3, 'Macho', '2020-03-03', 12, 1, 'gato mediano enfermo de dolor estomago', '1'),
(4, 1, 'Bruno', 2, 'Macho', '2020-03-01', 25, 1, 'perro con lagrimeo en los ojos ', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision`
--

CREATE TABLE `mision` (
  `idMision` int(11) NOT NULL,
  `descripcion` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` varchar(20) NOT NULL,
  `tipoDocumento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `tipoPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `tipoDocumento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `tipoPersona`) VALUES
('1001661421', 1, 'Luis David Sánchez cano', '2222222', '3017474883', 'Carrera 80', 'Davix.sevas@gmail.com', 1),
('71224697', 1, 'Fredy Gil', '2245217', '3115823694', 'cra 36 2055', 'fredybol36@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precioproducto`
--

CREATE TABLE `precioproducto` (
  `idPrecioProducto` int(11) NOT NULL,
  `registroPrecio` int(11) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntaseguridad`
--

CREATE TABLE `preguntaseguridad` (
  `idPreguntaSeguridad` int(11) NOT NULL,
  `pregunta` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntaseguridad`
--

INSERT INTO `preguntaseguridad` (`idPreguntaSeguridad`, `pregunta`) VALUES
(1, 'En que año nacio su padre'),
(2, 'En que año nacio su madre'),
(3, 'Nombre del primer colegio'),
(4, 'Nombre de su primera mascota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `idPresentacion` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idPresentacion`, `descripcion`) VALUES
(1, 'bolsa'),
(2, 'paquete'),
(3, 'botella'),
(4, 'frasco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `unidadMedida` int(11) NOT NULL,
  `valorMedida` float NOT NULL,
  `presentacion` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `utilidad` float NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombreConctato` varchar(45) NOT NULL,
  `diaVisita` varchar(45) NOT NULL,
  `observaciones` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `idquienesSomos` int(11) NOT NULL,
  `descripcion` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idRaza` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`idRaza`, `descripcion`) VALUES
(1, 'Pitbull'),
(2, 'Pastor aleman'),
(3, 'Angora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroprecio`
--

CREATE TABLE `registroprecio` (
  `idRegistroPrecio` int(11) NOT NULL,
  `motivoCambio` varchar(45) NOT NULL,
  `nuevoPrecio` int(11) NOT NULL,
  `fechaInicial` datetime NOT NULL DEFAULT current_timestamp(),
  `fechaFinal` datetime DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroprecio`
--

INSERT INTO `registroprecio` (`idRegistroPrecio`, `motivoCambio`, `nuevoPrecio`, `fechaInicial`, `fechaFinal`, `estado`) VALUES
(1, 'primer precio peluqueria felina', 20000, '2020-05-23 10:29:07', '2020-07-31 00:00:00', 0),
(2, 'Primer precio peluqueria canina', 53000, '2020-05-23 10:29:15', NULL, 1),
(3, '2do precio Peluqueria felina', 40000, '2020-05-23 10:29:24', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `preguntaSeguridad` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `respuesta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(45) NOT NULL,
  `responsable` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `recomendacionesPrevias` varchar(80) NOT NULL,
  `recomendacionesPosteriores` varchar(80) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagenServicio` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `nombreServicio`, `responsable`, `descripcion`, `recomendacionesPrevias`, `recomendacionesPosteriores`, `precio`, `imagenServicio`, `estado`) VALUES
(1, 'Peluqueria felina', 0, 'peluqueria general para gatos ', 'traer el gato con el carnet de las vacunas ', 'no bañar al gato por una semana ', 0, '', 1),
(2, 'peluqueria canina ', 0, 'baño general de perros ', 'traer el carnet de las vacunas ', 'no bañarlo por dos semanas', 0, '', 1),
(3, 'Vacuna gatos', 0, 'servicio de vacunacion ', 'traer todo el carnet de las vacunas ', 'retomar alimentacion de calidad ', 0, '', 1),
(4, 'Vacunas perros', 0, 'vacunacion para perros', 'traer el carnet para vacunas', 'traerlo bañado', 0, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idTipoDocumento` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDocumento`, `descripcion`) VALUES
(1, 'Cédula de ciudadanía'),
(2, 'Cédula de extranjería'),
(3, 'Pasaporte'),
(4, 'Tarjeta de identidad'),
(5, 'Registro civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomascota`
--

CREATE TABLE `tipomascota` (
  `idTipoMascota` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipomascota`
--

INSERT INTO `tipomascota` (`idTipoMascota`, `descripcion`) VALUES
(1, 'Perro'),
(2, 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopersona`
--

CREATE TABLE `tipopersona` (
  `idTipoPersona` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipopersona`
--

INSERT INTO `tipopersona` (`idTipoPersona`, `descripcion`) VALUES
(1, 'Usuario'),
(2, 'cliente'),
(3, 'proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovacuna`
--

CREATE TABLE `tipovacuna` (
  `idTipoVacuna` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipovacuna`
--

INSERT INTO `tipovacuna` (`idTipoVacuna`, `descripcion`) VALUES
(1, 'vacuna felinos'),
(2, 'vacuna caninos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

CREATE TABLE `unidadmedida` (
  `idUnidadMedida` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`idUnidadMedida`, `descripcion`) VALUES
(1, 'kilogramos'),
(2, 'unidad'),
(3, 'paquete'),
(4, 'libras'),
(5, 'mililitros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `personaDocumento` varchar(20) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `rol` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `personaDocumento`, `nombreUsuario`, `contrasena`, `rol`, `fechaRegistro`, `estado`) VALUES
(23, '1001661421', 'Kingcano', '12345469813611', 1, '2020-06-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `idVacuna` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `marca` int(11) NOT NULL,
  `presentacion` int(11) NOT NULL,
  `tipoVacuna` int(11) NOT NULL,
  `valorMedida` int(11) NOT NULL,
  `unidadMedida` int(11) NOT NULL,
  `fechaCaducidad` date NOT NULL,
  `calendario` varchar(80) NOT NULL,
  `indicaciones` varchar(80) NOT NULL,
  `contraindicaciones` varchar(80) NOT NULL,
  `existencias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacuna`
--

INSERT INTO `vacuna` (`idVacuna`, `nombre`, `marca`, `presentacion`, `tipoVacuna`, `valorMedida`, `unidadMedida`, `fechaCaducidad`, `calendario`, `indicaciones`, `contraindicaciones`, `existencias`) VALUES
(4, 'Parvovirus', 1, 4, 1, 1, 5, '2020-06-30', '', 'Se debe de tomar en cuenta el carnet de vacunacion ', '', 10),
(5, 'Distemper', 1, 1, 2, 1, 5, '0000-00-00', '', 'inyectable', 'ninguna', 6),
(6, 'Triplefelina', 1, 1, 1, 1, 5, '0000-00-00', '', 'inyectable', '', 8),
(7, 'Triplefelina', 1, 1, 1, 1, 5, '0000-00-00', '', 'Inyectable', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision`
--

CREATE TABLE `vision` (
  `idVision` int(11) NOT NULL,
  `descripcion` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`idcarrusel`);

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
  ADD KEY `FK_CITA_SERVICIO` (`idServicio`),
  ADD KEY `FK_CITA_ESTADO` (`estado`),
  ADD KEY `FK_CITA_DETALLEMASCOTACLIENTE` (`cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompras`),
  ADD KEY `FK_COMPRAS_PROVEEDOR` (`proveedor`);

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
  ADD KEY `FK_DETALLECOMPRA_COMPRAS` (`idCompra`),
  ADD KEY `FK_DETALLECOMPRA_PRODUCTO` (`idProducto`);

--
-- Indices de la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  ADD PRIMARY KEY (`idDetalleMascotaCliente`),
  ADD UNIQUE KEY `mascota` (`idmascota`),
  ADD KEY `FK_DETALLEMASCOTACLIENTE_PERSONA` (`documentoCliente`);

--
-- Indices de la tabla `detalleproductofactura`
--
ALTER TABLE `detalleproductofactura`
  ADD PRIMARY KEY (`idDetalleproductofactura`),
  ADD KEY `FK_DETALLEFACTURA_FACTURA` (`factura`),
  ADD KEY `FK_DETALLEFACTURA_PRODUCTO` (`producto`);

--
-- Indices de la tabla `detalleserviciofactura`
--
ALTER TABLE `detalleserviciofactura`
  ADD PRIMARY KEY (`idDetalleserviciofactura`),
  ADD KEY `FK_DETALLESERVICIOFACTURA_FACTURA` (`factura`),
  ADD KEY `FK_DETALLESERVICIOFACTURA_SERVICIO` (`idServicio`);

--
-- Indices de la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  ADD PRIMARY KEY (`idDetalleVacunaMascota`),
  ADD KEY `FK_DETALLEVACUNAMASCOTA_MASCOTA` (`idMascota`),
  ADD KEY `FK_DETALLEVACUNAMASCOTA_VACUNA` (`idVacuna`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `FK_FACTURA_FORMAPAGO` (`formaPago`),
  ADD KEY `FK_FACTURA_CITA` (`cita`),
  ADD KEY `FK_FACTURA_USUARIO` (`vendedor`);

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
  ADD KEY `FK_MASCOTA_TIPOMASCOTA` (`tipoMascota`),
  ADD KEY `FK_MASCOTA_RAZA` (`raza`),
  ADD KEY `FK_MASCOTA_UNIDADMEDIDA` (`unidadMedida`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `FK_PERSONA_TIPODOCUMENTO` (`tipoDocumento`),
  ADD KEY `FK_PERSONA_TIPOPERSONA` (`tipoPersona`);

--
-- Indices de la tabla `precioproducto`
--
ALTER TABLE `precioproducto`
  ADD PRIMARY KEY (`idPrecioProducto`),
  ADD KEY `FK_PRECIOPRODUCTO_PRODUCTO` (`producto`),
  ADD KEY `FK_PRECIOPRODUCTO_REGISTROPRECIO` (`registroPrecio`);

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
  ADD KEY `FK_PRODUCTO_PRESENTACION` (`presentacion`),
  ADD KEY `FK_PRODUCTO_UNIDADMEDIDA` (`unidadMedida`),
  ADD KEY `FK_PRODUCTO_CATEGORIA` (`categoria`),
  ADD KEY `FK_PRODUCTO_MARCA` (`marca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`),
  ADD KEY `FK_PROVEEDOR_PERSONA` (`documento`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  ADD PRIMARY KEY (`idquienesSomos`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idRaza`);

--
-- Indices de la tabla `registroprecio`
--
ALTER TABLE `registroprecio`
  ADD PRIMARY KEY (`idRegistroPrecio`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `FK_RESPUESTA_PREGUNTASEGURIDAD` (`preguntaSeguridad`),
  ADD KEY `FK_RESPUESTA_USUARIO` (`usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

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
-- Indices de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  ADD PRIMARY KEY (`idTipoPersona`);

--
-- Indices de la tabla `tipovacuna`
--
ALTER TABLE `tipovacuna`
  ADD PRIMARY KEY (`idTipoVacuna`);

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
  ADD KEY `FK_USUARIO_PERSONA` (`personaDocumento`),
  ADD KEY `FK_USUARIO_ROL` (`rol`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`idVacuna`),
  ADD KEY `FK_VACUNA_TIPOVACUNA` (`tipoVacuna`),
  ADD KEY `FK_VACUNA_MARCA` (`marca`),
  ADD KEY `FK_VACUNAPRESENTACION_PRESENTACION` (`presentacion`),
  ADD KEY `FK_VACUNA_UNIDADMEDIDA` (`unidadMedida`);

--
-- Indices de la tabla `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`idVision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `idcarrusel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  MODIFY `idDetalleMascotaCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detalleproductofactura`
--
ALTER TABLE `detalleproductofactura`
  MODIFY `idDetalleproductofactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalleserviciofactura`
--
ALTER TABLE `detalleserviciofactura`
  MODIFY `idDetalleserviciofactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  MODIFY `idDetalleVacunaMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `idFormaPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `precioproducto`
--
ALTER TABLE `precioproducto`
  MODIFY `idPrecioProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `preguntaseguridad`
--
ALTER TABLE `preguntaseguridad`
  MODIFY `idPreguntaSeguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `idPresentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `idquienesSomos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idRaza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registroprecio`
--
ALTER TABLE `registroprecio`
  MODIFY `idRegistroPrecio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipomascota`
--
ALTER TABLE `tipomascota`
  MODIFY `idTipoMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  MODIFY `idTipoPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipovacuna`
--
ALTER TABLE `tipovacuna`
  MODIFY `idTipoVacuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `idVacuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vision`
--
ALTER TABLE `vision`
  MODIFY `idVision` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_CITA_DETALLEMASCOTACLIENTE` FOREIGN KEY (`cliente`) REFERENCES `detallemascotacliente` (`idDetalleMascotaCliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CITA_ESTADO` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CITA_SERVICIO` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `FK_COMPRAS_PROVEEDOR` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `FK_DETALLECOMPRA_COMPRAS` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompras`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLECOMPRA_PRODUCTO` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallemascotacliente`
--
ALTER TABLE `detallemascotacliente`
  ADD CONSTRAINT `FK_DETALLEMASCOTACLIENTE_MASCOTA` FOREIGN KEY (`idmascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLEMASCOTACLIENTE_PERSONA` FOREIGN KEY (`documentoCliente`) REFERENCES `persona` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleproductofactura`
--
ALTER TABLE `detalleproductofactura`
  ADD CONSTRAINT `FK_DETALLEFACTURA_FACTURA` FOREIGN KEY (`factura`) REFERENCES `factura` (`idFactura`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLEFACTURA_PRODUCTO` FOREIGN KEY (`producto`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleserviciofactura`
--
ALTER TABLE `detalleserviciofactura`
  ADD CONSTRAINT `FK_DETALLESERVICIOFACTURA_FACTURA` FOREIGN KEY (`factura`) REFERENCES `factura` (`idFactura`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLESERVICIOFACTURA_SERVICIO` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallevacunamascota`
--
ALTER TABLE `detallevacunamascota`
  ADD CONSTRAINT `FK_DETALLEVACUNAMASCOTA_MASCOTA` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLEVACUNAMASCOTA_VACUNA` FOREIGN KEY (`idVacuna`) REFERENCES `vacuna` (`idVacuna`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_FACTURA_CITA` FOREIGN KEY (`cita`) REFERENCES `cita` (`idCita`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_FACTURA_FORMAPAGO` FOREIGN KEY (`formaPago`) REFERENCES `formapago` (`idFormaPago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_FACTURA_USUARIO` FOREIGN KEY (`vendedor`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `FK_MASCOTA_RAZA` FOREIGN KEY (`raza`) REFERENCES `raza` (`idRaza`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_MASCOTA_TIPOMASCOTA` FOREIGN KEY (`tipoMascota`) REFERENCES `tipomascota` (`idTipoMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_MASCOTA_UNIDADMEDIDA` FOREIGN KEY (`unidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_PERSONA_TIPODOCUMENTO` FOREIGN KEY (`tipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERSONA_TIPOPERSONA` FOREIGN KEY (`tipoPersona`) REFERENCES `tipopersona` (`idTipoPersona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `precioproducto`
--
ALTER TABLE `precioproducto`
  ADD CONSTRAINT `FK_PRECIOPRODUCTO_PRODUCTO` FOREIGN KEY (`producto`) REFERENCES `producto` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRECIOPRODUCTO_REGISTROPRECIO` FOREIGN KEY (`registroPrecio`) REFERENCES `registroprecio` (`idRegistroPrecio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_PRODUCTO_CATEGORIA` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCTO_MARCA` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCTO_PRESENTACION` FOREIGN KEY (`presentacion`) REFERENCES `presentacion` (`idPresentacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCTO_UNIDADMEDIDA` FOREIGN KEY (`unidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `FK_PROVEEDOR_PERSONA` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `FK_RESPUESTA_PREGUNTASEGURIDAD` FOREIGN KEY (`preguntaSeguridad`) REFERENCES `preguntaseguridad` (`idPreguntaSeguridad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RESPUESTA_USUARIO` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_USUARIO_PERSONA` FOREIGN KEY (`personaDocumento`) REFERENCES `persona` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USUARIO_ROL` FOREIGN KEY (`rol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD CONSTRAINT `FK_VACUNAPRESENTACION_PRESENTACION` FOREIGN KEY (`presentacion`) REFERENCES `presentacion` (`idPresentacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VACUNA_MARCA` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VACUNA_TIPOVACUNA` FOREIGN KEY (`tipoVacuna`) REFERENCES `tipovacuna` (`idTipoVacuna`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VACUNA_UNIDADMEDIDA` FOREIGN KEY (`unidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
