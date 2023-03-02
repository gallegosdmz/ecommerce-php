-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2019 a las 21:49:20
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` char(50) NOT NULL,
  `imagen` tinytext NOT NULL,
  `precio` int(10) NOT NULL,
  `cantidad` bigint(50) NOT NULL,
  `subtotal` bigint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(83, 1, 'Ruffles De Queso', 'Ruffles.jpg', 10, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE IF NOT EXISTS `cuentas` (
  `usuario` char(50) NOT NULL,
  `clave` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`usuario`, `clave`) VALUES
('Andrea', 'andy'),
('Alex', 'salchicha'),
('Julian', 'cayene'),
('Eduardo', 'iedu12'),
('lily', 'angelica'),
('Yared', 'hoppa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` char(50) NOT NULL,
  `apellido` char(50) NOT NULL,
  `grado` smallint(1) NOT NULL,
  `grupo` char(1) NOT NULL,
  `tel` tinytext NOT NULL,
  `encuentro` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `numeroventa`, `nombre`, `apellido`, `grado`, `grupo`, `tel`, `encuentro`) VALUES
(8, 1, 'Eduardo', 'Gallegos', 4, 'A', '834 214 04 32', 'Cafeteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nombre` char(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` tinytext NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Ruffles De Queso', 'Las Papas RUFFLES es un producto elaborado a base de papa, el cual viene presentado en forma de rebanadas onduladas con sabor a queso.', 'Ruffles.jpg', 10),
(2, 'Sabritas Originales', 'Papas de corte ondulado que al comer se sienta el crujir, con un sabor salado sin perder el sabor original de una papa reciÃ©n cortada como en casa.', 'Sabritas.jpg', 10),
(3, 'Paleta Pinta Azul', 'Paleta de caramelo macizo acidulado sabor frambuesa.', 'paletapinta.jpg', 2),
(4, 'Portico', 'Dulce en polvo con sal y chile.', 'portico.jpg', 1),
(5, 'Carlos V', 'Barra de chocolate con leche.', 'carlosv.png', 4),
(6, 'Chocolate Abuelita', 'Barra de chocolate amargo.', 'chocolateabuelita.jpg', 4),
(7, 'Chicles', 'Chicles de diferentes sabores.', 'chicles.png', 1),
(8, 'Takis', 'Maiz frito con chile en polvo.', 'takis.jpg', 10),
(9, 'Bombones De Chocolate', 'Bombones de vainilla cubiertos de chocolate.', 'bombones.png', 4),
(10, 'Gomitas de Mango Enchilado', 'Gomitas de dulce mango con un toque picosito de chile.', 'gomitasmango.jpg', 2),
(11, 'Rancheritos', 'Frituras cubiertas de chile Ã¡cido.', 'rancheritos.jpg', 10),
(12, 'Churrumais', 'Palos de frituras de chile.', 'churrumais.jpg', 10),
(13, 'Cacahuates Surtidos', 'Bolsistas con cacahuates de chile, salados, dulces, etc.', 'cacahuates.jpg', 10),
(14, 'Fritos', 'Papas fritas con sal.', 'fritos.jpg', 10),
(15, 'Doritos', 'Papitas de queso.', 'doritos.jpg', 10),
(25, 'Skwinkles', 'Tiras de camaramelo Ã¡cido.', 'skwinkles.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nombre` char(50) NOT NULL,
  `apellido` char(50) NOT NULL,
  `grado` smallint(1) NOT NULL,
  `grupo` char(1) NOT NULL,
  `tel` tinytext NOT NULL,
  `queja` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `nombre`, `apellido`, `grado`, `grupo`, `tel`, `queja`) VALUES
(2, 'Eduardo', 'Gallegos', 4, 'A', '834 214 04 32', 'Nunca llego mi pedido');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
