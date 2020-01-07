-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2020 a las 17:06:38
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
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(4) NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `text`, `correct`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'La creciente actividad volcánica', 0, 2, '2019-12-23 00:56:10', '2019-12-24 02:16:49'),
(2, 'El derretimiento del hielo marino', 0, 1, '2019-12-24 02:08:39', '2019-12-24 02:08:39'),
(3, 'La subida del fondo del mar', 0, 1, '2019-12-24 02:08:52', '2019-12-24 02:08:52'),
(4, 'Los continentes cada vez más pesados', 0, 1, '2019-12-24 02:09:08', '2019-12-24 02:09:08'),
(5, 'El derretimiento de las masas de hielo terrestre', 1, 1, '2019-12-24 02:11:18', '2019-12-24 02:11:18'),
(6, 'Los ciclos naturales de calentamiento y enfriamiento', 0, 2, '2019-12-24 02:17:59', '2019-12-24 02:17:59'),
(7, 'Los grandes centros de datos que almacenan millones de videos de gatos del Internet.', 0, 2, '2019-12-24 02:18:25', '2019-12-24 02:29:23'),
(8, 'Las emisiones de gases de invernadero que la actividad humana causa', 1, 2, '2019-12-24 02:18:46', '2019-12-24 02:28:37'),
(9, 'China', 0, 3, '2019-12-24 02:25:56', '2019-12-24 02:25:56'),
(10, 'Rusia', 0, 3, '2019-12-24 02:26:10', '2019-12-24 02:26:30'),
(11, 'Indonesia', 0, 3, '2019-12-24 02:26:19', '2019-12-24 02:26:38'),
(12, 'Estados Unidos', 1, 3, '2019-12-24 02:26:57', '2019-12-24 02:28:15'),
(13, 'La ganadería y la agricultura.', 1, 4, '2019-12-25 01:00:33', '2019-12-25 01:00:33'),
(14, 'Las fugas en las cañerías de gas.', 0, 4, '2020-01-04 21:28:42', '2020-01-04 21:28:42'),
(15, 'Las estufas a gas y las chimeneas.', 0, 4, '2020-01-04 21:29:33', '2020-01-04 21:29:33'),
(16, '190 kilogramos', 0, 5, '2020-01-04 21:58:59', '2020-01-04 21:58:59'),
(17, '4700 kilogramos', 1, 5, '2020-01-04 21:59:48', '2020-01-04 21:59:48'),
(18, '530 kilogramos', 0, 5, '2020-01-04 22:00:06', '2020-01-04 22:02:19'),
(19, '2200 kilogramos', 0, 5, '2020-01-04 22:02:55', '2020-01-04 22:02:55'),
(20, '24°C', 0, 6, '2020-01-04 22:04:02', '2020-01-04 22:04:02'),
(21, '20°C', 0, 6, '2020-01-04 22:04:25', '2020-01-04 22:04:25'),
(22, '6°C', 1, 6, '2020-01-04 22:04:44', '2020-01-04 22:05:10'),
(23, '2°C', 0, 6, '2020-01-04 22:05:40', '2020-01-04 22:05:40'),
(24, 'Continuar durante este siglo y más allá.', 1, 7, '2020-01-04 22:09:41', '2020-01-04 22:09:41'),
(25, 'Ir y venir en ciclos.', 0, 7, '2020-01-04 22:09:52', '2020-01-04 22:21:09'),
(26, 'Desaparecer, y va a resultar en el enfriamiento drástico de la Tierra.', 0, 7, '2020-01-04 22:20:53', '2020-01-04 22:21:25'),
(27, 'Desaparecer casi inmediatamente.', 0, 7, '2020-01-04 22:21:43', '2020-01-04 22:22:02'),
(28, 'Infinitas veces', 0, 8, '2020-01-04 22:24:02', '2020-01-04 22:24:02'),
(29, 'Hasta 6 veces', 0, 8, '2020-01-04 22:24:17', '2020-01-04 22:24:17'),
(30, 'Entre 3 o 4 veces', 0, 8, '2020-01-04 22:24:42', '2020-01-04 22:24:42'),
(31, 'Una o dos veces', 1, 8, '2020-01-04 22:25:01', '2020-01-04 22:25:01'),
(32, 'Infinitas veces', 0, 9, '2020-01-04 22:27:27', '2020-01-04 22:27:27'),
(33, '3 o 4 veces', 0, 9, '2020-01-04 22:28:01', '2020-01-04 22:28:01'),
(34, 'Entre 5 a 7 veces', 1, 9, '2020-01-04 22:28:25', '2020-01-04 22:28:25'),
(35, 'Hasta 10 veces', 0, 9, '2020-01-04 22:28:39', '2020-01-04 22:28:39'),
(36, 'Infinitas veces', 1, 10, '2020-01-04 22:29:35', '2020-01-04 22:29:35'),
(37, 'Hasta 10 veces', 0, 10, '2020-01-04 22:33:45', '2020-01-04 22:33:45'),
(38, 'Entre 3 o 4 veces', 0, 10, '2020-01-04 22:37:01', '2020-01-04 22:37:01'),
(39, 'Entre 5 a 7 veces', 0, 10, '2020-01-04 22:37:47', '2020-01-04 22:37:47'),
(40, 'Entre 5 a 7 veces', 0, 11, '2020-01-04 22:38:36', '2020-01-04 22:38:36'),
(41, 'Infinitas veces', 1, 11, '2020-01-04 22:38:49', '2020-01-04 22:38:49'),
(42, 'Entre 10 a 15 veces', 0, 11, '2020-01-04 22:39:07', '2020-01-04 22:39:07'),
(43, 'Cerca de 62.159 kilómetros cuadrados o a 10,3 millones de campos de fútbol americano', 1, 12, '2020-01-04 22:44:55', '2020-01-04 22:44:55'),
(44, '97.5%', 1, 13, '2020-01-04 22:45:45', '2020-01-04 22:45:45'),
(45, '90%', 0, 13, '2020-01-04 22:45:59', '2020-01-04 22:45:59'),
(46, '99%', 0, 13, '2020-01-04 22:46:10', '2020-01-04 22:46:10'),
(47, '95%', 0, 13, '2020-01-04 22:46:20', '2020-01-04 22:46:20'),
(48, 'Lisboa', 1, 15, '2020-01-06 01:30:42', '2020-01-06 01:30:42'),
(49, 'Londres', 0, 15, '2020-01-06 01:33:45', '2020-01-06 01:33:45'),
(50, 'Amsterdam', 0, 15, '2020-01-06 01:34:03', '2020-01-06 01:34:03'),
(51, 'Entre 2 y 8 grados', 1, 17, '2020-01-06 03:50:08', '2020-01-06 03:50:08'),
(52, 'Entre 2 y 8 grados', 1, 17, '2020-01-06 03:50:08', '2020-01-06 03:50:08'),
(53, 'Entre 2 y 8 grados', 1, 17, '2020-01-06 03:50:08', '2020-01-06 03:50:08'),
(54, 'Entre 2 y 8 grados', 1, 17, '2020-01-06 03:50:08', '2020-01-06 03:50:08'),
(55, 'Entre 2 y 8 grados', 1, 30, '2020-01-06 06:47:13', '2020-01-06 06:47:13'),
(56, 'Entre 2 y 8 grados', 1, 30, '2020-01-06 06:47:13', '2020-01-06 06:47:13'),
(57, 'Entre 2 y 8 grados', 1, 30, '2020-01-06 06:47:13', '2020-01-06 06:47:13'),
(58, 'Entre 2 y 8 grados', 1, 30, '2020-01-06 06:47:13', '2020-01-06 06:47:13'),
(59, '1', 0, 31, '2020-01-06 06:49:25', '2020-01-06 06:49:25'),
(60, '2', 0, 31, '2020-01-06 06:49:25', '2020-01-06 06:49:25'),
(61, '3', 0, 31, '2020-01-06 06:49:25', '2020-01-06 06:49:25'),
(62, '4', 0, 31, '2020-01-06 06:49:25', '2020-01-06 06:49:25'),
(63, '1', 0, 32, '2020-01-06 06:50:22', '2020-01-06 06:50:22'),
(64, '1', 0, 33, '2020-01-06 06:52:28', '2020-01-06 06:52:28'),
(65, 'Entre 9 y 12 grados', 0, 35, '2020-01-06 06:55:16', '2020-01-06 06:55:16'),
(66, 'Entre 9 y 12 grados', 0, 36, '2020-01-06 06:56:45', '2020-01-06 06:56:45'),
(67, 'Menos de 2°', 0, 36, '2020-01-06 07:25:37', '2020-01-06 07:25:37'),
(68, 'Menos de 2°', 0, 36, '2020-01-06 07:51:15', '2020-01-06 07:51:15'),
(69, 'China', 1, 37, '2020-01-06 07:52:55', '2020-01-06 07:52:55'),
(70, 'Es el proceso de reciclaje de residuos donde el nuevo material reciclado tiene funcionalidad y calidad más baja que el material original.', 1, 38, '2020-01-06 23:07:58', '2020-01-06 23:07:58'),
(71, 'Es un proceso al cual se someten a los residuos sucios para limpiarlos', 0, 38, '2020-01-06 23:07:58', '2020-01-06 23:07:58'),
(72, 'Opcion 3', 0, 38, '2020-01-06 23:07:58', '2020-01-06 23:07:58'),
(73, 'Opcion 4', 0, 38, '2020-01-06 23:07:58', '2020-01-06 23:07:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_17_183141_create_questions_table', 1),
(5, '2019_12_17_184834_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('marianagaldo@hotmail.com', '$2y$10$6DioVQF6IbRqCWmAv3OuVe7dMUsUqY.93a8BqGNVi7Fhcqw7Ltq1e', '2020-01-03 00:40:27');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `activated` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `answered_questions` int(11) NOT NULL DEFAULT 0,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `username`, `profile_picture`, `score`, `activated`, `password`, `birth_date`, `answered_questions`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mariana', 'Galdo', 'marianagaldo@hotmail.com', NULL, 'mari', NULL, 0, 1, '$2y$10$7ol6pUPZiozXNsnOtP12qu5FjFVI8EfY3rWALZ6EqVpM/Q5I.Za5S', '1992-12-12', 0, 1, NULL, '2019-12-22 09:16:57', '2020-01-01 01:35:08'),
(2, 'Pepe', 'Perez', 'pepe@pepe.com', NULL, 'pepe', NULL, 0, 1, '$2y$10$8jJuqxOqP12TDyJbsdvKbu.3/viGEKgBTnBGYsryH5/OHrf2ULQhS', '1992-12-12', 0, 0, 'LQRixN0hh7tAi1IGeSkFvs9I9LPLsVVVNzbQ1zk1QUep7x1C1YH1z7fNRW4S', '2019-12-23 02:54:22', '2019-12-23 02:54:22'),
(3, 'Martin', 'Gonzalez', 'martingonzalez@martin.com', NULL, 'martincito', 'storage/martingonzalez@martin.com1577943686.jpg', 500, 1, '$2y$10$aufSezpW86xFF4Y90eigbe/aKmNL.s8cVxrKCvRAH8eqoB4Ni7rbW', '1992-12-12', 11, 0, NULL, '2019-12-27 05:24:01', '2020-01-04 08:53:26'),
(4, 'Martina', 'Gomez', 'martina@martina.com', NULL, 'martu', 'storage/martina@martina.com1577832929.jpg', 0, 1, '$2y$10$IE86Btp9VVO43m.fsT8RLOVJBuuCTiZbSNET5lsRFsWN1rn7S85Au', '1997-02-05', 0, 0, NULL, '2020-01-01 01:55:29', '2020-01-01 01:55:29'),
(5, 'Juan', 'Perez', 'juancito@juan.com', NULL, 'juancito', 'images/avatars/juancito@juan.com1577833088.jpg', 0, 1, '$2y$10$.Y/lzCz/mBFSWTlJJUDnqOqsUef4.3A/18EfjY3w0YzPiE6AKYysK', '1998-12-12', 0, 0, NULL, '2020-01-01 01:58:08', '2020-01-01 01:58:08'),
(6, 'Martin', 'Gonzalez', 'martin@martin.com', NULL, 'martin2', 'storage/martin@martin.com1577833528.jpg', 0, 1, '$2y$10$JNNXUhlpRihSl0NUjKACYO3pxoWdHmCo9It7FkXHPoRDr0pGjUy9q', '1991-10-10', 0, 0, NULL, '2020-01-01 02:05:28', '2020-01-01 02:05:28'),
(7, 'Mariana', 'Galdo', 'marianagaldomartinez@gmail.com', NULL, 'mar', '../../storage/marianagaldomartinez@gmail.com1578370775.jpg', 1060, 1, '$2y$10$bbpHDpOfVoUc6Z8TQVciR.uyWh1e3FxqsUp.2.wwyEaee20Yn4Dum', '2001-06-30', 94, 1, NULL, '2020-01-05 00:11:27', '2020-01-07 07:19:35'),
(8, 'mauro', 'urqyu<i', 'hsjmm@hotmail.com', NULL, 'nahsgbn', '../../storage/hsjmm@hotmail.com1578371578.jpg', 165, 1, '$2y$10$y/Vo70moW6vE/zoXmywXFeFmQEy/UycdNx2gSpASioKDHIKhrvyGG', '5555-04-05', 19, 0, NULL, '2020-01-06 23:10:50', '2020-01-07 07:32:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `text` (`text`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

