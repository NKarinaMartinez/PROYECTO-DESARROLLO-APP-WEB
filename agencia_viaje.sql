-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2023 a las 01:47:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_viaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `bol_id` int(11) NOT NULL,
  `bol_nombre` varchar(50) NOT NULL,
  `bol_precio` double NOT NULL,
  `bol_estado` int(1) NOT NULL,
  `bol_idCategoria` int(11) NOT NULL,
  `bol_guia` varchar(5) NOT NULL,
  `bol_descripcion` varchar(100) NOT NULL,
  `bol_usuarioActualizacion` varchar(12) NOT NULL,
  `bol_fechaActualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `boleto`
--

INSERT INTO `boleto` (`bol_id`, `bol_nombre`, `bol_precio`, `bol_estado`, `bol_idCategoria`, `bol_guia`, `bol_descripcion`, `bol_usuarioActualizacion`, `bol_fechaActualizacion`) VALUES
(1, 'Campamento Vacacional Extremo', 29.99, 1, 1, 'NO', 'Experiencia emocionante de aventura y diversión en la naturaleza, ideal para jóvenes aventureros.', 'usuario', '2023-03-06 03:36:13'),
(2, 'Huasquila Amazon Lodge - Napo', 35.99, 1, 2, 'SI', 'Eco-lodge sostenible en la selva amazónica con actividades únicas y alojamiento cómodo y acogedor.', 'usuario', '2023-03-07 21:45:13'),
(3, 'Buceo Extremo', 30.4, 1, 1, 'SI', 'Los mejores sitios de buceo en la Isla Santa Cruz son bahía de Puerto Ayora.', 'usuario', '2023-03-11 01:41:10'),
(4, 'Quito Cultural 3D-2N', 40, 1, 2, 'NO', 'Quito Cultural 3D-2N', 'usuario', '2023-03-09 02:08:27'),
(5, 'Florecimiento de Guayacanes', 15.99, 1, 2, 'SI', 'Florecimiento de Guayacanes', 'usuario', '2023-03-09 02:08:27'),
(6, 'Land Tour Punta Cana', 345, 1, 3, 'NO', 'Land Tour Punta Cana, 5 días para disfrutar.', 'usuario', '2023-03-11 01:42:48'),
(7, 'Egipto y Dubái', 560, 0, 3, 'SI', 'Egipto y Dubái, con gastos de hoteleria incluido.', '', '2023-03-11 00:55:09'),
(8, 'Ecuador - Manab&iacute;', 45.5, 0, 2, 'NO', '', 'usuario', '2023-03-11 01:39:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(30) NOT NULL,
  `cat_descripcion` varchar(100) NOT NULL,
  `cat_estado` int(1) NOT NULL,
  `cat_usuarioActualizacion` varchar(12) NOT NULL,
  `cat_fechaActualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nombre`, `cat_descripcion`, `cat_estado`, `cat_usuarioActualizacion`, `cat_fechaActualizacion`) VALUES
(1, 'Local', 'Lugares turisticos ubicados cerca de su localidad o ciudad', 1, '', '2021-02-01 15:50:44'),
(2, 'Nacional', 'Lugares turisticos ubicados a nivel Nacional', 1, '', '2021-02-17 15:55:58'),
(3, 'Internacional', 'Lugares turisticos ubicados a nivel Internacional', 1, '', '2021-02-19 12:44:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `H_id` int(100) NOT NULL,
  `H_nombre` text NOT NULL,
  `H_Pais` text NOT NULL,
  `H_Ciudad` text NOT NULL,
  `H_ValorDia` double NOT NULL,
  `H_ValorNoche` double NOT NULL,
  `H_Estrellas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`H_id`, `H_nombre`, `H_Pais`, `H_Ciudad`, `H_ValorDia`, `H_ValorNoche`, `H_Estrellas`) VALUES
(3, 'oro verde', 'Ecuador', 'Guayaquil', 35, 40, 3),
(4, 'La Perla', 'Ecuador', 'Guayaquil', 30, 50, 4),
(5, 'Princess Mundo Imperial Riviera Diamante Acapulco', 'Mexico', 'Acapulco', 100, 90, 5),
(6, 'Melia Puerto Vallarta All Inclusive', 'Mexico', 'Puerto Vallarta', 260, 250, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'gerente'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`, `rol_id`) VALUES
(1, 'Nicole', 'admin', 'admin', 1),
(2, 'Dario', 'gerente', 'gerente', 2),
(3, 'Andrea', 'cliente', 'cliente', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`bol_id`),
  ADD KEY `fk_categoria` (`bol_idCategoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`H_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_fk` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `bol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `H_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_fk` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
