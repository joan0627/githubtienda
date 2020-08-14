-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2020 a las 02:37:55
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
  `documentoCliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `observaciones` varchar(500) DEFAULT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`documento`, `idTipoDocumento`, `nombre`, `telefono`, `celular`, `direccion`, `correo`, `nombreContacto`, `diaVisita`, `observaciones`, `fechaRegistro`) VALUES
('01968', 1, 'Addison', '(08) 2033 3449', '0820 861 7549', '5409 Turpis St.', 'non@Pellentesque.ca', 'Cleo Daniel', 'At Augue Id Inc.', 'Nunc', '2020-08-13 23:54:59'),
('04745', 1, 'Walter', '(04) 5844 4161', '0955 798 4089', 'P.O. Box 508, 9321 Molestie St.', 'tempor.erat.neque@veliteusem.ca', 'Vivien Sargent', 'Diam Eu Company', 'molestie in, tempus eu, ligula. Aenean euismod', '2020-08-13 23:54:59'),
('06394', 1, 'Jackson', '(08) 8208 3443', '056 3149 1920', 'Ap #177-632 Habitant Rd.', 'vulputate.mauris.sagittis@Integer.com', 'Rae Bailey', 'Non PC', 'netus et malesuada fames ac turpis egestas. Fusce', '2020-08-13 23:54:59'),
('06654', 1, 'Oliver', '(09) 8862 8794', '056 5688 8082', 'P.O. Box 586, 3520 Ullamcorper Av.', 'est.vitae@augue.org', 'Inga Bennett', 'Integer Foundation', 'diam luctus lobortis. Class aptent taciti', '2020-08-13 23:54:59'),
('08167', 1, 'Raja', '(05) 7015 0285', '(019363) 40500', '2184 A Av.', 'sed.pede@variusNamporttitor.com', 'Nola West', 'Sollicitudin Adipiscing Corporation', 'magna nec quam. Curabitur', '2020-08-13 23:54:59'),
('0930903420', 1, 'Ideas David S.A', '7732483478', '32442323', 'Avenida 33 # 20 - 14', '2@gmail.com', 'David Perez', 'Jueves', '', '2020-08-13 23:58:43'),
('10016610425', 1, 'Linux Cachorros S.A', '4543534', '324243242', 'Avenida 33 # 20 - 14', '4@gmail.com', 'Juan Valdez', 'Lunes y martes ', 'N/A', '2020-08-13 23:54:59'),
('12119', 1, 'Ethan', '(07) 0782 3176', '055 3055 8874', 'Ap #190-1866 Dignissim. Ave', 'mus.Donec@purusDuis.com', 'Justina Talley', 'Imperdiet Erat Nonummy Institute', 'scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris', '2020-08-13 23:54:59'),
('123456743453434', 1, 'Postobon', '342434', '324243233', 'Avenida 33 # 20 - 14', '3@gmail.com', 'Luis David ', 'LUnes y miercoles', '', '2020-08-13 23:56:56'),
('12494', 1, 'Ali', '(09) 2122 4709', '(019704) 37151', 'P.O. Box 464, 1765 Arcu. Street', 'magnis.dis.parturient@posuerecubiliaCurae.com', 'Jaden Steele', 'Vulputate Ullamcorper Magna PC', 'purus gravida sagittis. Duis gravida. Praesent', '2020-08-13 23:54:59'),
('13078', 1, 'Raja', '(02) 8904 4005', '(021) 0262 5146', '362-8663 Tempus St.', 'non.ante@tempordiamdictum.edu', 'Quon Simon', 'Sed Congue Elit Foundation', 'imperdiet ornare. In faucibus. Morbi vehicula.', '2020-08-13 23:54:59'),
('15214', 1, 'Phelan', '(04) 6633 9568', '07101 327805', '272-9617 Elit. St.', 'mollis.dui.in@liberolacusvarius.co.uk', 'Aurora Robbins', 'Sit Inc.', 'pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien,', '2020-08-13 23:54:59'),
('16995', 1, 'Wayne', '(02) 2060 9651', '07624 238685', 'P.O. Box 765, 6245 Quam Street', 'vestibulum@penatibuset.co.uk', 'Tamekah Villarreal', 'Tellus Limited', 'aliquam iaculis, lacus pede sagittis augue,', '2020-08-13 23:54:59'),
('19753', 1, 'Oren', '(05) 2456 3195', '(016977) 6543', 'Ap #428-5403 Dolor Road', 'sapien.Aenean.massa@orciluctus.edu', 'Odette Rivera', 'In Tincidunt Congue Limited', 'ante ipsum primis in faucibus orci luctus et', '2020-08-13 23:54:59'),
('20978', 1, 'Hall', '(04) 7009 5948', '0915 064 1330', '7731 Nunc Rd.', 'tortor.Integer.aliquam@posuereat.co.uk', 'Hillary Joseph', 'Natoque PC', 'a tortor. Nunc commodo auctor velit. Aliquam', '2020-08-13 23:54:59'),
('24424', 1, 'Jared', '(03) 7927 5625', '0816 251 9211', '233-2005 Odio Avenue', 'rutrum.urna@ullamcorperviverraMaecenas.edu', 'Remedios Hooper', 'Fusce Feugiat Institute', 'dolor', '2020-08-13 23:54:59'),
('24573', 1, 'Rooney', '(08) 3240 2171', '07575 851543', '115-360 Felis Av.', 'vitae.dolor@tristique.org', 'Danielle Dickson', 'Mauris Sit Consulting', 'amet', '2020-08-13 23:54:59'),
('27106', 1, 'Kelly', '(08) 8605 1909', '0959 653 3027', 'P.O. Box 686, 7235 Sed Avenue', 'congue.elit.sed@adui.co.uk', 'Noelani Floyd', 'Pede Nec Ante LLP', 'nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus.', '2020-08-13 23:54:59'),
('27395', 1, 'Yasir', '(07) 8999 3419', '(017100) 34616', 'Ap #520-4624 Curabitur Rd.', 'In@Donecsollicitudin.org', 'Rae Pacheco', 'Vel Venenatis Industries', 'fermentum metus. Aenean sed pede nec ante', '2020-08-13 23:54:59'),
('31388', 1, 'Jack', '(02) 9709 9306', '0397 721 6890', 'P.O. Box 566, 4777 Pellentesque Av.', 'diam.Proin@fermentum.edu', 'Alea Rosario', 'Nullam Enim PC', 'ipsum. Curabitur consequat,', '2020-08-13 23:54:59'),
('33842', 1, 'Giacomo', '(08) 7195 0005', '0875 411 9440', 'Ap #348-6276 Pellentesque Rd.', 'orci@luctus.org', 'TaShya Burke', 'Donec Elementum Ltd', 'risus. Quisque libero lacus, varius et, euismod et, commodo at,', '2020-08-13 23:54:59'),
('34838', 1, 'Rajah', '(09) 6067 2108', '070 0628 0437', 'Ap #620-1532 Tellus St.', 'dapibus@luctusfelispurus.co.uk', 'Nola Haley', 'Orci Donec Institute', 'vitae', '2020-08-13 23:54:59'),
('35091', 1, 'Brett', '(04) 4147 2986', '07624 909881', '906-1690 Molestie Road', 'dui.Cum.sociis@leo.net', 'Maisie Cameron', 'Suspendisse Institute', 'Aliquam erat volutpat. Nulla facilisis. Suspendisse', '2020-08-13 23:54:59'),
('36108', 1, 'Baxter', '(03) 5404 2557', '(01945) 87109', '605-9298 Imperdiet Avenue', 'aliquet.libero.Integer@Duiselementumdui.net', 'Wanda Richardson', 'Sed Id Risus LLC', 'non magna. Nam ligula elit, pretium et, rutrum non, hendrerit', '2020-08-13 23:54:59'),
('36117', 1, 'Cody', '(07) 9474 0146', '(014320) 22479', '3774 Mus. Av.', 'mollis@tinciduntdui.co.uk', 'Lunea Yates', 'Non Leo Limited', 'et netus et', '2020-08-13 23:54:59'),
('36283', 1, 'Vernon', '(05) 8550 6895', '056 7674 5576', '6515 Nullam Ave', 'dapibus.quam.quis@loremsit.net', 'Ruth Zamora', 'Ac Orci Institute', 'neque tellus, imperdiet non, vestibulum nec,', '2020-08-13 23:54:59'),
('36389', 1, 'Vance', '(02) 0580 1460', '07624 237070', '721-3797 Vitae Ave', 'arcu@auctornunc.ca', 'Caryn Franklin', 'Dictum Proin Associates', 'eget odio. Aliquam vulputate ullamcorper magna. Sed eu', '2020-08-13 23:54:59'),
('37172', 1, 'Malcolm', '(02) 3045 0984', '076 6682 4189', 'Ap #848-3324 Purus. Rd.', 'mus.Donec.dignissim@tellusSuspendisse.net', 'Dawn Bailey', 'Eget Varius LLP', 'orci sem eget massa.', '2020-08-13 23:54:59'),
('37776', 1, 'Vance', '(06) 1359 3654', '0800 766957', '7671 Eu, Road', 'eu.turpis.Nulla@nonantebibendum.net', 'Quinn Lott', 'Purus Associates', 'hendrerit consectetuer, cursus et, magna. Praesent interdum ligula', '2020-08-13 23:54:59'),
('38248238', 1, 'Plaza Comercial', '3243230', '300123122', '4', '2@gmail.com', 'Lina Jaramillo', 'Martes', '', '2020-08-13 23:54:59'),
('40595', 1, 'Magee', '(04) 4965 1072', '(016977) 7184', 'P.O. Box 826, 8400 Aliquam St.', 'Sed@In.ca', 'Alexandra Waller', 'Accumsan Associates', 'Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum.', '2020-08-13 23:54:59'),
('42166', 1, 'Walker', '(02) 8146 7129', '0871 367 6356', '640-4366 Molestie Street', 'nisi@odio.net', 'Leilani Pugh', 'Metus Associates', 'elementum at, egestas a, scelerisque sed, sapien. Nunc', '2020-08-13 23:54:59'),
('43393', 1, 'Xander', '(02) 1645 4587', '0845 46 43', '504-9618 Ut Ave', 'in.magna.Phasellus@magnaCrasconvallis.co.uk', 'Noel Mclaughlin', 'Erat Inc.', 'lorem tristique aliquet. Phasellus fermentum convallis', '2020-08-13 23:54:59'),
('44373', 1, 'Price', '(08) 6380 8260', '0333 876 8065', '1412 Maecenas St.', 'convallis.ligula@ac.edu', 'Doris Stafford', 'Ultrices Vivamus Rhoncus Company', 'ut, nulla. Cras', '2020-08-13 23:54:59'),
('44555', 1, 'Jarrod', '(02) 6132 6094', '(027) 9411 0286', '932-5466 Feugiat St.', 'scelerisque@Integereulacus.org', 'Frances Cash', 'Nec PC', 'ut dolor dapibus gravida. Aliquam', '2020-08-13 23:54:59'),
('48923879', 1, 'Zenu ', '453453', '324234234', 'Avenida 33 # 20 - 14', '2@gmail.com', 'Karla Giraldo', 'Martes y viernes', '', '2020-08-13 23:56:06'),
('49188', 1, 'Colton', '(01) 2799 0152', '07624 103633', 'Ap #724-9513 Ac Avenue', 'nascetur.ridiculus@vitaesodalesat.ca', 'Claudia Miller', 'In Magna Phasellus Corp.', 'in faucibus orci luctus et ultrices posuere cubilia Curae;', '2020-08-13 23:54:59'),
('51850', 1, 'Tarik', '(08) 1654 1949', '0800 729 0268', '133 Velit St.', 'vulputate@tellus.ca', 'Vivian Chambers', 'Ut Quam Associates', 'rutrum urna, nec luctus felis purus ac', '2020-08-13 23:54:59'),
('52915', 1, 'Graiden', '(08) 8780 7256', '(016977) 1897', '814-9856 Nec Avenue', 'In.lorem@ac.co.uk', 'Sara Cabrera', 'Blandit Viverra LLP', 'libero et tristique pellentesque, tellus sem mollis dui, in', '2020-08-13 23:54:59'),
('54120', 1, 'Denton', '(05) 0560 5025', '07485 164417', '447-2089 Aliquet St.', 'mauris.eu@mollis.net', 'Hollee Macias', 'Tellus Id Consulting', 'Morbi sit amet', '2020-08-13 23:54:59'),
('57106', 1, 'Bevis', '(07) 8317 1039', '07841 398976', 'Ap #440-7678 Dui Road', 'sollicitudin@lorem.edu', 'Kevyn Banks', 'Nunc Foundation', 'ut ipsum ac mi eleifend egestas. Sed pharetra, felis', '2020-08-13 23:54:59'),
('57126', 1, 'Ezra', '(02) 3778 2267', '0800 1111', 'Ap #865-9808 Sed Rd.', 'aliquet@egestasDuisac.edu', 'Jillian Boyle', 'In Felis Nulla Associates', 'turpis. In condimentum. Donec at arcu. Vestibulum', '2020-08-13 23:54:59'),
('57818', 1, 'Hop', '(03) 2923 7815', '(0181) 559 8908', '401-3998 Dictum St.', 'In.condimentum@enimnectempus.edu', 'Wyoming Schwartz', 'Sed Et Foundation', 'urna, nec luctus', '2020-08-13 23:54:59'),
('58467', 1, 'Asher', '(01) 0536 2763', '(026) 0708 6073', 'Ap #778-5741 Purus St.', 'interdum@esttemporbibendum.co.uk', 'Sloane Woods', 'Mauris Erat Eget PC', 'vel, convallis in,', '2020-08-13 23:54:59'),
('58544', 1, 'Hamilton', '(04) 3345 7499', '(016977) 5834', '6043 Dui Av.', 'ullamcorper.eu.euismod@tinciduntpedeac.edu', 'Rae Hayden', 'Inceptos Hymenaeos Mauris Consulting', 'per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet', '2020-08-13 23:54:59'),
('59382', 1, 'Emerson', '(05) 2039 9379', '0500 377058', 'Ap #524-4358 Pellentesque Road', 'Phasellus.dapibus.quam@estarcu.net', 'Iona Dickson', 'Duis LLC', 'nunc est, mollis non, cursus non, egestas a,', '2020-08-13 23:54:59'),
('60222', 1, 'Ciaran', '(04) 6130 8990', '076 7805 2433', '2427 Nulla. St.', 'sem.consequat@sit.org', 'Nadine Guerra', 'Suspendisse Aliquet Company', 'tincidunt,', '2020-08-13 23:54:59'),
('61170', 1, 'Fuller', '(02) 2446 1591', '070 1911 2283', '3739 Consectetuer Street', 'auctor.quis.tristique@sagittisfelisDonec.ca', 'Jessica Carter', 'Urna Associates', 'consequat enim diam vel arcu. Curabitur ut', '2020-08-13 23:54:59'),
('62412', 1, 'Lance', '(08) 2539 0082', '(01361) 50964', 'P.O. Box 609, 3142 Diam Road', 'varius.Nam.porttitor@nullaIn.net', 'Pandora Duncan', 'Mollis Phasellus Institute', 'ac', '2020-08-13 23:54:59'),
('64580', 1, 'Curran', '(06) 5524 9573', '(016977) 9205', 'P.O. Box 251, 1024 Risus. St.', 'Nullam.ut@quis.co.uk', 'Audrey Malone', 'Pellentesque Tincidunt Tempus Industries', 'vel lectus. Cum sociis natoque penatibus et magnis dis parturient', '2020-08-13 23:54:59'),
('65807', 1, 'Anthony', '(08) 8651 2531', '(027) 4131 6195', 'Ap #487-7676 Nascetur Ave', 'nisi@Praesent.edu', 'Nadine Cobb', 'Pharetra Felis Company', 'congue turpis. In condimentum. Donec at arcu. Vestibulum', '2020-08-13 23:54:59'),
('69738', 1, 'Cruz', '(07) 8462 0782', '07624 516238', '6205 Nibh. Avenue', 'ipsum.Suspendisse@sagittisfelis.net', 'Sage Emerson', 'Dui Inc.', 'fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus', '2020-08-13 23:54:59'),
('70168', 1, 'Daquan', '(08) 1765 8521', '055 6928 6468', '3562 Augue Street', 'sagittis.Duis.gravida@egetmetus.edu', 'Lacota Montoya', 'Velit Aliquam LLC', 'pede, ultrices a,', '2020-08-13 23:54:59'),
('70566', 1, 'Hilel', '(05) 7368 5399', '0967 240 4595', 'P.O. Box 311, 7070 Sollicitudin St.', 'Donec@atortorNunc.org', 'Indigo Ray', 'Libero Nec Ligula Institute', 'Quisque tincidunt pede ac urna.', '2020-08-13 23:54:59'),
('71910', 1, 'Omar', '(02) 1501 0521', '(016977) 4355', 'Ap #327-7888 Aenean Road', 'Nulla@Classaptenttaciti.co.uk', 'Octavia Cline', 'Pharetra Corporation', 'ullamcorper. Duis cursus,', '2020-08-13 23:54:59'),
('72560', 1, 'Cade', '(06) 3337 8391', '076 2135 3641', '9928 Consectetuer, Ave', 'at@Crasconvallis.ca', 'Erin Bartlett', 'Mi Pede Nonummy LLP', 'eros', '2020-08-13 23:54:59'),
('73930', 1, 'Lucas', '(04) 9895 8130', '0800 1111', 'Ap #663-1179 Nunc Av.', 'sed@mollis.edu', 'Nola Whitfield', 'Auctor Non Corp.', 'tortor nibh sit amet orci.', '2020-08-13 23:54:59'),
('75217', 1, 'Garrison', '(09) 8817 4870', '(01939) 19658', '139-3030 Eu St.', 'nulla.In.tincidunt@turpisnonenim.net', 'Anastasia Wolf', 'Facilisis Non Bibendum LLC', 'rhoncus.', '2020-08-13 23:54:59'),
('75245', 1, 'Thaddeus', '(01) 6219 8381', '(014225) 26305', 'Ap #258-1189 Non Rd.', 'luctus.aliquet.odio@quislectusNullam.co.uk', 'Mira Macias', 'Commodo Institute', 'in faucibus orci luctus et ultrices posuere', '2020-08-13 23:54:59'),
('75699', 1, 'Uriah', '(02) 2152 5947', '(0131) 430 5587', 'Ap #346-144 Mauris Street', 'vulputate.dui.nec@enimcommodohendrerit.ca', 'Kameko Snider', 'Cum Sociis Institute', 'erat eget', '2020-08-13 23:54:59'),
('75915', 1, 'Kyle', '(01) 9151 9528', '0800 561997', 'P.O. Box 538, 7014 Egestas St.', 'eget.magna@acmattis.co.uk', 'Cynthia Meadows', 'Convallis Dolor Quisque Limited', 'sed dui. Fusce aliquam,', '2020-08-13 23:54:59'),
('77106', 1, 'Troy', '(04) 2473 2643', '056 9080 8488', 'Ap #513-2100 Fermentum Av.', 'purus.Maecenas@orci.com', 'Eugenia Thomas', 'Pretium Et Rutrum Incorporated', 'lacus. Cras interdum.', '2020-08-13 23:54:59'),
('77117', 1, 'Owen', '(04) 9485 2836', '076 8486 5888', 'Ap #206-8504 Mollis. Rd.', 'in.faucibus.orci@velit.ca', 'Yael Burris', 'Aliquam Institute', 'accumsan', '2020-08-13 23:54:59'),
('77127', 1, 'Preston', '(01) 5865 1949', '0500 763823', 'Ap #609-8673 Aliquet Rd.', 'arcu.Curabitur.ut@Duisat.co.uk', 'Geraldine Mathis', 'Curae; Phasellus LLC', 'primis in', '2020-08-13 23:54:59'),
('80782', 1, 'Zachary', '(05) 4614 8946', '(0121) 284 3778', '841-3542 Ut Rd.', 'amet.ornare@commodo.org', 'Florence Horne', 'Malesuada Corporation', 'et netus et malesuada fames ac turpis egestas. Aliquam', '2020-08-13 23:54:59'),
('81578', 1, 'Emmanuel', '(09) 4111 3539', '(0115) 380 3230', 'P.O. Box 558, 4950 Ut Street', 'Fusce@magnamalesuadavel.net', 'Darryl Myers', 'Proin Dolor Consulting', 'egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum', '2020-08-13 23:54:59'),
('823192391', 1, 'Alimentos S.A', '4444021', '3219493492', 'Avenida 33 # 20 - 14', '5@hotmail.com', 'Juan Brito', 'Lunes', '', '2020-08-13 23:54:59'),
('84931', 1, 'Kenyon', '(03) 9384 5127', '07899 021168', '247-9279 Eu Street', 'sit@mollis.co.uk', 'Cherokee Rowland', 'Molestie Dapibus Ligula PC', 'eros non enim commodo hendrerit. Donec porttitor tellus non magna.', '2020-08-13 23:54:59'),
('86005', 1, 'Emmanuel', '(09) 6806 3612', '0893 908 5588', 'Ap #441-4011 Cras Street', 'Donec.egestas.Duis@lacus.edu', 'Amanda Savage', 'Ac Risus Company', 'gravida. Praesent eu nulla', '2020-08-13 23:54:59'),
('87611', 1, 'Vernon', '(01) 3244 0441', '0845 46 40', '534-4965 Blandit St.', 'gravida@orciUtsagittis.org', 'Sophia Hancock', 'Velit Aliquam Nisl Incorporated', 'placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet,', '2020-08-13 23:54:59'),
('87845', 1, 'Jonah', '(03) 3738 9148', '055 4221 6170', '9517 Vivamus Ave', 'id@velnisl.com', 'Melanie Henderson', 'Proin PC', 'diam at pretium', '2020-08-13 23:54:59'),
('89444', 1, 'Justin', '(08) 8298 3943', '(01260) 63282', '8992 Eget Avenue', 'mi.lorem@luctusutpellentesque.edu', 'Yuri Wynn', 'Amet Metus Consulting', 'rutrum, justo. Praesent luctus. Curabitur egestas nunc', '2020-08-13 23:54:59'),
('89501', 1, 'Allen', '(08) 6167 5734', '076 4150 8094', 'P.O. Box 664, 3589 Tristique Street', 'Sed@elitNulla.edu', 'Lunea Mccormick', 'Tempus Incorporated', 'vestibulum massa rutrum magna. Cras convallis convallis', '2020-08-13 23:54:59'),
('90928', 1, 'Brent', '(06) 4529 0762', '(01266) 44656', 'P.O. Box 147, 5445 Commodo Street', 'ut.pellentesque.eget@Nullasempertellus.co.uk', 'Sloane Mathis', 'Lectus Pede Corporation', 'magna et ipsum cursus', '2020-08-13 23:54:59'),
('92238', 1, 'Declan', '(09) 8523 4619', '(01312) 44758', 'Ap #495-978 Blandit Av.', 'Aenean.massa.Integer@maurisMorbi.net', 'Audra Miranda', 'Magna Ut Tincidunt Inc.', 'ante lectus convallis est, vitae sodales nisi magna sed', '2020-08-13 23:54:59'),
('94161', 1, 'Beck', '(04) 5328 7908', '(01266) 43302', '3609 Auctor, St.', 'Nam@bibendumullamcorper.com', 'Evelyn Ayala', 'Dolor Inc.', 'sed pede nec ante blandit viverra. Donec tempus, lorem fringilla', '2020-08-13 23:54:59'),
('96177', 1, 'Bernard', '(03) 0303 8250', '0800 413 2556', '455-1924 Nunc St.', 'magnis.dis@perinceptoshymenaeos.com', 'Paloma Stanton', 'Curabitur Consequat Limited', 'ultrices, mauris ipsum porta elit, a', '2020-08-13 23:54:59'),
('96435', 1, 'Gannon', '(04) 7177 1304', '(0191) 989 4801', 'Ap #542-6588 Orci Rd.', 'pharetra.sed@fermentumarcu.com', 'Rose Hull', 'Ac Mattis Semper Industries', 'Nam porttitor scelerisque neque. Nullam', '2020-08-13 23:54:59'),
('96768', 1, 'Trevor', '(02) 0261 1140', '(0113) 751 9610', 'Ap #531-4961 Et Rd.', 'nec@risus.ca', 'Marah Acevedo', 'Sed Sem Egestas PC', 'parturient montes, nascetur ridiculus mus. Proin', '2020-08-13 23:54:59'),
('97154', 1, 'Dane', '(09) 0059 9350', '055 0237 0648', 'Ap #823-7035 Habitant St.', 'libero@dolor.co.uk', 'Tasha Fuller', 'Sociis Natoque Corp.', 'augue malesuada malesuada.', '2020-08-13 23:54:59'),
('97472', 1, 'Duncan', '(07) 5043 4589', '0800 183445', 'Ap #375-9198 Phasellus Avenue', 'ac@tinciduntDonecvitae.ca', 'Jamalia Buckner', 'Dapibus Quam Corp.', 'penatibus et magnis dis parturient montes,', '2020-08-13 23:54:59');

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
(1, 'Cédula '),
(2, 'Pasaporte');

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
  ADD KEY `fk_Cita_Cliente1_idx` (`documentoCliente`);

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
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idPresentacion` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_Cita_Cliente1` FOREIGN KEY (`documentoCliente`) REFERENCES `cliente` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
