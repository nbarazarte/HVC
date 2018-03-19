-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-03-2018 a las 01:59:11
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `HVC`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_habitaciones`
--

CREATE TABLE `cat_habitaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `str_habitacion` varchar(50) NOT NULL,
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_habitaciones`
--

INSERT INTO `cat_habitaciones` (`id`, `str_habitacion`, `bol_eliminado`) VALUES
(1, 'Matrimonial', 0),
(2, 'Matrimonial + Sofá', 0),
(3, 'Familiar', 0),
(4, 'Duplex 2 Ambientes', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_semanas`
--

CREATE TABLE `cat_semanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `str_semana_inicio` varchar(10) NOT NULL COMMENT 'inicio de semana',
  `str_semana_fin` varchar(10) NOT NULL COMMENT 'fin de la semana',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'eliminado logico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_semanas`
--

INSERT INTO `cat_semanas` (`id`, `str_semana_inicio`, `str_semana_fin`, `bol_eliminado`) VALUES
(1, '06/01/2018', '13/01/2018', 0),
(2, '13/01/2018', '20/01/2018', 0),
(3, '20/01/2018', '27/01/2018', 0),
(4, '27/01/2018', '03/02/2018', 0),
(5, '03/02/2018', '10/02/2018', 0),
(6, '10/02/2018', '17/02/2018', 0),
(7, '17/02/2018', '24/02/2018', 0),
(8, '24/02/2018', '03/03/2018', 0),
(9, '03/03/2018', '10/03/2018', 0),
(10, '10/03/2018', '17/03/2018', 0),
(11, '17/03/2018', '24/03/2018', 0),
(12, '24/03/2018', '31/03/2018', 0),
(13, '31/03/2018', '07/04/2018', 0),
(14, '07/04/2018', '14/04/2018', 0),
(15, '14/04/2018', '21/04/2018', 0),
(16, '21/04/2018', '28/04/2018', 0),
(17, '28/04/2018', '05/05/2018', 0),
(18, '05/05/2018', '12/05/2018', 0),
(19, '12/05/2018', '19/05/2018', 0),
(20, '19/05/2018', '26/05/2018', 0),
(21, '26/05/2018', '02/06/2018', 0),
(22, '02/06/2018', '09/06/2018', 0),
(23, '09/06/2018', '16/06/2018', 0),
(24, '16/06/2018', '23/06/2018', 0),
(25, '23/06/2018', '30/06/2018', 0),
(26, '30/06/2018', '07/07/2018', 0),
(27, '07/07/2018', '14/07/2018', 0),
(28, '14/07/2018', '21/07/2018', 0),
(29, '21/07/2018', '28/07/2018', 0),
(30, '28/07/2018', '04/08/2018', 0),
(31, '04/08/2018', '11/08/2018', 0),
(32, '11/08/2018', '18/08/2018', 0),
(33, '18/08/2018', '25/08/2018', 0),
(34, '25/08/2018', '01/09/2018', 0),
(35, '01/09/2018', '08/09/2018', 0),
(36, '08/09/2018', '15/09/2018', 0),
(37, '15/09/2018', '22/09/2018', 0),
(38, '22/09/2018', '29/09/2018', 0),
(39, '29/09/2018', '06/10/2018', 0),
(40, '06/10/2018', '13/10/2018', 0),
(41, '13/10/2018', '20/10/2018', 0),
(42, '20/10/2018', '27/10/2018', 0),
(43, '27/10/2018', '03/11/2018', 0),
(44, '03/11/2018', '10/11/2018', 0),
(45, '10/11/2018', '17/11/2018', 0),
(46, '17/11/2018', '24/11/2018', 0),
(47, '24/11/2018', '01/12/2018', 0),
(48, '01/12/2018', '08/12/2018', 0),
(49, '08/12/2018', '15/12/2018', 0),
(50, '15/12/2018', '22/12/2018', 0),
(51, '22/12/2018', '29/12/2018', 0),
(52, '29/12/2018', '05/01/2019', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `str_email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neil', 'ezebarazarte@gmail.com', '$2y$10$Z.efkkaHE.8/wi9QLJzd7.TyibrZu1t1Kt1InKXKyzEg5oQjnrx9a', 'Dk1XBmvV2uma1QVaQwo7KRZmqz75vPZpngYV0MvQCAL58EZu732rJ8Wk59Ze', '2018-03-01 22:55:03', '2018-03-01 23:08:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_habitaciones`
--
ALTER TABLE `cat_habitaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `cat_semanas`
--
ALTER TABLE `cat_semanas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `str_email` (`str_email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_habitaciones`
--
ALTER TABLE `cat_habitaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cat_semanas`
--
ALTER TABLE `cat_semanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
