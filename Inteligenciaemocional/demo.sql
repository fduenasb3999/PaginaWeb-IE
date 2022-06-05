-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2022 a las 06:08:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_users`
--

CREATE TABLE `site_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `site_users`
--

INSERT INTO `site_users` (`id`, `name`, `email`, `password`, `phone`, `created_at`) VALUES
(1, 'bryan', 'bryangmun@gmail.com', '$2y$12$dS1f/K6plvXEL4kQzKSXDO/dcmCYlSxaN8HFbyglQMPhnqJ7Yg8HG', '3127199999', '2022-06-01 13:25:52'),
(3, 'ffff', 'bgarcia75872@universidadean.edu.co', '$2y$12$N87Y7Kw0WbXhlbqcOtWRD.QfxAl0k5nmBdjhuhzlwbYDN.XGs0wv2', '555', '2022-06-02 03:42:29'),
(5, 'Diego', 'tank@gmail.com', '123456', '22222222', '2022-06-02 04:40:31'),
(6, 'bryan', 'prueba@gmail.com', '123456', '22211425', '2022-06-02 05:43:29'),
(8, 'BRYAN GARCIA', 'ejemplo@gmail.com', '123456789', '3102719133', '2022-06-02 14:10:15'),
(9, 'Andrés Pérez', 'user@prueba.com', '123456', '322221451', '2022-06-03 01:04:13'),
(14, 'Vinicius', 'vini@gmail.com', '123456', '5550123', '2022-06-04 05:52:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `site_users`
--
ALTER TABLE `site_users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `site_users`
--
ALTER TABLE `site_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
