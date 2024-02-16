-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2024 a las 11:38:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users-list`
--

CREATE TABLE `users-list` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname1` varchar(100) NOT NULL,
  `surname2` varchar(100) NOT NULL,
  `Image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users-list`
--

INSERT INTO `users-list` (`id`, `email`, `name`, `surname1`, `surname2`, `Image`) VALUES
(1, 'usuario1@yopmail.com', 'Juan', 'Gómez', 'Martínez', 'https://randomuser.me/api/portraits/men/1.jpg'),
(2, 'usuario2@yopmail.com', 'María', 'López', 'Sánchez', 'https://randomuser.me/api/portraits/women/2.jpg'),
(3, 'usuario3@yopmail.com', 'Pedro', 'Fernández', 'Gutiérrez', 'https://randomuser.me/api/portraits/men/3.jpg'),
(4, 'usuario4@yopmail.com', 'Ana', 'Rodríguez', 'García', 'https://randomuser.me/api/portraits/women/4.jpg'),
(5, 'usuario5@yopmail.com', 'Carlos', 'Pérez', 'Hernández', 'https://randomuser.me/api/portraits/men/5.jpg'),
(6, 'usuario6@yopmail.com', 'Laura', 'García', 'Jiménez', 'https://randomuser.me/api/portraits/women/6.jpg'),
(7, 'usuario7@yopmail.com', 'Francisco', 'Martínez', 'Sánchez', 'https://randomuser.me/api/portraits/men/7.jpg'),
(8, 'usuario8@yopmail.com', 'Elena', 'Fernández', 'Gutiérrez', 'https://randomuser.me/api/portraits/women/8.jpg'),
(9, 'usuario9@yopmail.com', 'Javier', 'Rodríguez', 'García', 'https://randomuser.me/api/portraits/men/9.jpg'),
(10, 'usuario10@yopmail.com', 'Carmen', 'Pérez', 'Hernández', 'https://randomuser.me/api/portraits/women/10.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users-list`
--
ALTER TABLE `users-list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users-list`
--
ALTER TABLE `users-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
