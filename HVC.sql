-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-04-2018 a las 02:08:37
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
(38, NULL, '1l2h2ik1vk9j1j7211kr0469wm8j8q911y9nb92w6jryn1xvnva1288f21kx1z69o561u8c9y0eu2kr9t2l55ltr4e5k4c6nn14dp', 4, 2, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '32000', 0, 1, 10, '', '2018-04-15', '2018-04-16', 0, '2018-04-06 14:05:31', '2018-04-04 20:05:16'),
(39, NULL, '1tnj60yo796dpd84y2hl3mly7hzsux300tuj03u6cu8oo52zixat497258gh335di1bbg3i245797aok5cfh236xuo313y290ioe7', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '30', '210', 0, 1, 7, '', '2018-04-10', '2018-04-15', 0, '2018-04-06 13:21:35', '2018-04-04 20:12:10'),
(45, NULL, '11j5i1gg0gtur3dcx973x6dqr0zhdrn5v40v564jep319g2ev1s4rdney12i514ia9zt3j2s4t41hc17klx13cohj93d31s01j831', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '5300', '5300', 0, 1, 1, '', '2018-04-16', '2018-04-17', 0, '2018-04-10 01:31:01', '2018-04-10 01:31:01'),
(46, NULL, '1hy0c5391d7ofsg1if8rt06m13wi2abhdihm8v9f1z50u5wtjcmv0zwvlueq6kv61hli973w5l00684rdykw912c5v48y3id3737a', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '22400', 0, 1, 7, '', '2018-04-12', '2018-04-19', 0, '2018-04-10 01:54:31', '2018-04-10 01:54:31'),
(47, NULL, '1zr5298b8jgh0ebgi61g1kue6h65y3cr2f9n293jg33p34xu8xfmn1j4913y13ynl1kndd3bdjw3936wz2yz79d6o5qph4zc7qa63', 2, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3600', '25200', 0, 1, 7, '', '2018-04-12', '2018-04-19', 0, '2018-04-10 01:55:36', '2018-04-10 01:55:36'),
(48, NULL, '1ibw2cxdmkj001z1nr55659ht2z35oyb1q183g1nq3ek5o5xmxqa0i5cp56evtgw7nxufk3ajd3hra2eds5v3pe1p88331ainh2bl', 3, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '4000', '28000', 0, 1, 7, '', '2018-04-12', '2018-04-19', 0, '2018-04-10 01:57:08', '2018-04-10 01:57:08'),
(49, NULL, '113osrj7u1lua332plu3gz2lf35u5ucm7wy8u215jih5w53km585frhr4p65l6i5mcdc0n9bp1y6u91bdb1qjd7imn887n1y5n7nt', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-19', '2018-04-20', 0, '2018-04-10 06:04:28', '2018-04-10 06:04:28'),
(50, NULL, '11l12byc0596o3qshl6mq1iuc4g6v06ff679163nvb3vl1o228y31ck61az3o1huec63d6ug8301s057cbrl3686r6ae62pmp8thm', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '9600', 0, 1, 3, '', '2018-04-24', '2018-04-27', 0, '2018-04-10 06:07:16', '2018-04-10 06:07:16'),
(51, NULL, '1ry290ie62h5i3wh6380512ece4it563wfznfjzl7da20o1006u6ju74f7ddkpoj7p4j0f6u7iw9oeuxdt7hg506672k1j2n0im5e', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '9600', 0, 1, 3, '', '2018-04-21', '2018-04-24', 0, '2018-04-10 06:34:06', '2018-04-10 06:34:06'),
(52, NULL, '1328y232g7rlsa7fqo3e2df3fgnxvu75320c8ap531p2b78o6we5xf78r74a72k9u2uuf0w5ugur83xc133v7hz43p337cti375mq', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '121600', 0, 1, 7, '', '2018-05-01', '2018-05-08', 0, '2018-04-10 04:56:19', '2018-04-10 06:37:38'),
(53, NULL, '18ppvg73cyl6ma82s43cmw39y4d7323wahxk92v1v572lggi6hinajb2303kcrns15o2sutp7mfvdjy2c9sfn1z759hssp5s27m04', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '6400', 0, 1, 2, '', '2018-04-29', '2018-05-01', 0, '2018-04-10 06:39:52', '2018-04-10 06:39:52'),
(54, NULL, '1s33b382kzvx1nkh00l7600ll36918m5s56qgq6w1gtor2fp7m0ys7umj6pjyki2753730aoou3b30x72v63x791gkqibo63p3990', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-20', '2018-04-21', 0, '2018-04-10 07:31:16', '2018-04-10 07:31:16'),
(55, NULL, '1xb2xvkyt5351zck6buh6474gpw036b3n8k2rwadge3n3w375od01s3d5lbeto175v811102em27n5z084ts3zx33bjstd18359yp', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-27', '2018-04-28', 0, '2018-04-10 08:06:48', '2018-04-10 08:06:48'),
(56, NULL, '1433o3isz3219rsha1rp51jhfu383pvq360j333r1zo0eyal82s317ovv00327i1k3bh8m5xiveeanxfo2i3k3xp366ilbe6i6a1k', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '9600', 0, 1, 3, '', '2018-05-12', '2018-05-15', 0, '2018-04-10 08:10:38', '2018-04-10 08:10:38'),
(57, NULL, '1xp6x3j1rad7484yqrliyggm3ox930p091itfq3jau29y85yv1xb8h3g5ki55pxj21495i9ovuy3t5c91hw4gdw3w7i52a859mdud', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '6400', 0, 1, 2, '', '2018-05-09', '2018-05-11', 0, '2018-04-10 08:13:09', '2018-04-10 08:13:09'),
(58, NULL, '1xpa263s6a8urc936q17kwvp1768z3323m63x4k1svfz3whn3dro3h2u4lu5sglf9k583edwwx3d33rtdt43683ho3jvih7915okf', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-05-08', '2018-05-09', 0, '2018-04-10 08:14:58', '2018-04-10 08:14:58'),
(59, NULL, '13nmx3r5t3tivfi10436bbl53pd81k33k1e3v3i12gm4bcrd345gr2q35gvjighy7f9jg2v302x53ws1203js3qtum09d51x4vf2s', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-05-11', '2018-05-12', 0, '2018-04-10 08:16:12', '2018-04-10 08:16:12'),
(60, NULL, '1qvs019f7ng52fmhtzktq6mhu7w21mf6pxx3w0jl499beddqv52833wye6jk46k28ex8930i3b5zb5w3ekhq72x2qgr35m7c4o397', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-10', '2018-04-11', 0, '2018-04-10 08:19:27', '2018-04-10 08:19:27'),
(61, NULL, '16a28nv393xy03hzs6ky5ds4u3c8377zflxn54lj42n20dtnd3c23uy93xd1lgmyq7maw9rnm5xhj3h31b1io1i0i5jbh6f32n226', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '12800', 0, 1, 4, '', '2018-05-15', '2018-05-19', 0, '2018-04-10 08:28:59', '2018-04-10 08:28:59'),
(62, NULL, '1yv375mnne53bxg65vo2rk9ou5mf654xmbuz32l36jba28o19bcjc5ewz1hb2ws1fmwmkea2421y3p8lwtybc8l3j753xit8wu658', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-11', '2018-04-11', 0, '2018-04-10 08:57:38', '2018-04-10 08:57:38'),
(63, NULL, '18jy95h1giu1m3f13e2vy1g35bp264t13q5nw4ju34w8ew140tuam6xl24pism7046l3634i4buwf3p75l5riev74f6632zv6vnce', 1, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '3200', '3200', 0, 1, 1, '', '2018-04-11', '2018-04-12', 0, '2018-04-10 09:00:14', '2018-04-10 09:00:14'),
(64, NULL, '1pi4lbbnc63b062g3g8o3f3fta5am4vj3157dluoit5y856y3wh28xkzi3b524u8fqu6zntw4pxhm7cxbsa7ezfo2mbxg6rwotekc', 4, 1, 'ezebarazarte@gmail.com', 'Neil Barazarte', '4142101096', '30', '30', 0, 1, 1, '', '2018-04-21', '2018-04-22', 0, '2018-04-10 09:07:14', '2018-04-10 09:07:14');

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
(1, 'Neil Barazarte', '16379712', 'ezebarazarte@gmail.com', '$2y$10$38SX6cT7M/cJslPE/TgIIeEJ/OTY9oB0jqahmYxCzZ31DzW.ePD1.', '5wTt7R9tBFWm97k18UR2Pb06WrouKFnRFDCQzNG5W40g6kLiBqD0q15PKs1N', '2018-04-01 02:58:08', '2018-04-10 09:08:00'),
(2, 'Jaennie Pineda', '13822350', 'jdelvpineda@gmail.com', '$2y$10$iO6xeJD0Gg6CCn086Zf1Sef8OD8WApV.SVlrxB8/1Mf2DpJWrJnhO', 'ynHKiAEOCI04Eel1sp8F9RrVORwoW2ju6fxoTZ8RJrdJ0kbIB4Yz9A0N3KY8', '2018-04-02 06:24:09', '2018-04-05 01:10:14'),
(3, 'Tony Stark', '3724260', 'atrellus@gmail.com', '$2y$10$ytghmZXOUnsetoAo6hPHs.5QmDZC.NyQQUphuKlqb7wFlTj7acnGG', 'fmGsDK0tDkRHdsim0ZEptwhnTQyh2uvOiLKqLYUd0fA04rIop32Vs0cdTzVl', '2018-04-02 06:26:07', '2018-04-02 06:46:27'),
(4, 'Peper Pops', '5143077', 'maritzaache@gmail.com', '$2y$10$wk0evHs2W9YyJ3TwLJ6.wePWh38mgdp5H/ECE99Sqd3m7QWbA6wpa', 'WUzl7qWGR34jJngpDcTTKwcg31Oe59sa6n9CToFdyWSydf5IJpt4eZBeOGui', '2018-04-02 06:37:47', '2018-04-02 06:50:50');

-- --------------------------------------------------------

--
-- Estructura para la vista `reservaciones`
--
DROP TABLE IF EXISTS `reservaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservaciones`  AS  select min(`tbl_reservaciones`.`dmt_fecha_entrada`) AS `minfe`,max(`tbl_reservaciones`.`dmt_fecha_salida`) AS `maxfs`,`tbl_reservaciones`.`lng_idtipohab` AS `lng_idtipohab` from `tbl_reservaciones` group by `tbl_reservaciones`.`lng_idtipohab` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
