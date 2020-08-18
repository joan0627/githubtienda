-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2020 a las 20:09:55
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
('5dfb854c2fdf83cf2a7935e696026506d640df57', '::1', 1597428625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373432383632353b6d6573736167657c733a36343a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e7465214361726e69636f73206465206d6173636f74617320532e41223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('8d4f1d5b4f9c3e44a01c9323ba46180f84761d24', '::1', 1597428982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373432383938323b6d6573736167657c733a34333a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521323334223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('e6592ff31b10ae977c41eb64c7b46049ef0a5ddd', '::1', 1597429348, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373432393334383b),
('9f51339576da4d94b8987dabccf84834f8f7f3d1', '::1', 1597429700, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373432393730303b),
('1de7e230fdfffb7536a27ec68fbdee66deaf00d4', '::1', 1597430067, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433303036373b),
('d63df96f782e766403ef2d2483454fa925ff3c58', '::1', 1597430378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433303337383b),
('0312c98d4cae0ab690e22ff2f763762c9b482175', '::1', 1597430457, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433303337383b),
('7107435dd51da5cb43fc9d5f2959cb4eb53c7570', '::1', 1597430864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433303836343b6d6573736167657c733a34333a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521323334223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('77c6d01858434ef38ec749380903321b66ffb786', '::1', 1597431194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433313139343b6d6573736167657c733a34333a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521333534223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('985e2b10ec144e5a57ce6a4d56f6207b2d1b3797', '::1', 1597431523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433313532333b6d6573736167657c733a31393a22c2a16e6f206861207265676973747261646f21223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('2b99bb51b865267a0d591751640e019bfe9c0bbd', '::1', 1597431828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433313832383b),
('15258084fa95053511a1d182aa042024a365cf0f', '::1', 1597432141, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433323134313b),
('a702f57816638a45fbfecd6d08efce6f065a57b3', '::1', 1597432529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433323532393b6d6573736167657c733a34303a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('f3eb070d2e6541e791ca284bf0bbf187decfc56a', '::1', 1597432889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433323838393b),
('8cd1aaaa9f6a11e8fc45f9cd7985ad5761e75b88', '::1', 1597433196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433333139363b),
('c72ad2a4bb1e71a8f42d30cf38bade7a46fbf17c', '::1', 1597433647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433333634373b6d6573736167657c733a34303a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('6c0b2e0ee34ec103a34c3417f1646b949df06334', '::1', 1597434002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433343030323b6d6573736167657c733a34303a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('0c306adec004e241a23c5e7dd34bac6c2ff0bf17', '::1', 1597434408, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433343430383b),
('450097d025b14ca9e2ffab08cd487d61708ed7d2', '::1', 1597434830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433343833303b6d6573736167657c733a34303a22c2a1456c2070726f766565646f7220736520726567697374726f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('fd7cc54b942a5f8b02bbc214e5515dfac8826dba', '::1', 1597435161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433353136313b),
('f2f10a45a7e7e4b6fa880317a09c6278111af98c', '::1', 1597435521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433353532313b),
('732bb1b78c55deecd4e619221ac971f9a77145ef', '::1', 1597435898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433353839383b),
('a558f5b211fc8379c087e54b105bb6370f1707df', '::1', 1597436237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433363233373b),
('fc05d3df6870609edce1cd85550a7dae29d60122', '::1', 1597436545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433363534353b),
('5e30c95721d04bd1463afd7120858d8ce15827c0', '::1', 1597436855, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433363835353b),
('64d669d3e032f8e5248e0a928497b6608d3eae5f', '::1', 1597437162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433373136323b6d6573736167657c733a34353a22c2a1456c2070726f766565646f72207365206861207265676973747261646f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('2a1c82aac86ca09250eab0e9fe5d5437bad3785b', '::1', 1597437479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433373437393b6d6573736167657c733a35343a22c2a1456c2070726f766565646f72205065706520532e41207365206861207265676973747261646f20657869746f73616d656e746521223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('87a4ad25bed92ad23e83ebb43910fd439abe0f05', '::1', 1597437840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433373834303b),
('59ecc84bacb1f8000cc9bd683fd4c6c7708e20f7', '::1', 1597438142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433383134323b),
('1a0233df0e64a353602444b0f7d4926c1725ff19', '::1', 1597438530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433383533303b),
('59f85b2ad291ce05a950bf753cbb3bc6d252db9a', '::1', 1597439294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373433393239343b),
('482a92857f41a6be9535d164744366d9709fdc61', '::1', 1597440100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373434303130303b),
('8d4034218f65c36507cbf842d691447dacd28d52', '::1', 1597440439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373434303433393b),
('0312297e6832c809910f2f89e9bf4ef37ae1042f', '::1', 1597443934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373434333933343b6d6573736167657c733a34383a22456c2070726f766565646f7220333132207365206861207265676973747261646f20636f7272656374616d656e74652e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('f82c76628db809d13d89d21616c6a94f268438d0', '::1', 1597448724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373434383732343b),
('8be58d5baac879de347412939a5397f25e9f22ee', '::1', 1597449584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373434393538343b),
('4a3a0d1cba1f2f6484dbc5d62dcfa994dedf8d89', '::1', 1597450816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435303831363b),
('f379e8d7dfe56589220a8b460b53df764f3ad2a6', '::1', 1597451142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435313134323b),
('7af5d2c9a26b2d33075c6a1058fb429827e7943f', '::1', 1597453300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435333330303b),
('1c87ce62d6ec32edf49ffe8e85783ea5453dd7f2', '::1', 1597452599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435323539393b),
('11488ec01cc582b1849f37bd2b6491ed0a9ebe55', '::1', 1597453750, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435333735303b6d6573736167657c733a34383a22456c2070726f766565646f7220736466207365206861207265676973747261646f20636f7272656374616d656e74652e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('2cfe94379dfa3959c0bdaf5801c8212b7a300507', '::1', 1597454066, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435343036363b),
('933e059f546689544d1ba6e0ef3cb545d409f026', '::1', 1597455042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435353034323b),
('f0071a32113c1cf1ec023826c73e50faa6a5a286', '::1', 1597455559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435353535393b),
('ca5fabe50a133147282e3298eec746a1c026c8df', '::1', 1597457520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435373532303b),
('4f76d7018460cfb60296827ddb16fc8ea099c7ce', '::1', 1597458525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435383532353b),
('af1567b28969d256e4841f075da165da120359f6', '::1', 1597458876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435383837363b),
('b3ea824e6f0e978a88d97a0bd6b50557731b0d77', '::1', 1597459451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435393435313b),
('192bc3c4ffbbe2ea00ad31650d7f163972d1beda', '::1', 1597459822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373435393832323b),
('59e880b2b0c70eb42b296c565ced0c7144a0215c', '::1', 1597460368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373436303336383b),
('0acc7476bb690d9f0fe957bebf1a2abda347ce44', '::1', 1597460368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373436303336383b),
('11fbca23e018664541d0e186840881431aab9466', '::1', 1597472713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437323731333b),
('de0418bc66e3fa8fe12fe7ca742db5a8b12f6dc7', '::1', 1597473119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437333131393b),
('0fef56209301dfe71a1a619ab37bd50b702b4293', '::1', 1597473439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437333433393b),
('8452b25da0af3545698f1c3fbb8616fbb87bf974', '::1', 1597473756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437333735363b),
('93089ea7bed394f835764c1fd59e6ce6d7262eff', '::1', 1597473760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437333735363b),
('06746ed5e6a80d105f81264b07cc757e2327b12a', '::1', 1597474740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437343734303b),
('81b23d398761df9a13cc41b9f0b0015a0f3e927e', '::1', 1597475055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437353035353b),
('299b2d6c8d618ca0f4ae755225dd78ec8d3f9487', '::1', 1597475428, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437353432383b),
('d31ea83d4cd4eee71e39ae7c47c7fcecb062f827', '::1', 1597476815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437363831353b),
('e29c31e42f8ab6f01d385c3e790425d4edf4ec05', '::1', 1597477232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437373233323b),
('ec4602404e0d2e45fe533aee80005ec4db55a122', '::1', 1597477333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373437373233323b),
('fb7ed2dff43a1750df713ae814734263f424bfd4', '::1', 1597526189, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373532363136313b),
('ffd674f8489212f58201039fbf8a6d6656fe79c8', '::1', 1597703713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730333731333b),
('bd0101557f108f35673584193a5e1e1b57b9b105', '::1', 1597704248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730343234383b),
('b3776217fa6736418c05fac8feb40882694bf936', '::1', 1597704580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730343538303b),
('2bde05ec73fa0bb53545d79af9a84ff6b1bbfc7c', '::1', 1597704892, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730343839323b),
('95b8aa38d6f1ba1321445e459ca323e4983a5101', '::1', 1597705317, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730353331373b),
('431c18b123b7a92264bc69e4be126771866b9c48', '::1', 1597705656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730353635363b),
('1583c17d07486a6e97ca00fa0f61175843c47d0d', '::1', 1597706357, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730363335373b),
('ed401ae6ca33058e6ea74a2b4a232b048d3b7199', '::1', 1597706819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730363831393b),
('dbaf839d1877c4b366ffabab720c66e656b86da3', '::1', 1597708406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730383430363b),
('30362f1a2dfc4d08e614acbe71aa41b582fbb300', '::1', 1597709082, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730393038323b),
('8d98fdfe23466a8ca63cb204f7dabb1fcbaaef05', '::1', 1597709497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730393439373b76616c69646163696f6e65737c733a333a22707065223b),
('818ce51641a7157d8ccb6c62e5a672c1a0fecfc1', '::1', 1597709906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373730393930363b76616c69646163696f6e65737c733a333a22707065223b),
('b971cc5a53f0a1006dff9ea89dc0b53a87be32c2', '::1', 1597710232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373731303233323b76616c69646163696f6e65737c733a333a22707065223b),
('aa2689992e334d11dd61dde10e60905bf1058dda', '::1', 1597710308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373731303233323b76616c69646163696f6e65737c733a333a22707065223b),
('e3c5518f3f09f1f0da19f3c9635457bda9cd9196', '::1', 1597718741, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373731383734313b),
('79aef5812f48ba835f69587f017b20348cbd64d0', '::1', 1597719042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373731393034323b62757371756564617c733a33343a224e6f2068617920726573756c7461646f732064652073752062c3ba73717565646120223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226e6577223b7d),
('3eb10f47d6686f0cd35c15c3300d912fa628bbae', '::1', 1597719667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373731393636373b62757371756564617c733a33343a224e6f2068617920726573756c7461646f732064652073752062c3ba73717565646120223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226e6577223b7d),
('631b56dc019ee37c5bd0f4c8d8646ca579e85b1e', '::1', 1597720036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732303033363b62757371756564617c733a33343a224e6f2068617920726573756c7461646f732064652073752062c3ba73717565646120223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226e6577223b7d),
('9c375d680e2fd9e21ac6d501e8160aa0b453d511', '::1', 1597720346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732303334363b62757371756564617c733a33343a224e6f2068617920726573756c7461646f732064652073752062c3ba73717565646120223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226e6577223b7d),
('cdcf48f711a5ca2079c5bfcdbde0d1fd3d901049', '::1', 1597720704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732303730343b62757371756564617c733a33343a224e6f2068617920726573756c7461646f732064652073752062c3ba73717565646120223b5f5f63695f766172737c613a313a7b733a383a226275737175656461223b733a333a226f6c64223b7d),
('94cf086e62910813f19e475b42773b5c89b5a952', '::1', 1597721275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732313237353b),
('83a60382f507ecc5561356cdb206b9f6429bd303', '::1', 1597722254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732323235343b),
('48022d08b82dae2f405dc7f7302d43dec72ce6f8', '::1', 1597723275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732333237353b),
('c619432417f3e52a066b06b0d9d3f69a7f92b9a0', '::1', 1597723294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732333237353b),
('cee209e48cf673aa4d33056c2d2985149b023517', '::1', 1597723742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732333734323b),
('03fc81729ed161ad09eacaa75aac23e36df31717', '::1', 1597724125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732343132353b),
('38cb51850884c687be9649feeb94bb80c03988e2', '::1', 1597724518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732343531383b),
('eb5d9a940c8ae7a3e00ddaa999b2ff411dac6d2d', '::1', 1597724865, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732343836353b),
('28f41f6d6f71a47a9cad634ec7f2776e8d8e27e4', '::1', 1597725796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732353633363b),
('ac559c0fd12f7f339f0f92f968eb15955ce6f0e2', '::1', 1597726437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373732363230313b),
('63b7bdd36b700f167592a10e92099f48f7e75f85', '::1', 1597772802, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539373737323533313b);

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
('123123121sdadsd2', 1, 'Alimentos S.A', '4444021', '3218976756', '', '', 'Tony Gonzalez', 'Lunes', '', '2020-08-18 04:09:30'),
('1234567', 4, 'Carnicos de mascotas S.A', '4444021', '3218976756', 'Avenida 33 # 20 - 14', '132@hotmail.com', 'Tony Gonzalez', 'Lunes', '', '2020-08-18 03:54:52'),
('4534543434', 1, 'GATOS', '', '3218976756', '', '', 'Tony Gonzalez', 'Lunes, Martes, Jueves  y sábado', '', '2020-08-18 04:25:06');

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
