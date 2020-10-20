-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 22:21:42
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso-php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(4) NOT NULL,
  `token` text NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `token`, `nombre`, `email`, `password`, `fecha`) VALUES
(1, 'd568d2e7a08e5c5f1769019564909a88', 'juan', 'juan@juan.com', '123', '2020-10-20 15:17:56'),
(2, '9adb5ea5edb9934cc7c366a2969e156f', 'juanc', 'juanc@gmail.com', '123', '2020-10-20 15:19:26'),
(3, '92b42128db9e6f32e62f0eede09e28ee', 'juanq', 'juanq@gmail.com', '123', '2020-10-20 15:21:04'),
(4, 'c605d6c4ea02f574602fe0392ab2425b', 'sandras', 'sandras@sandras.com', 'sandras', '2020-10-20 17:57:11'),
(5, 'e4e563510dee8ee55ed01c027191ec83', 'asatel', 'asatel@satel.com', 'asatel', '2020-10-20 20:13:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
