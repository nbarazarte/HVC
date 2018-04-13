-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-04-2018 a las 14:17:33
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
  `str_rooms` varchar(50) NOT NULL,
  `str_precio` decimal(50,0) NOT NULL,
  `str_dolares` decimal(50,0) NOT NULL,
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_habitaciones`
--

INSERT INTO `cat_habitaciones` (`id`, `str_habitacion`, `str_rooms`, `str_precio`, `str_dolares`, `bol_eliminado`) VALUES
(1, 'Matrimonial', 'Matrimonial', '3200', '20', 0),
(2, 'Matrimonial + Sofá', 'Matrimonial + Sofa', '3600', '25', 0),
(3, 'Doble', 'Double', '4000', '27', 0),
(4, 'Duplex 2 Ambientes', 'Duplex 2 Main Rooms', '5300', '30', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_numHabitaciones`
--

CREATE TABLE `cat_numHabitaciones` (
  `id` int(11) NOT NULL,
  `lng_idtipoHab` int(11) NOT NULL,
  `str_num` varchar(11) NOT NULL,
  `bol_eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_numHabitaciones`
--

INSERT INTO `cat_numHabitaciones` (`id`, `lng_idtipoHab`, `str_num`, `bol_eliminado`) VALUES
(1, 1, '100', 0),
(2, 1, '101', 1),
(3, 1, '102', 1),
(4, 1, '103', 1),
(5, 1, '104', 1),
(6, 1, '105', 1),
(7, 2, '200', 0),
(8, 2, '201', 1),
(9, 2, '202', 1),
(10, 2, '203', 1),
(11, 2, '204', 1),
(12, 2, '205', 1),
(13, 3, '300', 0),
(14, 3, '301', 1),
(15, 3, '302', 1),
(16, 3, '303', 1),
(17, 3, '304', 1),
(18, 3, '305', 1),
(19, 4, '400', 0),
(20, 4, '401', 1),
(21, 4, '402', 1),
(22, 4, '403', 1),
(23, 4, '404', 1),
(24, 4, '405', 1);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Estructura Stand-in para la vista `reservaciones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `reservaciones` (
`minfe` date
,`maxfs` date
,`lng_idtipohab` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Volcado de datos para la tabla `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `str_email`, `created_at`, `updated_at`, `bol_eliminado`) VALUES
(29, 'atrellus@gmail.com', '2018-03-27 09:28:11', '2018-03-27 09:28:11', 0),
(30, 'ezebarazarte@gmail.com', '2018-04-02 07:00:10', '2018-04-02 07:00:10', 0),
(31, 'maritzaache@gmail.com', '2018-04-02 07:00:31', '2018-04-02 07:00:31', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservaciones`
--

CREATE TABLE `tbl_reservaciones` (
  `id` int(11) NOT NULL,
  `str_estatus_pago` varchar(20) DEFAULT NULL,
  `str_codigo` varchar(255) NOT NULL,
  `lng_idtipohab` int(11) NOT NULL,
  `lng_idpersona` int(11) NOT NULL,
  `str_email` varchar(255) NOT NULL,
  `str_nombre` varchar(255) NOT NULL,
  `str_telefono` varchar(255) NOT NULL,
  `dbl_precio` decimal(65,0) NOT NULL,
  `dbl_total_pagar` decimal(10,0) DEFAULT NULL,
  `int_ninos` int(11) NOT NULL,
  `int_adultos` int(11) NOT NULL,
  `int_dias` int(11) NOT NULL,
  `str_mensaje` text,
  `dmt_fecha_entrada` date NOT NULL,
  `dmt_fecha_salida` date NOT NULL,
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_reservaciones`
--

INSERT INTO `tbl_reservaciones` (`id`, `str_estatus_pago`, `str_codigo`, `lng_idtipohab`, `lng_idpersona`, `str_email`, `str_nombre`, `str_telefono`, `dbl_precio`, `dbl_total_pagar`, `int_ninos`, `int_adultos`, `int_dias`, `str_mensaje`, `dmt_fecha_entrada`, `dmt_fecha_salida`, `bol_eliminado`, `created_at`, `updated_at`) VALUES
(35, NULL, '132rq1ia8g2t10drhszt23p55c1b61l528vtul5rk3fzmcc0n5q2y262u0d585z7xakx5bktf15go02hm63v270lqawnt1ehw0ked', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '14400', 0, 1, 4, '', '2018-04-17', '2018-04-20', 0, '2018-04-07 00:53:34', '2018-04-04 19:33:43'),
(38, NULL, '1l2h2ik1vk9j1j7211kr0469wm8j8q911y9nb92w6jryn1xvnva1288f21kx1z69o561u8c9y0eu2kr9t2l55ltr4e5k4c6nn14dp', 4, 2, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '32000', 0, 1, 1, '', '2018-04-15', '2018-04-16', 0, '2018-04-12 04:15:36', '2018-04-04 20:05:16'),
(39, NULL, '1tnj60yo796dpd84y2hl3mly7hzsux300tuj03u6cu8oo52zixat497258gh335di1bbg3i245797aok5cfh236xuo313y290ioe7', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '30', '210', 0, 1, 7, '', '2018-04-10', '2018-04-15', 0, '2018-04-06 13:21:35', '2018-04-04 20:12:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `str_ci_pasaporte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `str_ci_pasaporte`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'Neil Barazarte', 'ezebarazarte@gmail.com', '$2y$10$kgLKDB1RmgTrUNq8WJJrbOs9NnTfwYVjd5dipKDmzKl70wuzIOMHW', '16379712', 'P6S7oo3l94Q4835RgcC1oPRkJxBUepkUpUz62GJzDbrhOQ2IytmxAaXuVP92', '2018-04-12 08:12:57', '2018-04-12 19:31:32', NULL, NULL, NULL, NULL),
(2, 'Jaennie Pineda', 'jdelvpineda@gmail.com', '$2y$10$ppMcS6Wg2Kj7NWOchD.PcOMVMRPOnKdPTCyz448Dc4Ro8MIlwnCxK', '13822350', 'qR9f4pY02IGa2Lp02VUAiyeYHkJmXV2bbZLN4YvzrWLcINQqWCTYdcvSJUpu', '2018-04-12 19:32:00', '2018-04-12 20:04:03', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura para la vista `reservaciones`
--
DROP TABLE IF EXISTS `reservaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`hippo_admin`@`localhost` SQL SECURITY DEFINER VIEW `reservaciones`  AS  select min(`tbl_reservaciones`.`dmt_fecha_entrada`) AS `minfe`,max(`tbl_reservaciones`.`dmt_fecha_salida`) AS `maxfs`,`tbl_reservaciones`.`lng_idtipohab` AS `lng_idtipohab` from `tbl_reservaciones` group by `tbl_reservaciones`.`lng_idtipohab` ;

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
-- Indices de la tabla `cat_numHabitaciones`
--
ALTER TABLE `cat_numHabitaciones`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `str_email` (`str_email`);

--
-- Indices de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `str_estatus_pago` (`str_estatus_pago`);

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
-- AUTO_INCREMENT de la tabla `cat_numHabitaciones`
--
ALTER TABLE `cat_numHabitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `cat_semanas`
--
ALTER TABLE `cat_semanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
