-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2025 a las 16:44:46
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `queenfactory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_citas` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_trabajadores` int(11) DEFAULT NULL,
  `id_servicios` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora_Inicio` time DEFAULT NULL,
  `servicio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_citas`, `id_cliente`, `id_trabajadores`, `id_servicios`, `Fecha`, `Hora_Inicio`, `servicio`) VALUES
(1, 6, NULL, 1, '2024-11-19', '13:00:00', ''),
(2, 3, NULL, 1, '2024-11-04', '10:27:00', ''),
(3, 6, NULL, 1, '2024-11-29', '02:35:00', ''),
(4, 6, NULL, NULL, '2024-11-14', '10:38:00', ''),
(5, 6, NULL, NULL, '2024-11-29', '11:10:00', ''),
(6, 6, NULL, 1, '2024-10-30', '02:10:00', ''),
(7, 8, NULL, NULL, '2024-11-22', '11:24:00', ''),
(8, 9, NULL, NULL, '2024-11-15', '11:29:00', ''),
(9, 10, NULL, NULL, '2024-12-26', '01:33:00', ''),
(10, 11, NULL, NULL, '2024-11-22', '16:03:00', ''),
(11, 11, NULL, NULL, '2024-11-22', '16:03:00', ''),
(12, 6, NULL, 1, '2024-11-05', '12:09:00', ''),
(13, 6, NULL, 1, '2024-11-05', '12:09:00', ''),
(14, 6, NULL, 1, '2024-11-05', '12:09:00', ''),
(15, 12, NULL, NULL, '2024-11-22', '04:20:00', ''),
(16, 13, NULL, 1, '2024-12-25', '08:21:00', ''),
(17, 14, NULL, NULL, '2024-12-27', '10:30:00', ''),
(18, NULL, NULL, 1, '2025-03-20', '11:48:00', ''),
(19, NULL, NULL, NULL, '2025-01-14', '13:00:00', 'Extensiones de Pestañas'),
(20, NULL, NULL, NULL, '2025-01-22', '13:00:00', 'Manicure'),
(21, NULL, NULL, NULL, '2025-02-07', '00:05:00', 'Extensiones de Pestañas'),
(22, NULL, NULL, NULL, '2025-06-19', '00:18:00', 'Extensiones de Pestañas'),
(23, NULL, NULL, NULL, '2025-02-05', '00:18:00', 'Extensiones de Pestañas'),
(24, NULL, NULL, NULL, '2025-02-21', '00:18:00', 'Extensiones de Pestañas'),
(25, NULL, NULL, NULL, '2025-01-14', '13:00:00', 'Tratamiento para el Cabello'),
(26, NULL, NULL, NULL, '2025-06-19', '13:00:00', 'Tratamiento para el Cabello'),
(27, NULL, NULL, NULL, '2025-01-22', '01:00:00', 'Tratamiento para el Cabello'),
(28, NULL, NULL, NULL, '2025-01-22', '13:00:00', 'Tratamiento para el Cabello'),
(29, NULL, NULL, NULL, '2025-10-18', '13:00:00', 'Tratamiento para el Cabello'),
(30, NULL, NULL, NULL, '2025-06-19', '00:10:00', 'Extensiones de Pestañas'),
(31, NULL, NULL, NULL, '2025-03-13', '00:10:00', 'Extensiones de Pestañas'),
(32, NULL, NULL, NULL, '2025-04-15', '09:24:00', 'Extensiones de Pestañas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido_Paterno` varchar(100) DEFAULT NULL,
  `Apellido_Materno` varchar(100) DEFAULT NULL,
  `Numero` varchar(15) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Numero`, `Correo`, `Pass`) VALUES
(1, 'aixa', 'cabrera', 'gutierrez', '7254530876', 'aixa@gmail.com', '$2y$10$Iv2'),
(2, 'sandra', 'alvarado', 'velazquez', '253425624', 'sandi@gmail.com', '$2y$10$tKT'),
(3, 'axel', 'mendoza', 'mejia', '72342524356', 'axel@gmail.com', '$2y$10$BNV'),
(4, 'ivonne', 'hutierrez', 'martinez', '72345654', 'ivonne@gmail.com', '$2y$10$ocT'),
(5, 'pamela', 'ridriguez', 'lopez', '743235521', 'pamela@gmail.com', '$2y$10$LRZ'),
(6, 'jacob', 'gonzale', 'reza', '7425432345', 'jacob@gmail.com', '$2y$10$7ms'),
(7, 'Aixa Thaily ', 'cabrera', 'velazquez', '7254530876', 'aixa@gmail.com', '$2y$10$B88'),
(8, 'natalia', 'avila', 'maldonado', '725435423', 'nat@gmail.com', '$2y$10$nru'),
(9, 'daphne', 'cabrera', 'gutierrez', '7549874576', 'daph@gmail.com', '$2y$10$oQM'),
(10, 'nora', 'santamaria', 'garcia', '743238765', 'nora@gmail.com', '$2y$10$7K6'),
(11, 'valeria', 'sotomayor', 'mayo', '7345982356', 'val@gmail.com', '$2y$10$HwS'),
(12, 'daniela', 'cuate ', 'garcia', '7613240962', 'dani@gmail.com', '$2y$10$U8e'),
(13, 'ana', 'lugo', 'garrido', '754323568', 'ani@gmail.com', '$2y$10$om4'),
(14, 'jesus', 'mares', 'montes', '7226017122', 'jesus@gmail.com', '$2y$10$8QM'),
(15, 'sandra', 'alvarado', 'gutierrez', '72342524356', 'sandi@gmail.com', '$2y$10$M1e'),
(16, 'Miriam Abigail', 'Cabrera ', 'Gutierrez', '7291032334', 'cabreragutierrezmiriamabigail@gmail.com', '$2y$10$AgC'),
(17, 'Dania Karina ', 'Gutierrez', 'Meza', '7653409754', 'Dania@gmail.com', '$2y$10$IVP'),
(18, 'ivonne ', 'gutierrez', 'martinez', '7407523876', 'ivon@gmail.com', '$2y$10$Jv.'),
(19, 'mamo', 'carbajal', 'quezada', '7230917833', 'mamo@gmail.com', '$2y$10$.Jj'),
(20, 'camila', 'rodriguez', 'lopez', '7209765432', 'caila@gmail.com', '$2y$10$QgF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimientos` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Tipo` enum('Entrada','Salida') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `id_citas` int(11) DEFAULT NULL,
  `Monto_Pago` decimal(10,2) DEFAULT NULL,
  `Metodo_pago` enum('Efectivo','Tarjeta','Transferencia') DEFAULT NULL,
  `Fecha_Pago` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(100) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `Nombre_Servicios` varchar(100) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `Nombre_Servicios`, `Descripcion`, `Duracion`, `Precio`) VALUES
(1, 'Manicure', 'Nadota', '02:00:00', '100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id_trabajadores` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido_Paterno` varchar(100) DEFAULT NULL,
  `Apellido_Materno` varchar(100) DEFAULT NULL,
  `Cargo` varchar(100) DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_citas`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_trabajadores` (`id_trabajadores`),
  ADD KEY `id_servicios` (`id_servicios`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimientos`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_citas` (`id_citas`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id_trabajadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_citas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimientos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id_trabajadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_trabajadores`) REFERENCES `trabajadores` (`id_trabajadores`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicios`) REFERENCES `servicios` (`id_servicios`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_citas`) REFERENCES `citas` (`id_citas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
