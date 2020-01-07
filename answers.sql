-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2020 a las 17:06:56
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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

