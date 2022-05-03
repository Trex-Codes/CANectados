-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2022 a las 04:00:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18815618_canectados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `IDgeneros` int(11) NOT NULL,
  `aventura` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ciencia ficcion` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `historia` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `humor` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fantasia` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `terror` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `IDimagenes` int(11) NOT NULL,
  `ruta` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `IDlibros` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `generoLibro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Numeropaginas` int(4) NOT NULL,
  `FechaIngresoDato` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`IDlibros`, `nombre`, `autor`, `generoLibro`, `Numeropaginas`, `FechaIngresoDato`) VALUES
(1, 'Caperucita Roja', 'Charles Perrault', 'Cuento de hadas', 34, '2022-05-02 17:35:24'),
(2, 'Satanas', 'Mario Mendoza', 'Ficción', 754, '2022-05-03 00:20:50'),
(3, 'Hamlet', 'William Shakespeare', 'Dramático', 322, '2022-05-03 00:32:55'),
(4, 'Peter Pan', 'James Matthew Barrie', 'Fantasía ', 322, '2022-05-03 00:36:34'),
(5, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'novela realista', 478, '2022-05-03 00:47:35'),
(6, 'Fundamentación de la metafísica de las costum', 'Manuel Kant', 'Filosofía ', 100, '2022-05-03 01:00:01'),
(7, 'Viaje al centro de la tierra', 'Julio Verne', 'Ficción ', 317, '2022-05-03 01:11:25'),
(8, 'La República', 'Platón ', 'Filosofía ', 226, '2022-05-03 01:22:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IDunico` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` int(2) NOT NULL,
  `Password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `User` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `FechaIngresoDato` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDunico`, `Nombre`, `Edad`, `Password`, `User`, `Correo`, `FechaIngresoDato`) VALUES
(1, 'Carlos Aguilar', 28, '202cb962ac59075b964b07152d234b70', 'cpaguilar', 'clpaguilar@gmail.com', '2022-05-02 23:15:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`IDgeneros`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`IDimagenes`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`IDlibros`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDunico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `IDgeneros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `IDimagenes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `IDlibros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDunico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
