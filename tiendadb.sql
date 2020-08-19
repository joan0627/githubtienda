-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2020 a las 17:34:55
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
('8dd747dba5a99b1f221af5fa97734407ae88ca9a', '::1', 1597850762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373835303733393b);

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
  `idProducto` int(11) NOT NULL,
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
  `idVacuna` int(11) NOT NULL,
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
  `producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL
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
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `idPresentacion` int(11) NOT NULL,
  `valorMedida` double NOT NULL,
  `idUnidadMedida` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `indicaciones` varchar(45) DEFAULT NULL,
  `contradindicaciones` varchar(45) DEFAULT NULL,
  `fechaCaducidad` date DEFAULT NULL,
  `aplicacion` varchar(45) DEFAULT NULL,
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
  `correo` varchar(45) NOT NULL,
  `nombreContacto` varchar(45) NOT NULL,
  `diaVisita` varchar(45) DEFAULT NULL,
  `observaciones` varchar(80) DEFAULT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`documento`, `idTipoDocumento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `nombreContacto`, `diaVisita`, `observaciones`, `fechaRegistro`) VALUES
('1 ', 1, 'Zenú S.A', '415151', '26595496565', 'Crr 75', 'carre@gmaijhjhl.com', 'David Sánchez', 'lunes', 'ggg', '2020-08-19 05:27:51'),
('10-13', 1, 'Zenú S.A', '', '26595496565', '', '', 'David Sánchez', 'Viernes', '', '2020-08-19 05:21:56'),
('123123121sdadsd2', 1, 'Alimentos', '4444021', '3218976756', '', '', 'Fredy', 'Lunes', '', '2020-08-19 05:21:56'),
('1234567', 4, 'Carnicos de mascotas S.A', '4444021', '3218976756', 'Avenida 33 # 20 - 14', '132@hotmail.com', 'David Sánchez', 'Lunes', '', '2020-08-19 05:21:56'),
('20-90_80', 4, 'Kanu', '', '3218976756', '', '', 'Tony Gonzalez', 'Lunes', '', '2020-08-19 05:21:56');

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
  ADD KEY `fk_Producto_Marca_idx` (`marca`);

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
  ADD CONSTRAINT `fk_Cita_DetalleMascotaCliente` FOREIGN KEY (`idDetalleMascotaCliente`) REFERENCES `detallemascotacliente` (`idDetalleMascotaCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_DetalleCompra_Compras1` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompras`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleCompra_Producto1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Mascota` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Producto` FOREIGN KEY (`idVacuna`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventaproducto`
--
ALTER TABLE `detalleventaproducto`
  ADD CONSTRAINT `Fk_detalleproductofactura_Producto` FOREIGN KEY (`producto`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE,
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
  ADD CONSTRAINT `fk_Producto_UnidadMedida1` FOREIGN KEY (`idUnidadMedida`) REFERENCES `unidadmedida` (`idUnidadMedida`) ON UPDATE CASCADE;

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
