-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2021 a las 03:59:02
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campania_publicitaria`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `campanias`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `campanias` (
`nombre` varchar(200)
,`medio` varchar(100)
,`descripcion` varchar(500)
,`fechaInicio` date
,`fechaFinal` date
,`created_at` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `historial_avisos_campanias`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `historial_avisos_campanias` (
`nombre` varchar(200)
,`medio` varchar(100)
,`descripcion` varchar(500)
,`fechaInicio` date
,`fechaFinal` date
,`created_at` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `historial_publicaciones_productos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `historial_publicaciones_productos` (
`nombre_campaña` varchar(200)
,`precio_producto` int(11)
,`llamadas_ilimitadas` varchar(100)
,`gigas` int(11)
,`minutos` int(11)
,`created_at` date
,`descripcion` varchar(500)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL COMMENT 'Identificador único de la tabla person',
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '	\r\nGuarda el nombre de las campanias publicadas',
  `medio` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Permite guardar el medio de publicacion de las campanias',
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Permite guardar la descripcion de la campania',
  `fechaInicio` date NOT NULL COMMENT 'Permite guardar la fecha de inicio de la campania',
  `fechaFinal` date NOT NULL COMMENT 'Permite guardar la fecha de finalizacion de la campania',
  `created_at` date DEFAULT NULL COMMENT '	\r\nPermite guardar la fecha de publicacion del registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id`, `nombre`, `medio`, `descripcion`, `fechaInicio`, `fechaFinal`, `created_at`) VALUES
(23, '30% de descuento este mes', 'facebook', 'solo por este mes aprovecha los mejores descuentos ', '2021-08-23', '2021-10-31', '2021-08-22'),
(40, '500 mensajes ilimitados con otras operadoras y más', 'intagram', 'Mensajes ilimitados por un plan de 10 dolares', '2021-09-01', '2021-09-05', '2021-08-30'),
(44, 'Ecuarefills  ', 'facebook', 'plan', '2021-09-01', '2021-09-24', '2021-09-01'),
(45, '1000 minutos a todas las operadoras', 'facebook', 'EcuaRefills te da 1000 minutos a todas las operadoras', '2021-09-02', '2021-09-16', '2021-09-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL COMMENT 'Identificador unico de la tabala producto',
  `nombre_campaña` varchar(200) NOT NULL COMMENT '	\r\nPermitira guardar el nombre de la campania publicitaria del producto que sera publicado',
  `precio_producto` int(11) NOT NULL COMMENT 'Permite guardar el precio del producto que se va a publicar',
  `llamadas_ilimitadas` varchar(100) NOT NULL COMMENT '	\r\nPermitira guardar el numero de llamadas ilimitadas',
  `gigas` int(11) NOT NULL COMMENT '	\r\nPermitira guardar el numero de gigas que se va a publicar',
  `minutos` int(11) NOT NULL COMMENT 'Permitira guardar los minutos del producto que se va a publicar',
  `created_at` date DEFAULT NULL COMMENT '	\r\nPermitira guardar la fecha en la que se realiza la publicacion',
  `descripcion` varchar(500) NOT NULL COMMENT '	\r\nPermitira guardar la descripcion del producto que sera publicado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_campaña`, `precio_producto`, `llamadas_ilimitadas`, `gigas`, `minutos`, `created_at`, `descripcion`) VALUES
(11, 'Planes de EcuaRefills', 100, 'CLARO', 200, 300, '2021-08-23', 'PLANES  DE ECUAREFILLS '),
(14, 'mensajes gratis con chips de $5', 11, 'CLARO', 11, 2222, '2021-08-30', 'Ecuarefils te da 200 mensajes'),
(17, 'megas de 300 para todas las operadoras', 200, 'Claro', 200, 300, '2021-09-02', 'EcuaRefills  te da megas de 300 para todas las operadoras');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `producto1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `producto1` (
`nombre_campaña` varchar(200)
,`precio_producto` int(11)
,`created_at` date
,`descripcion` varchar(500)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '	\r\nIdentificador unico de la tabla users',
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '	\r\nPermite guardar el correo del usuario',
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Permite guardar la contraseña del usuario',
  `confirm_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'permite guardar la contraseña '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `confirm_password`) VALUES
(99, 'odyrea106@gmail.com', '$2y$10$Q.H8romp2Y93L4nr/wWIsOtxalqnVy2MKR20vYYxqmARlzl3ZUYQW', '$2y$10$Q.H8romp2Y93L4nr/wWIsOtxalqnVy2MKR20vYYxqmARlzl3ZUYQW'),
(101, 'odyrea96@gmail.com', '$2y$10$ruYY9F2/Q1Rm2//FsmCpROB5x2bO/4ZYu7/i9vNDrUoDBq3eV.B.O', '$2y$10$ruYY9F2/Q1Rm2//FsmCpROB5x2bO/4ZYu7/i9vNDrUoDBq3eV.B.O'),
(104, 'odyrea196@gmail.com', '$2y$10$s1pDy2pJNgICiFl/auifqeKwYQVFFld8kNpeRkKA.h5i5HwLTyGBm', '$2y$10$s1pDy2pJNgICiFl/auifqeKwYQVFFld8kNpeRkKA.h5i5HwLTyGBm'),
(106, 'odyrea296@gmail.com', '$2y$10$09/88mSs3iZI07PtH301N.n7S9SI2zZIfZ8vwCHfMw//hVp6jSmby', '$2y$10$09/88mSs3iZI07PtH301N.n7S9SI2zZIfZ8vwCHfMw//hVp6jSmby'),
(107, 'odyrea396@gmail.com', '$2y$10$JKvcYTR/RgkHNyGpDoxsQOw43EhN8FPj/dxXnZFJJ63B5PYGIpavm', '$2y$10$JKvcYTR/RgkHNyGpDoxsQOw43EhN8FPj/dxXnZFJJ63B5PYGIpavm'),
(109, 'pablorobayo@gmail.com', '$2y$10$LqINun2GfUSo6pzqlGiHhOIuIH69fzxUE9caXnTG63Kv7RjXSQ3yi', '$2y$10$LqINun2GfUSo6pzqlGiHhOIuIH69fzxUE9caXnTG63Kv7RjXSQ3yi');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `users1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `users1` (
`email` varchar(150)
,`password` varchar(200)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `campanias`
--
DROP TABLE IF EXISTS `campanias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `campanias`  AS SELECT `person`.`nombre` AS `nombre`, `person`.`medio` AS `medio`, `person`.`descripcion` AS `descripcion`, `person`.`fechaInicio` AS `fechaInicio`, `person`.`fechaFinal` AS `fechaFinal`, `person`.`created_at` AS `created_at` FROM `person` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `historial_avisos_campanias`
--
DROP TABLE IF EXISTS `historial_avisos_campanias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `historial_avisos_campanias`  AS SELECT `person`.`nombre` AS `nombre`, `person`.`medio` AS `medio`, `person`.`descripcion` AS `descripcion`, `person`.`fechaInicio` AS `fechaInicio`, `person`.`fechaFinal` AS `fechaFinal`, `person`.`created_at` AS `created_at` FROM `person` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `historial_publicaciones_productos`
--
DROP TABLE IF EXISTS `historial_publicaciones_productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `historial_publicaciones_productos`  AS SELECT `producto`.`nombre_campaña` AS `nombre_campaña`, `producto`.`precio_producto` AS `precio_producto`, `producto`.`llamadas_ilimitadas` AS `llamadas_ilimitadas`, `producto`.`gigas` AS `gigas`, `producto`.`minutos` AS `minutos`, `producto`.`created_at` AS `created_at`, `producto`.`descripcion` AS `descripcion` FROM `producto` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `producto1`
--
DROP TABLE IF EXISTS `producto1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `producto1`  AS SELECT `producto`.`nombre_campaña` AS `nombre_campaña`, `producto`.`precio_producto` AS `precio_producto`, `producto`.`created_at` AS `created_at`, `producto`.`descripcion` AS `descripcion` FROM `producto` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `users1`
--
DROP TABLE IF EXISTS `users1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users1`  AS SELECT `users`.`email` AS `email`, `users`.`password` AS `password` FROM `users` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_campaña` (`nombre_campaña`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único de la tabla person', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico de la tabala producto', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	\r\nIdentificador unico de la tabla users', AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
