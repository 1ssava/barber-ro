-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 17:34:02
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barber-ro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `descripcion`, `cantidad`) VALUES
(10, 'Capa', 30),
(11, 'Cera', 50),
(12, 'Clipper', 3),
(13, 'Tijeras', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barbero`
--

CREATE TABLE `barbero` (
  `id_barbero` int(11) NOT NULL,
  `nombre_barbero` varchar(255) NOT NULL,
  `apellido_barbero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barbero_disponibilidad`
--

CREATE TABLE `barbero_disponibilidad` (
  `id_barberodisponibilidad` int(11) NOT NULL,
  `id_barbero` int(11) NOT NULL,
  `id_reserva` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `fecha`, `hora_inicio`, `hora_fin`) VALUES
(23, '2023-12-13', '11:30:00', '12:30:00'),
(31, '2023-11-27', '06:30:00', '07:00:00'),
(38, '2023-11-27', '03:00:00', '04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cant_disponible` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `cumpleaños` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `rol`, `cumpleaños`, `email`, `contraseña`, `telefono`, `nombre_usuario`) VALUES
(21, 'Boris', 'Herrera', 'cliente', '1993-12-07', 'boris@gmail.com', 'borisclave', '123341', 'Omega'),
(22, 'andres', 'alayo', 'admin', '2023-11-08', 'andres@gmail.com', 'asd', '111222333444', 'is_sava'),
(24, 'Nicolás', 'Garrido', 'cliente', '2003-04-08', 'nicolas@gmail.com', 'nicoclave', '12134', 'Melman'),
(26, 'Marino', 'Gutierrez', 'cliente', '2000-10-28', 'marig@gmail.com', 'marinclave', '2233332', 'MarinGuti'),
(27, 'Paul', 'Zurita', 'cliente', '2023-02-15', 'pazu@gmal.com', 'pazuclave', '00003', 'Pazu'),
(28, 'Luis Manuel', 'Conesa', 'cliente', '2023-11-14', 'luima@gmail.com', 'luiclave', '87645', 'Luima'),
(29, 'Mikasa', 'Akerman', 'cliente', '2023-05-11', 'mikasa@gmail.com', 'iloveren', '9878987', 'Itterashai'),
(30, 'Jean', 'Kirschtein', 'cliente', '2022-12-20', 'yan@ricardio.com', 'mikasahazmecaso', '111111111', 'Caballo'),
(31, 'Alonso', 'Vargas', 'cliente', '2006-07-07', 'alonso@gmail.com', '123', '1232144', 'Leon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `barbero`
--
ALTER TABLE `barbero`
  ADD PRIMARY KEY (`id_barbero`);

--
-- Indices de la tabla `barbero_disponibilidad`
--
ALTER TABLE `barbero_disponibilidad`
  ADD PRIMARY KEY (`id_barberodisponibilidad`),
  ADD KEY `id_barbero` (`id_barbero`),
  ADD KEY `id_reserva` (`id_reserva`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `barbero`
--
ALTER TABLE `barbero`
  MODIFY `id_barbero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `barbero_disponibilidad`
--
ALTER TABLE `barbero_disponibilidad`
  MODIFY `id_barberodisponibilidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barbero_disponibilidad`
--
ALTER TABLE `barbero_disponibilidad`
  ADD CONSTRAINT `barbero_disponibilidad_ibfk_1` FOREIGN KEY (`id_barbero`) REFERENCES `barbero` (`id_barbero`),
  ADD CONSTRAINT `barbero_disponibilidad_ibfk_2` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id_reserva`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id_articulo`),
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
