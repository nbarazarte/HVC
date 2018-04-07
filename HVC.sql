-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-04-2018 a las 17:30:55
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

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('atrellus@gmail.com', '6c9d104ad4dcf7c3efa1c2543dbc821fe8688fbc39f0b9d12e101e08b16b0b8a', '2018-04-01 05:02:45'),
('ezebarazarte@gmail.com', '6c206c809174fdd64e4cfe2d84531ef745021d52f27807a517cfc7aae0d7b7ac', '2018-04-04 04:19:51');

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
(30, '9093741126639', '15ns222phkp05te35c5i7c9q6t8jqz97hp10x4pke2z2fyguuc7u0t220cpz707qg0sbtimq9z67pejusl2857bt962882oun521j', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '96000', 0, 1, 30, '', '2018-04-23', '2018-05-23', 0, '2018-04-03 23:54:31', '2018-04-04 03:53:55'),
(31, '9093741148677', '18laf0m880ydj876245mmg5mz8cc8jtxxtc9a889898d1qf58p2483ekgdh51t1110y18741902ma5gh8hzg0n79uysliiti389x1', 1, 2, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-30', '2018-05-01', 0, '2018-04-04 16:43:24', '2018-04-04 04:14:48'),
(32, NULL, '1tn9h4j76j5528snl2bfw5hyk1n5be3mc8nka3mir5lixm1500se1xo66ux55dgaof5j1y5d3j6ft889np5ow15g1h3uf52y4f811', 2, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '14400', 0, 1, 4, '', '2018-04-13', '2018-04-17', 0, '2018-04-04 19:28:05', '2018-04-04 19:28:05'),
(33, NULL, '19zx956sfls3t65xamn9yqp5i8k9z0uz8ou07cujc5nyk6y3197p868n2f2jcd1kcqgoelyo55dtqn2g424hxy73qgt6c5z665rmo', 2, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '14400', 0, 1, 4, '', '2018-04-13', '2018-04-17', 0, '2018-04-04 19:28:56', '2018-04-04 19:28:56'),
(34, '9093741148095', '13ab8phi820p5pusn995k82v6b3u1hw8p5ior33nld0ynn82fdb38n6tn0mnzuo2r51f5w8i8p8u8s77g82f128bxnmg86l81v8a6', 2, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '14400', 0, 1, 4, '', '2018-04-13', '2018-04-17', 0, '2018-04-04 16:29:56', '2018-04-04 19:30:34'),
(35, '9093741149856', '132rq1ia8g2t10drhszt23p55c1b61l528vtul5rk3fzmcc0n5q2y262u0d585z7xakx5bktf15go02hm63v270lqawnt1ehw0ked', 2, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '14400', 0, 1, 4, '', '2018-04-13', '2018-04-17', 0, '2018-04-04 17:16:07', '2018-04-04 19:33:43'),
(36, '9093741147762', '16f1b6x54er6545ozi04lz2l65vv8jbwteh38j246ad8hnxf16l23u1s2248lkhp2433n2e52we4d985lrh6po29dmn3w2kwn4wp5', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '6400', 0, 1, 2, '', '2018-04-10', '2018-04-12', 0, '2018-04-04 16:23:11', '2018-04-04 19:39:08'),
(37, '9093741148395', '18elv8xt6k3jpwm5pqyo7506iue1660y52e5z8w8vo165t915sedjnnoxs6k86z2t62d6558c1n2m45zh06521mn6m5267ttd20fk', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '20', '40', 0, 1, 2, '', '2018-04-17', '2018-04-19', 0, '2018-04-04 16:34:29', '2018-04-04 19:44:19'),
(38, NULL, '1l2h2ik1vk9j1j7211kr0469wm8j8q911y9nb92w6jryn1xvnva1288f21kx1z69o561u8c9y0eu2kr9t2l55ltr4e5k4c6nn14dp', 1, 2, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '32000', 0, 1, 10, '', '2018-04-10', '2018-04-20', 0, '2018-04-04 16:41:53', '2018-04-04 20:05:16'),
(39, NULL, '1tnj60yo796dpd84y2hl3mly7hzsux300tuj03u6cu8oo52zixat497258gh335di1bbg3i245797aok5cfh236xuo313y290ioe7', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '30', '210', 0, 1, 7, '', '2018-04-09', '2018-04-16', 0, '2018-04-04 20:12:10', '2018-04-04 20:12:10'),
(40, '9093741147351', '153yy1gy14o108r80sklt35e6gp4avsc3n83w51ujme8t9pv82ps9o3ltsp5eeen6tvo6h9nqg8ok5dip11hcblis5po72k4d6p78', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '20', '140', 0, 1, 7, '', '2018-04-10', '2018-04-17', 0, '2018-04-04 16:17:14', '2018-04-04 20:13:11'),
(41, NULL, '2h6rxgw5za34v62ouj7p5ll6217ropld1n7ap205a161632mv8yelg0iu55hg5ufqnv2c2t6xi5edzrirf5p9j5amlna01chjqfu4', 2, 2, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '50400', 0, 1, 14, '', '2018-04-05', '2018-04-19', 0, '2018-04-04 21:07:37', '2018-04-04 21:07:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `str_ci_pasaporte` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'cedula o pasaporte',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `str_ci_pasaporte`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neil Barazarte', '16379712', 'ezebarazarte@gmail.com', '$2y$10$38SX6cT7M/cJslPE/TgIIeEJ/OTY9oB0jqahmYxCzZ31DzW.ePD1.', '1U91QhRfPgBa6nTrOTmXgQu17HAwWmPjZxSsBGmXneYCYj9I7KUVNagSCLXG', '2018-04-01 02:58:08', '2018-04-04 21:16:52'),
(2, 'Jaennie Pineda', '13822350', 'jdelvpineda@gmail.com', '$2y$10$iO6xeJD0Gg6CCn086Zf1Sef8OD8WApV.SVlrxB8/1Mf2DpJWrJnhO', 'Ap6FbYybvSW3OjDv2ygx1szldsmaPRfuR6ow16mH2WY5sHIQDCGhtAZJkmXT', '2018-04-02 06:24:09', '2018-04-04 21:06:44'),
(3, 'Tony Stark', '3724260', 'atrellus@gmail.com', '$2y$10$ytghmZXOUnsetoAo6hPHs.5QmDZC.NyQQUphuKlqb7wFlTj7acnGG', 'fmGsDK0tDkRHdsim0ZEptwhnTQyh2uvOiLKqLYUd0fA04rIop32Vs0cdTzVl', '2018-04-02 06:26:07', '2018-04-02 06:46:27'),
(4, 'Peper Pops', '5143077', 'maritzaache@gmail.com', '$2y$10$wk0evHs2W9YyJ3TwLJ6.wePWh38mgdp5H/ECE99Sqd3m7QWbA6wpa', 'WUzl7qWGR34jJngpDcTTKwcg31Oe59sa6n9CToFdyWSydf5IJpt4eZBeOGui', '2018-04-02 06:37:47', '2018-04-02 06:50:50');

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `str_ci_pasaporte` (`str_ci_pasaporte`),
  ADD UNIQUE KEY `str_ci_pasaporte_2` (`str_ci_pasaporte`),
  ADD UNIQUE KEY `str_ci_pasaporte_3` (`str_ci_pasaporte`,`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
