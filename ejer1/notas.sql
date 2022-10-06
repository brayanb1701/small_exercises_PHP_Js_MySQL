-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-11-2016 a las 18:06:03
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `informatica`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `notas`
-- 

CREATE TABLE `notas` (
  `id` int(100) NOT NULL auto_increment,
  `nota1` int(20) NOT NULL,
  `nota2` int(20) NOT NULL,
  `nota3` int(20) NOT NULL,
  `promedio` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `notas`
-- 

