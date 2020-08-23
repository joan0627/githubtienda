-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2020 a las 20:48:32
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
(1, 'Vacuna'),
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
('7j8tba22fqdmk0igablb4c5grblv4pqo', '::1', 1597948551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373934383535313b),
('jcu0avfp1e5rsaodasptotq4f2hpt78g', '::1', 1597948873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373934383837333b),
('g3p1d9c73s5017k2h27n5el9ggjoe8sd', '::1', 1597949283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373934393238333b),
('kcf6mvnvdscavr9ne2o82eur1dgsnje1', '::1', 1597954651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373935343635313b),
('ov4gtnmu8c9lgbl8383a9qas812shpk0', '::1', 1597955616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373935353631363b),
('0dkh9l8jn87eg8kd1bh31fd991318jg4', '::1', 1597956337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373935363333373b),
('bptqjn08j71d33gdp0q11sahjtp9lics', '::1', 1597960617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373936303631373b),
('6mjdcmp4p6rjvfdmqf9c9u0ttqkvnaii', '::1', 1597960617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373936303631373b),
('m8vhjfmlf2927cnkp73b2c5jgf4fo80p', '127.0.0.1', 1597970336, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937303333363b),
('p18ma70elku502dbiootln98p4q0ruv6', '127.0.0.1', 1597969485, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373936393438353b),
('fban9dqupf3h8qvo9sfr80kkt2nm3q5p', '::1', 1597971864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937313836343b),
('81qqvo273npcamr2nk6s4phaseskndht', '::1', 1597973650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937333635303b76616c6f72536573696f6e7c733a353a227065727261223b),
('6qalnquc3ri2g3s0gfdvjlm419qftl1n', '::1', 1597973984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937333938343b76616c6f72536573696f6e7c733a353a227065727261223b),
('as80mihe7pbq7s54ggihrlpnh0vfmomn', '::1', 1597974285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937343238353b76616c6f72536573696f6e7c733a353a227065727261223b),
('gudee08tb3et90fn4nm5np0n35n6cdpl', '::1', 1597974608, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937343630383b76616c6f72536573696f6e7c733a353a227065727261223b),
('7s25k4rd27ckj3ebocivp8fkr6u508at', '::1', 1597975221, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937353232313b76616c6f72536573696f6e7c733a353a227065727261223b),
('frnbn90js03oanfeurutcba535oobt19', '::1', 1597975534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937353533343b76616c6f72536573696f6e7c733a353a227065727261223b),
('4t8iufr7tgpu9s6nj3b6gkh72o0jf8i6', '::1', 1597975726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937353533343b76616c6f72536573696f6e7c733a353a227065727261223b),
('fvdimnub85e355v29flvpq8qkvaesago', '::1', 1597976184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937363134383b76616c6f72536573696f6e7c733a353a227065727261223b),
('20kqq88mi82n5fduc67v3ml66at25dli', '::1', 1597976584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937363538343b76616c6f72536573696f6e7c733a353a227065727261223b),
('rd7drors7bh9lodacolgqel8iuc10hji', '::1', 1597977061, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937373036313b76616c6f72536573696f6e7c733a353a227065727261223b),
('5spg872mbp6bsq1aser3fjuktrlp2asg', '::1', 1597977393, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937373339333b76616c6f72536573696f6e7c733a353a227065727261223b),
('i11iaedv7j8s9m0sda6jgk60quk9gpu6', '::1', 1597977696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937373639363b76616c6f72536573696f6e7c733a353a227065727261223b),
('1lcvftcd0c4lesmbda5m37195cu0q3a0', '::1', 1597978309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937383330393b76616c6f72536573696f6e7c733a353a227065727261223b),
('v5cdeft075a02fjanppc1fqapvs6s8cq', '::1', 1597979541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373937393534313b76616c6f72536573696f6e7c733a353a227065727261223b),
('7sme33hkcmnu36c0jbsqfath9bqfu6lc', '::1', 1597983147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373938333134373b76616c6f72536573696f6e7c733a353a227065727261223b),
('hn3i0t8b8m5909cho9kf0kmbskpr98fd', '::1', 1597983174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373938333134373b76616c6f72536573696f6e7c733a353a227065727261223b),
('eqjtqagfepejjodgkam9tnik34muc511', '::1', 1598027234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032373233343b76616c6f72536573696f6e7c733a353a227065727261223b6d6573736167657c733a35353a22456c2070726f647563746f20436f6e63656e747261646f207365206861207265676973747261646f20636f7272656374616d656e74652e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ecmehp2b6a0be3c1p9tjqd83uvg6j5c2', '::1', 1598027536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032373533353b76616c6f72536573696f6e7c733a353a227065727261223b),
('g4j38me0aesou6vp4p2ve5htoo7h34o2', '::1', 1598028121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032383132313b),
('o6qqagmkk44e6d87cl20mb5vhqutn662', '::1', 1598028464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032383436343b),
('cmo3sc966o38ui90rdrtg1oqcd538caq', '::1', 1598028932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032383933323b),
('e98cnidbhbt3o8g5nljp9qa2s4tt57ba', '::1', 1598029286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032393238363b76616c6f72536573696f6e7c733a353a227065727261223b),
('7nkvvjbrtj7jog9tj78g4p0b9uoer00l', '::1', 1598029770, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383032393737303b),
('3suojcirmlaq06810l1ir479a6uht2bj', '::1', 1598030209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033303230393b76616c6f72536573696f6e7c733a353a227065727261223b),
('h937v8s99111rgrf4hm7nrc39rob7fsr', '::1', 1598030568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033303536383b76616c6f72536573696f6e7c733a353a227065727261223b),
('mc9rfifhuekg4bvigo8lbepk9qqsgetg', '::1', 1598030897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033303839373b76616c6f72536573696f6e7c733a353a227065727261223b),
('v7bnia11r31uk53vmcjc7jdpnd8mh9sl', '::1', 1598031239, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033313233393b76616c6f72536573696f6e7c733a353a227065727261223b),
('c0todj9qu6sh6ps94ufmjmdor5daodr6', '::1', 1598031589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033313538393b76616c6f72536573696f6e7c733a353a227065727261223b),
('8vaoa7c6aj27h6v915e3p1s8nh69vbo3', '::1', 1598031910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033313931303b76616c6f72536573696f6e7c733a353a227065727261223b),
('5tkrva6uvqq2df7pln0t0fta8gbduak8', '::1', 1598032243, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033323234333b76616c6f72536573696f6e7c733a353a227065727261223b),
('n1kpddpk7r5l1s36d9thhs6v2gud49jr', '::1', 1598032573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033323537333b76616c6f72536573696f6e7c733a353a227065727261223b),
('r2eln3bg47pk5j5sharlaihbkl3h4pgs', '::1', 1598032897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033323839373b76616c6f72536573696f6e7c733a353a227065727261223b),
('5q4pgb8kkjpipfc1g99b97ko1dir2ot9', '::1', 1598035276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033353237363b76616c6f72536573696f6e7c733a353a227065727261223b),
('6ddhm701q6q3keq6v4ftfhko4730eaba', '::1', 1598035589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033353538393b76616c6f72536573696f6e7c733a353a227065727261223b),
('2f12gfvoc58iaaae3tiskh7alk2a6b37', '::1', 1598035896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033353839363b76616c6f72536573696f6e7c733a353a227065727261223b),
('vh7vhls2ck435ih13clvtbtmssihsjo7', '::1', 1598037156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033373135363b76616c6f72536573696f6e7c733a353a227065727261223b),
('16lb06edr0f45o1cb46h5rq5hp8h8i32', '::1', 1598037275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383033373135363b76616c6f72536573696f6e7c733a353a227065727261223b),
('bf144454126fc54b89d54fce12a30cd7e2e1b14d', '::1', 1598040598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383034303539383b76616c6f72536573696f6e7c733a353a227065727261223b),
('d3e2dc33bfe523ec6e0ec22804a64930da4ddda8', '::1', 1598040921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383034303932313b76616c6f72536573696f6e7c733a353a227065727261223b),
('5b834afc5970ff0384adaad472a5fe5ac7f78487', '::1', 1598041030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383034303932313b76616c6f72536573696f6e7c733a353a227065727261223b),
('8ec4d17a9e9a8f32b8a4b0b6c89ee951b0d18070', '::1', 1598056473, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383035363437333b),
('2b8db5e84030f2462b14d8da715eaf100b625d0b', '::1', 1598075323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037353332333b),
('8a0cf28ae878e673606904f0bdc3bdafb3169666', '::1', 1598075630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037353633303b),
('9188c5da805cfe482838ce9eb2e1e847641a8189', '::1', 1598076180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037363138303b),
('8e963966f1a67b3e3a8b66c8bd697a2d79594341', '::1', 1598076529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037363532393b),
('c55c651a7866c4481b512a501991ed3b34259a28', '::1', 1598076859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037363835393b),
('f6714a87e39302bda83dbd321dbdf609613e531b', '::1', 1598077193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037373139333b),
('d05c775a3c1ead338aa102484083e5514c7cc8be', '::1', 1598077520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037373532303b),
('1818288513ccbf18f04fc24aca04a4f3147f2f39', '::1', 1598077856, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037373835363b),
('7b569f3d76da31bed207156e98c876076f36ba5b', '::1', 1598077893, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383037373835363b),
('e198f4fc3bcae0e3975722ff5aeefaea6e620087', '::1', 1598154786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135343738363b),
('7a1424c25128f798223e8b217a90ed2ea3461e69', '::1', 1598155222, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135353232323b),
('9501091f652afcfc510514a21b4fe56ad11b14d6', '::1', 1598155525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135353532353b),
('f3c515089b1555a4330416cda21007a512a40742', '::1', 1598156599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135363539393b),
('16b26b9e7705464c0262c22618dc76a3fde99c73', '::1', 1598157018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135373031383b),
('4c34c034d81d8772a105bc4d0c5356ebbc471483', '::1', 1598157416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135373431363b),
('42578ba04588acdc455ab5dd0c690a919e064b0e', '::1', 1598157793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135373739333b),
('7fe5ac4860e38aeb2e4b5e087ec33fe654714dd0', '::1', 1598158123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135383132333b),
('b7b1c33bc47a3a31b3cadd0742987093a92e40a8', '::1', 1598158466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135383436363b),
('669fe1c612a840c47ff6d66478acb909ada8ee88', '::1', 1598158876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135383837363b),
('b134743e7fba67ab01266fa42a56e793f3273907', '::1', 1598159190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135393139303b),
('8e234936811e39272873ea117825011fc2394caf', '::1', 1598159742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383135393734323b),
('fb700346e7322176d9af8b2939715002b8a7f151', '::1', 1598160204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136303230343b),
('f3e2d7348bef5271acb4c833c6c5d48a367e5978', '::1', 1598161059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136313035393b),
('887caca12ed6c88b204eb232141388af33171245', '::1', 1598161466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136313436363b),
('1c4557f88a4812e3ba2a50f3bf4b96ef3dc47051', '::1', 1598161925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136313932353b),
('da542a60f1fc409363a2fd382dee387d257090b2', '::1', 1598162879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136323837393b),
('efdd2c1264b12d46eadc70df9a7afbcdccabefd9', '::1', 1598163262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136333236323b),
('2be6fd92111738ebca303daa0dbda191e742d76c', '::1', 1598163505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383136333236323b),
('e2f278c588706035e39b648dc44b61d3881c7efb', '::1', 1598205433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383230353433333b),
('d14774db3c1fb37e4f5242fd1e088a1f482cb93f', '::1', 1598205775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383230353737353b),
('81c7b10781cc4ad83bad18125f77e54da928bc10', '::1', 1598206538, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383230363533383b),
('004e34649bf57fc4792f6d1bd5efb5103c0da275', '::1', 1598206830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383230363533383b);

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
  `descripcionEspecie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especieproducto`
--

INSERT INTO `especieproducto` (`idEspecieProducto`, `descripcionEspecie`) VALUES
(1, 'Canino'),
(2, 'Felino');

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
  `descripcionMarca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcionMarca`) VALUES
(1, 'Purina'),
(2, 'Soya');

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
  `descripcionPresentacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idPresentacion`, `descripcionPresentacion`) VALUES
(1, 'Caja'),
(2, 'Paquete');

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
  `contradindicaciones` varchar(45) DEFAULT NULL,
  `edadAplicacion` varchar(45) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `idCategoria`, `marca`, `idPresentacion`, `valorMedida`, `idUnidadMedida`, `existencia`, `idEspecieProducto`, `indicaciones`, `contradindicaciones`, `edadAplicacion`, `precio`, `fechaRegistro`) VALUES
('1056', 'Concentrado', 'Para perro cachorro', 2, 2, 2, 2, 1, 2, 1, '', '', ' -Seleccione la unidad de tiempo-', 5, '2020-08-21 16:20:15'),
('215', 'Zenú S.A', 'wwedw', 1, 1, 1, 0, 1, 787, 1, '7777', '7777', '7 Dia(s)', 5000, '2020-08-21 17:10:40'),
('3242', 'Cuidos Medellin', 'cuido', 2, 1, 1, 2, 1, 32, 1, '', '', ' -Seleccione la unidad de tiempo-', 2000, '2020-08-21 20:14:27');

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

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Super Administrador'),
(4, 'Otro');

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
  `descripcionUnidadmedida` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`idUnidadMedida`, `descripcionUnidadmedida`) VALUES
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
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp(),
  `estado` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `celular`, `nombreUsuario`, `contrasena`, `idRol`, `fechaRegistro`, `estado`) VALUES
(6, 'Joan Bolivar', '3217576548', 'joan0627', '12345678', 1, '2020-08-23', 1);

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
  ADD UNIQUE KEY `nombreUsuario` (`nombreUsuario`),
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
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `idEspecieProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `fk_DetalleCompra_Compras1` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompras`) ON UPDATE CASCADE,
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
  ADD CONSTRAINT `fk_DetalleVacunaMascota_Mascota` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON UPDATE CASCADE,
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
