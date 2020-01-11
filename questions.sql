-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2020 a las 17:07:06
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecopreguntas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) DEFAULT 1,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `sources` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `points`, `text`, `verified`, `created_by`, `sources`, `created_at`, `updated_at`) VALUES
(1, 15, '¿Qué factor contribuye más a que suba el nivel del mar?', 1, 'admin', '', '2019-12-23 00:54:48', '2020-01-04 22:34:23'),
(2, 10, '¿Cuáles son las principales causas de las temperaturas crecientes alrededor del mundo?', 1, 'admin', '', '2019-12-24 02:11:49', '2019-12-24 02:11:49'),
(3, 20, '¿Qué país emitió la mayor cantidad de gases de invernadero desde 1850?', 1, 'admin', '', '2019-12-24 02:25:42', '2019-12-24 02:25:42'),
(4, 15, '¿Cual es el principal emisor de metano a nivel mundial?', 1, 'admin', '', '2019-12-25 00:58:18', '2019-12-25 00:58:18'),
(5, 20, '¿Cuánto CO2 (dióxido de carbono) genera un auto promedio en un año?', 1, 'admin', '', '2020-01-04 21:58:39', '2020-01-04 21:58:39'),
(6, 15, 'Sin ningún tipo de reducción de emisiones, ¿cuánto puede llegar a aumentar la temperatura en 2100?', 1, 'admin', '', '2020-01-04 22:03:25', '2020-01-04 22:03:25'),
(7, 15, 'Si reducimos los gases de invernadero de forma drástica, los efectos del cambio climático van a:', 1, 'admin', '', '2020-01-04 22:09:02', '2020-01-04 22:09:02'),
(8, 15, '¿Cuantas veces se puede reciclar el plástico?', 1, 'admin', '', '2020-01-04 22:22:53', '2020-01-04 22:22:53'),
(9, 10, '¿Cuántas veces se puede reciclar el papel?', 1, 'admin', '', '2020-01-04 22:25:32', '2020-01-04 22:25:32'),
(10, 15, '¿Cuantas veces se puede reciclar el aluminio?', 1, 'admin', '', '2020-01-04 22:29:10', '2020-01-04 22:29:10'),
(11, 15, '¿Cuantas veces se pueden reciclar los metales?', 1, 'admin', '', '2020-01-04 22:38:19', '2020-01-04 22:38:19'),
(12, 20, '¿Cuántos territorios se perdieron en la deforestación del Amazonas en esta última decada?', 1, 'admin', '', '2020-01-04 22:40:48', '2020-01-04 22:40:48'),
(13, 10, '¿Qué porcentaje del agua de mar no es apta para consumo humano?', 1, 'admin', '', '2020-01-04 22:45:23', '2020-01-04 22:45:23'),
(14, 15, '¿Cuántos son los residuos generados por las empresas y los hogares en la Unión Europea?', 0, 'admin', '', '2020-01-04 22:47:57', '2020-01-04 22:47:57'),
(15, 10, '¿Qué capital europea fue declarada \'capital verde\' en al año 2020?', 1, 'admin', '', '2020-01-06 01:29:49', '2020-01-06 01:29:49'),
(17, 15, '¿Qué porcentaje de nuestros residuos puede ayudar a reducir una compostera?', 0, 'mar', NULL, '2020-01-06 03:50:08', '2020-01-06 03:50:08'),
(30, 15, 'Una pregunta', 0, 'mar', NULL, '2020-01-06 06:47:12', '2020-01-06 06:47:12'),
(31, 15, 'Otra preguna', 0, 'mar', NULL, '2020-01-06 06:49:25', '2020-01-06 06:49:25'),
(32, 15, 'Mas preguntas', 0, 'mar', NULL, '2020-01-06 06:50:22', '2020-01-06 06:50:22'),
(33, 15, 'Pregunta 33', 0, 'mar', NULL, '2020-01-06 06:52:28', '2020-01-06 06:52:28'),
(35, 15, 'PREGUNTA 35', 0, 'mar', NULL, '2020-01-06 06:55:16', '2020-01-06 06:55:16'),
(36, 15, '¿Cuántos grados son capaces de disminuir los arboles?', 0, 'mar', NULL, '2020-01-06 06:56:45', '2020-01-06 06:56:45'),
(37, 10, '¿Cual es el país que más CO2 emitió en el 2019?', 1, 'admin', NULL, '2020-01-06 07:52:04', '2020-01-06 07:52:04'),
(38, 15, '¿Qué es el downcycling?', 0, 'mar', NULL, '2020-01-06 23:07:58', '2020-01-06 23:07:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `text` (`text`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

