-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2017 a las 20:50:04
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tatiana`
--
CREATE DATABASE IF NOT EXISTS `tatiana` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tatiana`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatiana`
--

CREATE TABLE `tatiana` (
  `id` int(11) NOT NULL,
  `nombre` varchar(85) NOT NULL,
  `apellido` varchar(85) NOT NULL,
  `direccion` varchar(85) NOT NULL,
  `email` varchar(85) NOT NULL,
  `telefono` int(10) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `tema` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tatiana`
--
ALTER TABLE `tatiana`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tatiana`
--
ALTER TABLE `tatiana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
