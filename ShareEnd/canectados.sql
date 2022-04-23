-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2022 a las 04:25:51
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
-- Base de datos: `canectados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorizacion_edad`
--

CREATE TABLE `categorizacion_edad` (
  `idCategoriaEdad` int(11) NOT NULL,
  `A` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `B` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `idGeneros` int(11) NOT NULL,
  `aventura` text COLLATE utf8_spanish_ci NOT NULL,
  `ciencia_ficcion` text COLLATE utf8_spanish_ci NOT NULL,
  `historico` text COLLATE utf8_spanish_ci NOT NULL,
  `policial` text COLLATE utf8_spanish_ci NOT NULL,
  `humor` text COLLATE utf8_spanish_ci NOT NULL,
  `fantastico` text COLLATE utf8_spanish_ci NOT NULL,
  `terror` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibros` int(11) NOT NULL,
  `edadUsuario` int(11) NOT NULL,
  `nombreLibro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `autorLibro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `generoLibro` set('aventura','ficción','histórico','policial','humor','fantástico','terror') COLLATE utf8_spanish_ci NOT NULL,
  `paginasLibro` int(4) NOT NULL,
  `VisitasLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibros`, `edadUsuario`, `nombreLibro`, `autorLibro`, `generoLibro`, `paginasLibro`, `VisitasLibro`) VALUES
(1, 0, 'Catadora de Hitler', 'V.S. Alexander', 'ficción', 352, 0),
(2, 0, 'Edipo Rey', 'Sófocles', 'histórico', 298, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombreUsuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edadUsuario` int(2) NOT NULL,
  `passwordUsuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nicknameUsuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correoUsuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `generoLibro` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombreUsuario`, `edadUsuario`, `passwordUsuario`, `nicknameUsuario`, `correoUsuario`, `generoLibro`, `timestamp`) VALUES
(3, 'holaperras', 2, 'sdfsdf', 'sdf', 'sdfsdf@gmail.com', '', '2022-04-20 22:20:27'),
(4, 'juanito', 20, 'sdf', 'sdfsdf', 'sdfsdf@gmail.com', '', '2022-04-21 02:24:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorizacion_edad`
--
ALTER TABLE `categorizacion_edad`
  ADD PRIMARY KEY (`idCategoriaEdad`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idGeneros`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibros`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorizacion_edad`
--
ALTER TABLE `categorizacion_edad`
  MODIFY `idCategoriaEdad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `idGeneros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
