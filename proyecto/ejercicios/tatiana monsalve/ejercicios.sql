-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2017 a las 02:39:13
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinco`
--

CREATE TABLE `cinco` (
  `id` int(11) NOT NULL,
  `vlr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuatro`
--

CREATE TABLE `cuatro` (
  `id` int(11) NOT NULL,
  `suma` int(30) NOT NULL,
  `multiplicacion` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diez`
--

CREATE TABLE `diez` (
  `id` int(11) NOT NULL,
  `vlr` int(10) NOT NULL,
  `iva` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dos`
--

CREATE TABLE `dos` (
  `id` int(11) NOT NULL,
  `mayor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nueve`
--

CREATE TABLE `nueve` (
  `id` int(11) NOT NULL,
  `resultado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocho`
--

CREATE TABLE `ocho` (
  `id` int(11) NOT NULL,
  `fahrenheit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seis`
--

CREATE TABLE `seis` (
  `id` int(11) NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siete`
--

CREATE TABLE `siete` (
  `id` int(11) NOT NULL,
  `celsius` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tres`
--

CREATE TABLE `tres` (
  `id` int(11) NOT NULL,
  `suma` int(30) NOT NULL,
  `resta` int(30) NOT NULL,
  `multiplicacion` int(30) NOT NULL,
  `division` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uno`
--

CREATE TABLE `uno` (
  `id` int(111) NOT NULL,
  `saludo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cinco`
--
ALTER TABLE `cinco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuatro`
--
ALTER TABLE `cuatro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diez`
--
ALTER TABLE `diez`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dos`
--
ALTER TABLE `dos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nueve`
--
ALTER TABLE `nueve`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ocho`
--
ALTER TABLE `ocho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seis`
--
ALTER TABLE `seis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `siete`
--
ALTER TABLE `siete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tres`
--
ALTER TABLE `tres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `uno`
--
ALTER TABLE `uno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cinco`
--
ALTER TABLE `cinco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuatro`
--
ALTER TABLE `cuatro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `diez`
--
ALTER TABLE `diez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dos`
--
ALTER TABLE `dos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nueve`
--
ALTER TABLE `nueve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ocho`
--
ALTER TABLE `ocho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seis`
--
ALTER TABLE `seis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `siete`
--
ALTER TABLE `siete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tres`
--
ALTER TABLE `tres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `uno`
--
ALTER TABLE `uno`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
