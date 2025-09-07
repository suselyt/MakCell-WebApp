-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2025 a las 03:32:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `makcell3`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarOrden` (IN `p_fecha` DATE, IN `p_servicio` INT, IN `p_dispositivo` VARCHAR(50), IN `p_cliente` VARCHAR(30), IN `p_telefono` VARCHAR(15), IN `p_estatus` INT)   BEGIN
		insert into ordenes(fecha_entrada, fk_servicio, dispositivo, cliente, numero_telefono, fk_estatus)
		values (p_fecha, p_servicio, p_dispositivo, p_cliente, p_telefono, p_estatus);
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarVenta` (IN `p_fecha` DATE, IN `p_cliente` VARCHAR(50), OUT `p_last_insert_id` INT)   BEGIN

    -- Insertar en sales_header
    INSERT INTO sales_header (sale_date, client_name)
    VALUES (p_fecha, p_cliente);

    -- Obtener el ID de la venta recién insertada
    SET p_last_insert_id = LAST_INSERT_ID();

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CalcularIngresoPorPeriodo` (IN `fecha_inicio` DATE, IN `fecha_fin` DATE)   BEGIN
	SELECT SUM(details_ventas.precio * details_ventas.cantidad) AS ingreso_total
    	FROM sales_header
    INNER JOIN details_ventas ON
    sales_header.id_headersale = details_ventas.fk_headerventa
    WHERE sales_header.sale_date BETWEEN fecha_inicio AND fecha_fin;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarOrden` (IN `p_id` INT, IN `p_fecha` DATE, IN `p_servicio` INT, IN `p_dispositivo` VARCHAR(50), IN `p_cliente` VARCHAR(30), IN `p_telefono` VARCHAR(15), IN `p_estatus` INT)   BEGIN
		update ordenes 
		set 
        fecha_entrada = p_fecha,
        fk_servicio = p_servicio,
        dispositivo = p_dispositivo,
        cliente = p_cliente,
        numero_telefono = p_telefono,
        fk_estatus = p_estatus
		where id_orden = p_id;
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetPassword` (IN `p_usuario` VARCHAR(30), OUT `p_contra` VARCHAR(255))   BEGIN
    SELECT password 
    INTO p_contra 
    FROM users 
    WHERE user = p_usuario;  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserId` (IN `p_usuario` VARCHAR(30), OUT `p_id_usuario` INT)   BEGIN
    SELECT id_user
    INTO p_id_usuario 
    FROM users 
    WHERE user = p_usuario;  
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `date`) VALUES
(1, 'prueba1', 'prueba1@gmail.com', 'prueba1', 'prueba1', 'prueba1', '2024-11-08'),
(2, 'prueba2', 'prueba2@gmail.com', 'prueba2', 'prueba2', 'prueba2', '2024-11-11'),
(3, 'prueba3', 'prueba3@gmail.com', 'prueba3', 'prueba3', 'prueba3', '2024-11-12'),
(4, 'susely', 'gmail@gmail.com', '1111111111', 'asunto', 'mensaje', NULL),
(5, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(6, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(7, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(8, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(9, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(10, 'nombre', 'correo@gmail.com', '1111111111', 'asunto', 'mensaje prueba 20', NULL),
(11, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(12, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(13, 'Jorgee', 'jorge@gmail.com', '2222222222', 'asunto 2', 'mensaje', NULL),
(14, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(15, 'nombre', 'corero@gmail.com', '1111111111', '1111', '1123', NULL),
(16, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(17, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(18, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(19, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(20, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(21, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(22, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(23, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(24, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(25, 'name', 'mail@mail.com', '3333333333', 'asunto', 'asunto', NULL),
(26, 'Susely Trejo', 'susely@gmail.com', '1234567890', 'Prueba', 'Esta es una prueba', NULL),
(27, 'Susely Trejo Valenzuela', 'susely.trejo@uttn.mx', '8999683312', 'Prueba con WebDriverIO', 'Esta es una prueba desde WebDriverIO.', NULL),
(28, 'Susely Trejo Valenzuela', 'susely.trejo@uttn.mx', '8999683312', 'Prueba con WebDriverIO', 'Esta es una prueba desde WebDriverIO.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details_ventas`
--

CREATE TABLE `details_ventas` (
  `id_detailventa` int(11) NOT NULL,
  `producto_servicio` varchar(80) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fk_headerventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `details_ventas`
--

INSERT INTO `details_ventas` (`id_detailventa`, `producto_servicio`, `cantidad`, `precio`, `fk_headerventa`) VALUES
(1, 'Funda de iphone', 1, 200.00, 1),
(2, 'Pantalla de xiaomi 3', 1, 600.00, 1),
(4, 'Airpods pro 2nd gen', 1, 3000.00, 3),
(5, 'Pantalla laptop dell 15\'\'', 1, 3400.00, 4),
(6, 'Cambio de pantalla', 1, 500.00, 4),
(7, 'Funda para laptop dell', 1, 250.00, 4),
(8, 'Cable usb C iPhone', 1, 200.00, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `estatus`) VALUES
(1, 'Pendiente'),
(2, 'Listo'),
(3, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fk_servicio` int(11) NOT NULL,
  `dispositivo` varchar(50) NOT NULL,
  `cliente` varchar(30) NOT NULL,
  `numero_telefono` varchar(15) NOT NULL,
  `fk_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `fecha_entrada`, `fk_servicio`, `dispositivo`, `cliente`, `numero_telefono`, `fk_estatus`) VALUES
(1, '2024-10-01', 4, 'iPhone 11', 'Cliente prueba', '1234567890', 2),
(2, '2024-11-03', 5, 'PS5', 'Cliente prueba 2', '1234567890', 1),
(3, '2024-11-01', 3, 'Samsung Flip Z', 'Cliente prueba 3', '1234567890', 3),
(4, '2024-11-11', 2, 'iPhone 12', 'Cliente prueba 3', '1234567890', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `id_password_resets` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`id_password_resets`, `user_id`, `token`, `expires_at`) VALUES
(1, 3, '783029c93ca5670e39b37ffad119c65671acd9a66fac1dc80b09bd4fcbef1ef55ec3212ae76e90240fde2e178c7467f222d6', '2024-11-26 17:42:52'),
(2, 3, '162b0ee1b197c7a62d86fdd5ee1c82f1ac316e5a07aa5e1bea65420a762533500b4a5a639437e9bb263388cb1d7bb344af80', '2024-11-26 21:32:46'),
(3, 4, 'bdc22aa041163cd40df25c445937d1147e9382de39ad76a99b1fc812a8a96f57326ead869bd8ab55f4914070eb65fd88b855', '2024-11-26 21:35:39'),
(4, 4, '7449d34e55b98828c68018d7afa08ee0b0d03e5c8200e38de5931a9552020195adead43fa8dc1028722d6f46f23fa2f1231a', '2024-11-26 21:44:05'),
(5, 3, 'f0153e3542fbe7ec431a1fecb527b319fee23ace5d5a7e0cd34b32ec77c1be48ded728bb81d97d5cb1b529bcbd5b79430b28', '2024-11-26 23:23:06'),
(6, 4, 'dafd74835eaf03d2af6eb1e3c00d4e56fd7a67a394ba822a2611e035b27732de0527448f3b1cf4c168d58e27ab6f7997eadb', '2024-11-26 23:25:01'),
(7, 3, '0bdfb76e7bf3dbca605da8b4e80a926de448b437dba8b0e923bf178a94e4f420fe465197bc4de1c15919018e899d88fa6253', '2024-11-27 04:27:49'),
(8, 3, '75251525fad9b7685a63a572e21b0aed764cb0000c3aa4f1fac496cd9ac374e0bb0b4e72839345d32530e570984c601dbdd1', '2024-11-27 04:29:12'),
(9, 3, '8ddadcdb239e7a2d88a5f7d74893cc03a9ba92e5befa7a2b32a6df000279d2ef46f0e1d38f6a645a2445ae8dfef671d3ff05', '2024-11-27 04:34:43');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `resumenordenes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `resumenordenes` (
`id_orden` int(11)
,`fecha_entrada` date
,`id_servicio` int(11)
,`servicio` varchar(50)
,`dispositivo` varchar(50)
,`id_estatus` int(11)
,`cliente` varchar(30)
,`numero_telefono` varchar(15)
,`estatus` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `salesummary`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `salesummary` (
`id_headersale` int(11)
,`sale_date` date
,`client_name` varchar(50)
,`total_sale` decimal(42,2)
,`product_quantity` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_header`
--

CREATE TABLE `sales_header` (
  `id_headersale` int(11) NOT NULL,
  `sale_date` date NOT NULL,
  `client_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sales_header`
--

INSERT INTO `sales_header` (`id_headersale`, `sale_date`, `client_name`) VALUES
(1, '2024-11-02', 'Jose Morelos'),
(3, '2024-11-20', 'Angela Martinez'),
(4, '2024-11-17', 'Rogelio Marco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre`) VALUES
(1, 'Cambio de pantalla'),
(2, 'Reparacion'),
(3, 'Liberación y formateo'),
(4, 'Desbloqueo'),
(5, 'Chipeo'),
(6, 'Mantenimiento'),
(7, 'Cambio de cámara');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ticket`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ticket` (
`id_headersale` int(11)
,`client_name` varchar(50)
,`sale_date` date
,`producto_servicio` varchar(80)
,`cantidad` int(11)
,`precio` decimal(10,2)
,`total` decimal(20,2)
,`total_venta` decimal(42,2)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`, `email`) VALUES
(3, 'makc311admin2', '$2y$10$.ZDGnLZZh4faLziRnDwYruMWLxvQ9MZ8CCi5wo/KN1uvWlUJb3Hl.', 'suselyt1@gmail.com'),
(4, 'makc311admin3', '$2y$10$/XV1L1AJbwSltaj6weY1juFFdk3oUqcHgqG6nDEMsyUbOWbGth46q', 'pxrsy1@gmail.com');

-- --------------------------------------------------------

--
-- Estructura para la vista `resumenordenes`
--
DROP TABLE IF EXISTS `resumenordenes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `resumenordenes`  AS SELECT `ordenes`.`id_orden` AS `id_orden`, `ordenes`.`fecha_entrada` AS `fecha_entrada`, `servicios`.`id_servicio` AS `id_servicio`, `servicios`.`nombre` AS `servicio`, `ordenes`.`dispositivo` AS `dispositivo`, `estatus`.`id_estatus` AS `id_estatus`, `ordenes`.`cliente` AS `cliente`, `ordenes`.`numero_telefono` AS `numero_telefono`, `estatus`.`estatus` AS `estatus` FROM ((`ordenes` join `servicios` on(`ordenes`.`fk_servicio` = `servicios`.`id_servicio`)) join `estatus` on(`ordenes`.`fk_estatus` = `estatus`.`id_estatus`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `salesummary`
--
DROP TABLE IF EXISTS `salesummary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `salesummary`  AS SELECT `sales_header`.`id_headersale` AS `id_headersale`, `sales_header`.`sale_date` AS `sale_date`, `sales_header`.`client_name` AS `client_name`, sum(`details_ventas`.`precio` * `details_ventas`.`cantidad`) AS `total_sale`, count(`details_ventas`.`fk_headerventa`) AS `product_quantity` FROM (`sales_header` join `details_ventas` on(`sales_header`.`id_headersale` = `details_ventas`.`fk_headerventa`)) GROUP BY `sales_header`.`id_headersale`, `sales_header`.`sale_date`, `sales_header`.`client_name` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ticket`
--
DROP TABLE IF EXISTS `ticket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ticket`  AS SELECT `sales_header`.`id_headersale` AS `id_headersale`, `sales_header`.`client_name` AS `client_name`, `sales_header`.`sale_date` AS `sale_date`, `details_ventas`.`producto_servicio` AS `producto_servicio`, `details_ventas`.`cantidad` AS `cantidad`, `details_ventas`.`precio` AS `precio`, `details_ventas`.`cantidad`* `details_ventas`.`precio` AS `total`, (select sum(`details_ventas`.`cantidad` * `details_ventas`.`precio`) from `details_ventas` where `details_ventas`.`fk_headerventa` = `sales_header`.`id_headersale`) AS `total_venta` FROM (`sales_header` join `details_ventas` on(`sales_header`.`id_headersale` = `details_ventas`.`fk_headerventa`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `details_ventas`
--
ALTER TABLE `details_ventas`
  ADD PRIMARY KEY (`id_detailventa`),
  ADD KEY `fk_headerventa` (`fk_headerventa`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `fk_estatus` (`fk_estatus`),
  ADD KEY `servicios` (`fk_servicio`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id_password_resets`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `sales_header`
--
ALTER TABLE `sales_header`
  ADD PRIMARY KEY (`id_headersale`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `details_ventas`
--
ALTER TABLE `details_ventas`
  MODIFY `id_detailventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id_password_resets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sales_header`
--
ALTER TABLE `sales_header`
  MODIFY `id_headersale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `details_ventas`
--
ALTER TABLE `details_ventas`
  ADD CONSTRAINT `fk_headerventa` FOREIGN KEY (`fk_headerventa`) REFERENCES `sales_header` (`id_headersale`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `fk_estatus` FOREIGN KEY (`fk_estatus`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `servicios` FOREIGN KEY (`fk_servicio`) REFERENCES `servicios` (`id_servicio`);

--
-- Filtros para la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
