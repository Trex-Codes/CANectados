-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-05-2022 a las 22:56:14
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `Generos`
--

CREATE TABLE `Generos` (
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
-- Estructura de tabla para la tabla `Libros`
--

CREATE TABLE `Libros` (
  `IDlibros` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `generoLibro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Numeropaginas` int(4) NOT NULL,
  `FechaIngresoDato` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Libros`
--

INSERT INTO `Libros` (`IDlibros`, `nombre`, `autor`, `generoLibro`, `Numeropaginas`, `FechaIngresoDato`) VALUES
(1, 'Caperucita Roja', 'Charles Perrault', 'Cuento de hadas', 34, '2022-05-02 17:35:24'),
(2, 'Satanas', 'Mario Mendoza', 'Ficcion', 754, '2022-05-02 18:47:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LibrosPDF`
--

CREATE TABLE `LibrosPDF` (
  `IDlibros` int(11) NOT NULL,
  `ruta` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `IDunico` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` int(2) NOT NULL,
  `Password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `User` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `FechaIngresoDato` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`IDunico`, `Nombre`, `Edad`, `Password`, `User`, `Correo`, `FechaIngresoDato`) VALUES
(1, 'Carlos Aguilar', 58, '202cb962ac59075b964b07152d234b70', 'cpAguilar', 'Auiar@gmail.com', '2022-05-02 17:03:39'),
(2, 'gamba', 17, '900150983cd24fb0d6963f7d28e17f72', 'gambito', 'gambita@gmail.com', '2022-05-02 18:42:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Generos`
--
ALTER TABLE `Generos`
  ADD PRIMARY KEY (`IDgeneros`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`IDimagenes`);

--
-- Indices de la tabla `Libros`
--
ALTER TABLE `Libros`
  ADD PRIMARY KEY (`IDlibros`);

--
-- Indices de la tabla `LibrosPDF`
--
ALTER TABLE `LibrosPDF`
  ADD PRIMARY KEY (`IDlibros`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`IDunico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Generos`
--
ALTER TABLE `Generos`
  MODIFY `IDgeneros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `IDimagenes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Libros`
--
ALTER TABLE `Libros`
  MODIFY `IDlibros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `LibrosPDF`
--
ALTER TABLE `LibrosPDF`
  MODIFY `IDlibros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `IDunico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
