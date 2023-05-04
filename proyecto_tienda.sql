-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2021 a las 02:20:22
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_producto` char(5) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_cliente` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id_producto` char(5) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id_producto`, `nombre_producto`, `descripcion`, `precio`, `imagen`) VALUES
('00001', 'Procesador Ryzen 5 3600', 'Procesador de 6 nucleos 12 hilos socket AM4 ', '1229.00', 'resource/00001.jpg'),
('00002', 'Procesador Ryzen 3 3200G', 'Procesador de 4 nucleos Radeon™ Vega 8 Graphics', '691.27', 'resource/00002.jpg'),
('00003', 'Procesador Core I5 10400F', 'Procesador de 6 nucleos 12 hilos Socket LGA1200', '874.00', 'resource/00003.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE `contactenos` (
  `numero_orden` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`numero_orden`, `nombres`, `telefono`, `email`, `comentario`, `fecha`) VALUES
(1, 'German Daniel Soto Cordova', '964384395', 'german.sc937@gmail.com', 'dssdsd', '2021-07-11'),
(2, 'Daniela Duarte Iquize', '956125486', 'example@example.com', 'sfdsfsdgsdgsdg', '2021-07-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id_pedidos` char(5) NOT NULL,
  `id_producto` char(5) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_cliente` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`id_pedidos`, `id_producto`, `cantidad`, `precio`, `id_cliente`) VALUES
('00007', '00001', 1, '1229.00', '00001'),
('00008', '00003', 1, '874.00', '00002'),
('00009', '00002', 1, '691.27', '00002'),
('00010', '00003', 1, '874.00', '00001'),
('00011', '00002', 2, '691.27', '00001'),
('00012', '00001', 5, '1229.00', '00001'),
('00013', '00001', 1, '1229.00', '00001'),
('00013', '00002', 2, '691.27', '00001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mas_vendidos`
--

CREATE TABLE `mas_vendidos` (
  `id_producto` char(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mas_vendidos`
--

INSERT INTO `mas_vendidos` (`id_producto`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
('00001', 'Procesador Ryzen 3 3200G', '691.27', 'Procesador de 4 nucleos Radeon™ Vega 8 Graphics', 'resource/mas_vendidos/00001.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id_usuario` char(5) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id_usuario`, `email`) VALUES
('00001', 'german.sc937@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` char(5) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `id_cliente` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `fecha_pedido`, `id_cliente`) VALUES
('00001', '2021-07-05', '00001'),
('00002', '2021-07-05', '00001'),
('00003', '2021-07-05', '00001'),
('00004', '2021-07-05', '00001'),
('00005', '2021-07-05', '00001'),
('00006', '2021-07-05', '00002'),
('00007', '2021-07-07', '00001'),
('00008', '2021-07-07', '00002'),
('00009', '2021-07-07', '00002'),
('00010', '2021-07-08', '00001'),
('00011', '2021-07-08', '00001'),
('00012', '2021-07-10', '00001'),
('00013', '2021-07-10', '00001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` char(5) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `tipo`) VALUES
('00001', 'German', 'Soto', 'german.sc937@gmail.com', 'GDS', '1234', 'usuario'),
('00002', 'Juan Carlos ', 'Soto Cordova', 'carIza@gmail.com', 'JSC', '1234', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_administrativos`
--

CREATE TABLE `usuarios_administrativos` (
  `id_usuario` char(5) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_administrativos`
--

INSERT INTO `usuarios_administrativos` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `pass`) VALUES
('00001', 'German Daniel', 'Soto Cordova', 'german.sc937@gmail.com', 'GDS', '1234'),
('00002', 'Daniela', 'Muriza', 'dnadiMu@gmai.com', 'DMU', 'dani13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`numero_orden`);

--
-- Indices de la tabla `mas_vendidos`
--
ALTER TABLE `mas_vendidos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_administrativos`
--
ALTER TABLE `usuarios_administrativos`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
