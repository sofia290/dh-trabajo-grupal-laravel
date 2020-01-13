-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2020 a las 05:16:30
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
(1, 'La creciente actividad volcánica', 0, 2, '2019-12-23 03:56:10', '2019-12-24 05:16:49'),
(2, 'El derretimiento del hielo marino', 0, 1, '2019-12-24 05:08:39', '2019-12-24 05:08:39'),
(3, 'La subida del fondo del mar', 0, 1, '2019-12-24 05:08:52', '2019-12-24 05:08:52'),
(4, 'Los continentes cada vez más pesados', 0, 1, '2019-12-24 05:09:08', '2019-12-24 05:09:08'),
(5, 'El derretimiento de las masas de hielo terrestre', 1, 1, '2019-12-24 05:11:18', '2019-12-24 05:11:18'),
(6, 'Los ciclos naturales de calentamiento y enfriamiento', 0, 2, '2019-12-24 05:17:59', '2019-12-24 05:17:59'),
(7, 'Los grandes centros de datos que almacenan millones de videos de gatos del Internet.', 0, 2, '2019-12-24 05:18:25', '2019-12-24 05:29:23'),
(8, 'Las emisiones de gases de invernadero que la actividad humana causa', 1, 2, '2019-12-24 05:18:46', '2019-12-24 05:28:37'),
(9, 'China', 0, 3, '2019-12-24 05:25:56', '2019-12-24 05:25:56'),
(10, 'Rusia', 0, 3, '2019-12-24 05:26:10', '2019-12-24 05:26:30'),
(11, 'Indonesia', 0, 3, '2019-12-24 05:26:19', '2019-12-24 05:26:38'),
(12, 'Estados Unidos', 1, 3, '2019-12-24 05:26:57', '2019-12-24 05:28:15'),
(13, 'La ganaderí­a y la agricultura.', 1, 4, '2019-12-25 04:00:33', '2019-12-25 04:00:33'),
(14, 'Las fugas en las cañerí­as de gas.', 0, 4, '2020-01-05 00:28:42', '2020-01-05 00:28:42'),
(15, 'Las estufas a gas y las chimeneas.', 0, 4, '2020-01-05 00:29:33', '2020-01-05 00:29:33'),
(16, '190 kilogramos', 0, 5, '2020-01-05 00:58:59', '2020-01-05 00:58:59'),
(17, '4700 kilogramos', 1, 5, '2020-01-05 00:59:48', '2020-01-05 00:59:48'),
(18, '530 kilogramos', 0, 5, '2020-01-05 01:00:06', '2020-01-05 01:02:19'),
(19, '2200 kilogramos', 0, 5, '2020-01-05 01:02:55', '2020-01-05 01:02:55'),
(20, '24°C', 0, 6, '2020-01-05 01:04:02', '2020-01-05 01:04:02'),
(21, '20°C', 0, 6, '2020-01-05 01:04:25', '2020-01-05 01:04:25'),
(22, '6°C', 1, 6, '2020-01-05 01:04:44', '2020-01-05 01:05:10'),
(23, '2°C', 0, 6, '2020-01-05 01:05:40', '2020-01-05 01:05:40'),
(24, 'Continuar durante este siglo y más allá¡.', 1, 7, '2020-01-05 01:09:41', '2020-01-05 01:09:41'),
(25, 'Ir y venir en ciclos.', 0, 7, '2020-01-05 01:09:52', '2020-01-05 01:21:09'),
(26, 'Desaparecer, y va a resultar en el enfriamiento drástico de la Tierra.', 0, 7, '2020-01-05 01:20:53', '2020-01-05 01:21:25'),
(27, 'Desaparecer casi inmediatamente.', 0, 7, '2020-01-05 01:21:43', '2020-01-05 01:22:02'),
(28, 'Infinitas veces', 0, 8, '2020-01-05 01:24:02', '2020-01-05 01:24:02'),
(29, 'Hasta 6 veces', 0, 8, '2020-01-05 01:24:17', '2020-01-05 01:24:17'),
(30, 'Entre 3 o 4 veces', 0, 8, '2020-01-05 01:24:42', '2020-01-05 01:24:42'),
(31, 'Una o dos veces', 1, 8, '2020-01-05 01:25:01', '2020-01-05 01:25:01'),
(32, 'Infinitas veces', 0, 9, '2020-01-05 01:27:27', '2020-01-05 01:27:27'),
(33, '3 o 4 veces', 0, 9, '2020-01-05 01:28:01', '2020-01-05 01:28:01'),
(34, 'Entre 5 a 7 veces', 1, 9, '2020-01-05 01:28:25', '2020-01-05 01:28:25'),
(35, 'Hasta 10 veces', 0, 9, '2020-01-05 01:28:39', '2020-01-05 01:28:39'),
(36, 'Infinitas veces', 1, 10, '2020-01-05 01:29:35', '2020-01-05 01:29:35'),
(37, 'Hasta 10 veces', 0, 10, '2020-01-05 01:33:45', '2020-01-05 01:33:45'),
(38, 'Entre 3 o 4 veces', 0, 10, '2020-01-05 01:37:01', '2020-01-05 01:37:01'),
(39, 'Entre 5 a 7 veces', 0, 10, '2020-01-05 01:37:47', '2020-01-05 01:37:47'),
(40, 'Entre 5 a 7 veces', 0, 11, '2020-01-05 01:38:36', '2020-01-05 01:38:36'),
(41, 'Infinitas veces', 1, 11, '2020-01-05 01:38:49', '2020-01-05 01:38:49'),
(42, 'Entre 10 a 15 veces', 0, 11, '2020-01-05 01:39:07', '2020-01-05 01:39:07'),
(43, 'Cerca de 62.159 kilómetros cuadrados o a 10,3 millones de campos de fútbol americano', 1, 12, '2020-01-05 01:44:55', '2020-01-13 00:01:37'),
(44, '97.5%', 1, 13, '2020-01-05 01:45:45', '2020-01-05 01:45:45'),
(45, '90%', 0, 13, '2020-01-05 01:45:59', '2020-01-05 01:45:59'),
(46, '99%', 0, 13, '2020-01-05 01:46:10', '2020-01-05 01:46:10'),
(47, '95%', 0, 13, '2020-01-05 01:46:20', '2020-01-05 01:46:20'),
(48, 'Lisboa', 1, 15, '2020-01-06 04:30:42', '2020-01-06 04:30:42'),
(49, 'Londres', 0, 15, '2020-01-06 04:33:45', '2020-01-06 04:33:45'),
(50, 'Amsterdam', 0, 15, '2020-01-06 04:34:03', '2020-01-06 04:34:03'),
(51, 'Entre 2 y 8 grados', 1, 17, '2020-01-06 06:50:08', '2020-01-06 06:50:08'),
(52, 'Madrid', 0, 15, '2020-01-09 03:55:04', '2020-01-09 03:55:43'),
(54, 'VERDADERO', 0, 23, NULL, NULL),
(55, 'FALSO', 0, 23, NULL, NULL),
(56, 'Es el proceso de reciclaje de residuos donde el nuevo material reciclado tiene funcionalidad y calidad más baja que el material original.', 1, 20, '2020-01-12 23:47:05', '2020-01-12 23:48:22'),
(57, 'Es el aprovechamiento de productos, materiales de desecho o residuos para fabricar nuevos materiales o productos de mejor calidad.', 0, 20, '2020-01-12 23:48:02', '2020-01-12 23:48:02'),
(58, 'Es un proceso que alarga la vida útil del residuo/producto, permiten crea nuevos artículos y se reduce el consumo de materias primas.', 0, 20, '2020-01-12 23:49:47', '2020-01-12 23:49:47'),
(59, 'El reciclaje es un proceso cuyo objetivo es convertir desechos en nuevos productos o en materia prima para su posterior utilización.', 0, 20, '2020-01-12 23:50:40', '2020-01-12 23:50:40'),
(60, 'Entre 15 a 20 veces', 0, 11, '2020-01-13 00:00:08', '2020-01-13 00:00:08'),
(61, 'Menos de 2°', 0, 18, '2020-01-13 00:02:33', '2020-01-13 00:02:33'),
(62, 'Es la creación y desarrollo de ecosistemas humanos sostenibles, basados en un uso eficiente de los recursos de ecosistemas agrícolas, integrando paisajes, energía y todo tipo de necesidades, materiales y no materiales.', 1, 24, '2020-01-13 00:13:55', '2020-01-13 00:16:47'),
(63, 'Es el conjunto de actividades económicas y técnicas relacionadas con el tratamiento del suelo y el cultivo de la tierra para la producción de alimentos. Comprende todo un conjunto de acciones humanas que transforma el medio ambiente natural.', 0, 24, '2020-01-13 00:13:56', '2020-01-13 00:13:56'),
(64, 'Es un conjunto de actividades que integra al sector agrícola', 0, 24, '2020-01-13 00:13:56', '2020-01-13 00:13:56'),
(65, 'Es lo opuesto a la agricultura', 0, 24, '2020-01-13 00:13:56', '2020-01-13 00:13:56'),
(66, 'La cantidad de metano en el aire se reduciría luego de algunos años', 1, 25, '2020-01-13 00:19:23', '2020-01-13 00:19:39'),
(67, 'Nada, la producción de carne no afecta al medio ambiente.', 0, 25, '2020-01-13 00:19:23', '2020-01-13 00:19:23'),
(68, 'Habría varias consecuencias instantáneas.', 0, 25, '2020-01-13 00:19:23', '2020-01-13 00:19:23'),
(69, 'La gente tendrías mayores problemas de salud si no puede comer carne muchas veces en la semana.', 0, 25, '2020-01-13 00:19:23', '2020-01-13 00:19:23'),
(70, '800 mil toneladas', 0, 26, '2020-01-13 00:21:41', '2020-01-13 00:21:41'),
(71, '5 millones de toneladas', 0, 26, '2020-01-13 00:21:41', '2020-01-13 00:21:41'),
(72, '1 millon de toneladas', 1, 26, '2020-01-13 00:21:41', '2020-01-13 00:22:02'),
(73, '100 mil toneladas', 0, 26, '2020-01-13 00:21:41', '2020-01-13 00:21:41'),
(74, '5 litros agua de mar y nada de agua potable', 0, 27, '2020-01-13 00:24:11', '2020-01-13 00:24:11'),
(75, '8 litros de agua de mar y 50 litros de agua potable', 1, 27, '2020-01-13 00:24:11', '2020-01-13 00:24:52'),
(76, '5 litros de agua de mar y 30 litros de agua potable', 0, 27, '2020-01-13 00:24:11', '2020-01-13 00:24:11'),
(77, '30 litros de agua potable y nada de agua de mar', 0, 27, '2020-01-13 00:24:11', '2020-01-13 00:24:11');

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
-- Estructura de tabla para la tabla `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id1` bigint(20) UNSIGNED NOT NULL,
  `user_id2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `friends`
--

INSERT INTO `friends` (`id`, `user_id1`, `user_id2`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_modes`
--

CREATE TABLE `game_modes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `game_modes`
--

INSERT INTO `game_modes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Normal', NULL, NULL),
(2, 'Debunk', NULL, NULL),
(3, 'Lightning', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_value` int(10) UNSIGNED NOT NULL,
  `max_value` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `name`, `min_value`, `max_value`, `created_at`, `updated_at`) VALUES
(1, 'level 1', 0, 3300, NULL, NULL),
(2, 'level 2', 3301, 6000, NULL, NULL),
(3, 'level 3', 6001, 10000, NULL, NULL),
(4, 'level 4', 10001, 15000, NULL, '0000-00-00 00:00:00'),
(5, 'level 5', 15001, 22000, NULL, '0000-00-00 00:00:00'),
(6, 'level 6', 22001, 30000, NULL, '0000-00-00 00:00:00'),
(7, 'level 7', 30001, 42000, NULL, '0000-00-00 00:00:00'),
(8, 'level 8', 42001, 53000, NULL, '0000-00-00 00:00:00'),
(9, 'level 9', 53001, 65000, NULL, '0000-00-00 00:00:00'),
(10, 'level 10', 65000, 80000, NULL, '0000-00-00 00:00:00');

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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_17_183138_create_game_modes_table', 1),
(38, '2019_12_17_183141_create_questions_table', 1),
(39, '2019_12_17_184834_create_answers_table', 1),
(40, '2020_01_08_032814_create_friends_table', 1),
(41, '2020_01_10_190223_create_levels_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `sources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_mode_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `true_or_false` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `points`, `text`, `verified`, `created_by`, `sources`, `game_mode_id`, `true_or_false`, `created_at`, `updated_at`) VALUES
(1, 15, '¿Qué factor contribuye más a que suba el nivel del mar?', 1, 'admin', '', 1, NULL, '2019-12-23 03:54:48', '2020-01-05 01:34:23'),
(2, 10, '¿Cuáles son las principales causas de las temperaturas crecientes alrededor del mundo?', 1, 'admin', '', 1, NULL, '2019-12-24 05:11:49', '2019-12-24 05:11:49'),
(3, 20, '¿Qué paí­s emitió la mayor cantidad de gases de invernadero desde 1850?', 1, 'admin', '', 1, NULL, '2019-12-24 05:25:42', '2019-12-24 05:25:42'),
(4, 15, '¿Cual es el principal emisor de metano a nivel mundial?', 1, 'admin', '', 1, NULL, '2019-12-25 03:58:18', '2019-12-25 03:58:18'),
(5, 20, '¿Cuánto CO2 (dióxido de carbono) genera un auto promedio en un año?', 1, 'admin', '', 1, NULL, '2020-01-05 00:58:39', '2020-01-05 00:58:39'),
(6, 15, 'Sin ningún tipo de reducción de emisiones, ¿cuánto puede llegar a aumentar la temperatura en 2100?', 1, 'admin', '', 1, NULL, '2020-01-05 01:03:25', '2020-01-05 01:03:25'),
(7, 15, 'Si reducimos los gases de invernadero de forma drástica, los efectos del cambio climático van a:', 1, 'admin', '', 1, NULL, '2020-01-05 01:09:02', '2020-01-05 01:09:02'),
(8, 15, '¿Cuantas veces se puede reciclar el plástico?', 1, 'admin', '', 1, NULL, '2020-01-05 01:22:53', '2020-01-05 01:22:53'),
(9, 10, '¿Cuántas veces se puede reciclar el papel?', 1, 'admin', '', 1, NULL, '2020-01-05 01:25:32', '2020-01-05 01:25:32'),
(10, 15, '¿Cuantas veces se puede reciclar el aluminio?', 1, 'admin', '', 1, NULL, '2020-01-05 01:29:10', '2020-01-05 01:29:10'),
(11, 15, '¿Cuantas veces se pueden reciclar los metales?', 1, 'admin', '', 1, NULL, '2020-01-05 01:38:19', '2020-01-05 01:38:19'),
(12, 20, '¿Cuántos territorios se perdieron en la deforestación del Amazonas en esta última decada?', 0, 'admin', '', 1, NULL, '2020-01-05 01:40:48', '2020-01-12 23:59:36'),
(13, 10, '¿Qué porcentaje del agua de mar no es apta para consumo humano?', 1, 'admin', '', 1, NULL, '2020-01-05 01:45:23', '2020-01-05 01:45:23'),
(14, 15, '¿Cuántos son los residuos generados por las empresas y los hogares en la Unión Europea?', 0, 'admin', '', 1, NULL, '2020-01-05 01:47:57', '2020-01-05 01:47:57'),
(15, 10, '¿Qué capital europea fue declarada \'capital verde\' en al año 2020?', 1, 'admin', '', 1, NULL, '2020-01-06 04:29:49', '2020-01-06 04:29:49'),
(17, 15, '¿Qué porcentaje de nuestros residuos puede ayudar a reducir una compostera?', 0, 'mar', NULL, 1, NULL, '2020-01-06 06:50:08', '2020-01-06 06:50:08'),
(18, 15, '¿Cuántos grados son capaces de disminuir los arboles?', 0, 'mar', NULL, 1, NULL, '2020-01-06 09:56:45', '2020-01-06 09:56:45'),
(19, 10, '¿Cual es el paí­s que más CO2 emitió en el 2019?', 0, 'admin', NULL, 1, NULL, '2020-01-06 10:52:04', '2020-01-13 00:00:30'),
(20, 15, '¿Qué es el downcycling?', 1, 'mar', NULL, 1, NULL, '2020-01-07 02:07:58', '2020-01-12 23:59:21'),
(21, 15, 'Los niños necesitan calcio de leche de vaca para tener huesos y dientes fuertes', 1, 'admin', NULL, 2, 0, '2020-01-09 07:52:47', '2020-01-09 07:52:47'),
(22, 20, 'Un cigarrillo puede contaminar hasta 70 litros de agua', 1, 'admin', NULL, 2, 1, '2020-01-09 08:01:22', '2020-01-12 22:32:05'),
(23, 0, 'DEBUNK', 0, 'admin', NULL, 2, NULL, NULL, NULL),
(24, 15, '¿Qué es la permacultura?', 1, 'mar', NULL, 1, NULL, '2020-01-13 00:13:55', '2020-01-13 00:14:05'),
(25, 15, '¿Qué pasaría en el medio ambiente si se reduciera la producción de carne?', 0, 'mar', NULL, 1, NULL, '2020-01-13 00:19:23', '2020-01-13 00:19:23'),
(26, 15, '¿Qué cantidad de plastica se desperdicia aproximadamente en un día?', 0, 'mar', NULL, 1, NULL, '2020-01-13 00:21:41', '2020-01-13 00:21:41'),
(27, 15, '¿Cuánto pude contaminar una colilla de cigarrillo?', 0, 'mar', NULL, 1, NULL, '2020-01-13 00:24:11', '2020-01-13 00:24:11');

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
  `level` int(11) NOT NULL DEFAULT 1,
  `answered_questions` int(11) NOT NULL DEFAULT 0,
  `activated` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `username`, `profile_picture`, `score`, `level`, `answered_questions`, `activated`, `password`, `birth_date`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mariana', 'Galdo', 'marianagaldomartinez@gmail.com', NULL, 'mar', '../../storage/marianagaldomartinez@gmail.com.jpg', 16600, 5, 50, 1, '$2y$10$EenPhMgJpHZLFEZd6YBr9OBhElhlf.lFcYcjE0/SuG097wg5Guu2u', '2001-06-30', 1, 'gFFOWT9OA9i7mzW2ztBRgbJjgMdysRonxUB41wzlAWkcqxFEmYVfDUbRrEyh', '2020-01-09 03:43:17', '2020-01-13 00:35:58'),
(2, 'Pepe', 'Gomez', 'pepe@pepe.com', NULL, 'pepe', 'storage/pepe@pepe.com.jpg', 2800, 1, 3, 1, '$2y$10$vvSpvwAQlyepP4uP90fQUu5w5oWpa1mp7skXl93qOIELvYWKWVR8O', '1992-10-10', 0, NULL, '2020-01-12 00:41:00', '2020-01-12 01:21:27'),
(3, 'Juan', 'Perez', 'juanperez@juan.com', NULL, 'juan', '../../storage/juanperez@juan.com.jpg', 0, 1, 0, 1, '$2y$10$6MVJxoJoVDvzC29AU.FcdO87n.cVr63sNuDBRw54KfPMzXmCuMPFq', '1987-12-12', 0, NULL, '2020-01-12 22:25:51', '2020-01-12 22:26:33');

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
-- Indices de la tabla `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_user_id1_foreign` (`user_id1`),
  ADD KEY `friends_user_id2_foreign` (`user_id2`);

--
-- Indices de la tabla `game_modes`
--
ALTER TABLE `game_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
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
  ADD KEY `questions_game_mode_id_foreign` (`game_mode_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `game_modes`
--
ALTER TABLE `game_modes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Filtros para la tabla `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_user_id1_foreign` FOREIGN KEY (`user_id1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friends_user_id2_foreign` FOREIGN KEY (`user_id2`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_game_mode_id_foreign` FOREIGN KEY (`game_mode_id`) REFERENCES `game_modes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

